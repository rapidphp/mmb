<?php

namespace App\Mmb\Handlers;

use Mmb\Action\Update\UpdateHandler;

class GroupHandler extends UpdateHandler
{

    public function match()
    {
        return in_array($this->get('message.chat.type'), ['group', 'supergroup']);
    }

    public function list() : array
    {
        return [
            $this->step(),
        ];
    }

}
