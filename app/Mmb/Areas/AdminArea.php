<?php

namespace App\Mmb\Areas;

use Mmb\Auth\Area;

class AdminArea extends Area
{

    protected string $namespace = 'App\Mmb\Sections\Panel';

    public function boot()
    {
        $this->auth('AccessPanel');
    }

}
