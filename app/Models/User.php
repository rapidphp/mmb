<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Rapid\Laplus\Present\HasPresent;
use Rapid\Laplus\Present\Present;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasPresent;

    public function present(Present $present)
    {
        $present->id();
        $present->string('name');
        $present->string('email')->unique();
        $present->timestamp('email_verified_at')->nullable();
        $present->string('password')->cast('hashed')->hidden();
        $present->rememberToken()->hidden();
        $present->timestamps();
    }
}
