<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Collection;
use Mmb\Support\Db\HasFinder;
use Mmb\Support\Step\HasStep;
use Mmb\Support\Step\Stepping;
use Rapid\Laplus\Present\HasPresent;
use Rapid\Laplus\Present\Present;
use Spatie\Permission\Traits\HasRoles;

class BotUser extends Authenticatable implements Stepping
{
    use HasFactory, HasPresent, HasStep, HasFinder, HasRoles;

    protected $guard_name = 'bot';

    public function present(Present $present)
    {
        $present->id();
        $present->text('name');
        $present->text('step');
        $present->timestamps();
    }
}
