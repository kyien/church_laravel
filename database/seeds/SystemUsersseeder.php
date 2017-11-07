<?php

use Illuminate\Database\Seeder;

class SystemUsersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\SystemUser::class,5)->create();
    }
}
