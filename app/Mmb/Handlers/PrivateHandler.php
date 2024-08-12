<?php

namespace App\Mmb\Handlers;

use App\Mmb\Commands;
use App\Mmb\Sections;
use App\Mmb\MiddleActions;
use App\Models\BotUser;
use Mmb\Action\Section\GlobalDialogHandler;
use Mmb\Action\Update\HandlerFactory;
use Mmb\Action\Update\UpdateHandler;
use Mmb\Support\Db\ModelFinder;

class PrivateHandler extends UpdateHandler
{

    public function handle(HandlerFactory $handler)
    {
        $handler
            ->match($this->update->getChat()?->type == 'private')
            ->recordUser(
                BotUser::class,
                $this->update->getUser()?->id,
                create: $this->createUser(...),
                validate: $this->validateUser(...),
                autoSave: true,
            )
            ->handle([
                Commands\StartCommand::class,
                $handler->step(),
            ])
        ;
    }

    public function createUser()
    {
        $user = $this->update->getUser();

        return [
            'id' => $user->id,
            'name' => $user->name,
            'step' => '',
        ];
    }

    public function validateUser(BotUser $user)
    {
        // return $user->ban === false || $user->can('IgnoreBan');
        return true;
    }

}
