<?php

namespace Database\Seeders;

use App\Helpers\Pay;
use App\Helpers\Qs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'title' => 'Payments Info',
            'admission_fee' => 1000,
            'tution_fee' => 1000,
            'khoraki' => 1500,
            'ref_no' => Pay::genRefCode()
        ];
        DB::table('payments')->insert($data);
    }
}
