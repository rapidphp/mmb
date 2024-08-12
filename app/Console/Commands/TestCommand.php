<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mmb\Core\Bot;
use Mmb\Core\Updates\Infos\UserInfo;
use Mmb\Core\Updates\Update;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /** @var Bot $bot */
        $bot = app(Bot::class);

        \Laravel\Prompts\info("Mmb is listening to updates now...");

        $bot->loopUpdates(
            received: function()
            {
                \Laravel\Prompts\info(sprintf("New update received at %s", date('H:i:s')));
            },
        );
    }
}
