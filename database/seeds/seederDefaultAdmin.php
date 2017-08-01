<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class seederDefaultAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('tbl_pengguna')->delete();
        
        $date = Carbon::now();
        $now = Carbon::createFromFormat('Y-m-d H:i:s',$date,'UTC');
        $now->setTimezone('Asia/Singapore');
        DB::table('tbl_pengguna')->insert(array(
            array(
                'username'=>'admin',
                'password'=>bcrypt('admin'),
                'status'=>'1',
                'last_login'=>$now
                ),
        ));
        
    }
}
