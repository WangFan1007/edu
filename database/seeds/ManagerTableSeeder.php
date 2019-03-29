<?php

use Illuminate\Database\Seeder;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //模拟出100条数据
        $facker = Faker\Factory::create('zh_CN');
        
        $data = [];
        for ($i=0; $i < 100; $i++) { 
            $data[] = [
                'username' => $facker->userName(),
                'password' => bcrypt('123456'),
                'gender' => rand(1, 3),
                'mobile' => $facker->phoneNumber(),
                'email' => $facker->email(),
                'role_id' => rand(1, 6),
                'created_at' => date('Y-m-d H:i:s', time()),
                'status' => rand(1, 2),
            ];
        }
        DB::table('manager')->insert($data);
    }
}
