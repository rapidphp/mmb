<?php

namespace App\Mmb\Sections\Home;

use App\Mmb\Sections\Panel\PanelSection;
use App\Models\BotUser;
use Mmb\Action\Section\Menu;
use Mmb\Action\Section\Section;

class HomeSection extends Section
{
    public function main()
    {
        $this->menu('mainMenu')->response();
    }

    public function mainMenu(Menu $menu)
    {
        $menu
            ->schema([
                [ $menu->key("Hello World", 'hello_world') ],

                [ $menu->keyFor("Open Panel", PanelSection::class, 'main')->ifAllowed() ],
            ])
            ->message(__("Welcome:"))
        ;
    }
    
    public function hello_world()
    {
    	$this->response("Hello World !");
    }

}
