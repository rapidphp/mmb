<?php

namespace App\Mmb\Sections\Panel;

use Mmb\Action\Section\Section;

class PanelSection extends Section
{

    public function main()
    {
        $this->response("Panel is empty!");
    }

}
