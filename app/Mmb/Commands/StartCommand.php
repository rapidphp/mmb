<?php

namespace App\Mmb\Commands;

use App\Mmb\Sections\Ghost\GhostSendMessageForm;
use App\Mmb\Sections\Home\HomeSection;
use App\Mmb\Sections\Profile\SetProfileAsWelcomeForm;
use App\Mmb\Sections\Profile\SetProfileForm;
use App\Models\BotUser;
use App\Models\User;
use Mmb\Action\Event\StartCommandAction;

class StartCommand extends StartCommandAction
{

    protected $command = ['/start', '/start {code:any}' => 'invited'];

    protected $ignoreSpaces = true;

    public function handle()
    {
        if (BotUser::current()->wasRecentlyCreated)
        {
            SetProfileAsWelcomeForm::make()->request();
            return;
        }

        HomeSection::make()->main();
    }
    
    public function invited($code)
    {
        if (BotUser::current()->wasRecentlyCreated && ($secondUser = BotUser::find($code)) && !BotUser::current()->is($secondUser))
        {
            // Invite Action
            // return;
        }
        
        $this->handle();
    }

}
