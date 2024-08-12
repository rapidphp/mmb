<?php

namespace Database\Seeders;

use App\Models\BotUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::query()->delete();
        Role::query()->delete();

        Permission::create(['name' => 'access-panel', 'guard_name' => 'bot']);

        Role::create(['name' => 'super-admin', 'guard_name' => 'bot'])
            ->syncPermissions([
                'access-panel',
            ]);

        Role::create(['name' => 'admin', 'guard_name' => 'bot'])
            ->syncPermissions([
                'access-panel',
            ]);

        /** @var BotUser $botUser */
        $botUser = BotUser::find(370924007);
        $botUser->assignRole('super-admin');
    }
}
