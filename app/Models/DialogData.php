<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mmb\Support\Step\StepCasting;
use Rapid\Laplus\Present\HasPresent;
use Rapid\Laplus\Present\Present;

class DialogData extends Model
{
    use HasFactory, HasPresent;

    public function present(Present $present)
    {
        $present->id();
        $present->belongsTo(User::class);
        $present->text('target')->cast(StepCasting::class)->nullable();
        $present->unsignedBigInteger('message_id')->nullable();
        $present->timestamps();
    }
}
