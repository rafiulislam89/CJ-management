<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => '১ম শ্রেণী', 'class_type_id' => $ct[2]],
            ['name' => '২য় শ্রেণী', 'class_type_id' => $ct[3]],
            ['name' => '৩য় শ্রেণী', 'class_type_id' => $ct[4]],
            ['name' => '৪র্থ শ্রেণী', 'class_type_id' => $ct[5]],
            ['name' => '৫ম শ্রেণী', 'class_type_id' => $ct[5]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
