<?php

use Illuminate\Database\Seeder;

class UserTableSheeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vt_users')->insert([
            ['username' => 'superadmin', 'password' => bcrypt('admin'), 'level' => 0, 'fullname' => 'Phạm Văn Quyết'],
            ['username' => 'admin', 'password' => bcrypt('admin'), 'level' => 1, 'fullname' => 'Vẫn Là Anh'],
            ['username' => 'member', 'password' => bcrypt('12345'), 'level' => 2, 'fullname' => 'Trần Thành Trung'],
        ]);
    }
}
