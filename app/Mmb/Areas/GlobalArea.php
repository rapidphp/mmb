<?php

namespace App\Mmb\Areas;

use App\Mmb\Sections\Home\HomeSection;
use Mmb\Auth\Area;

class GlobalArea extends Area
{

    protected string $namespace = 'App\Mmb\Sections';

    public function boot()
    {
        $this->backUsing(HomeSection::class, 'main');
    }

}
