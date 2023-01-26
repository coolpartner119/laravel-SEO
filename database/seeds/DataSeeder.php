<?php

use Illuminate\Database\Seeder;
use App\Data;
use Illuminate\Support\Facades\DB;


class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'app_number' =>1 ,
                'id_card' => 'card1',
                'com_reg' => 'company11',
                'name' => 'John',
                'doc_number' => 1101,
                'status' => 'on'
            ],
            [
                'app_number' =>2 ,
                'id_card' => 'card1',
                'com_reg' => 'company12',
                'name' => 'John',
                'doc_number' => 1102,
                'status' => 'on'
            ],
            [
                'app_number' =>3 ,
                'id_card' => 'card2',
                'com_reg' => 'company21',
                'name' => 'martin',
                'doc_number' => 1121,
                'status' => 'on'
            ],
            [
                'app_number' =>4 ,
                'id_card' => 'card2',
                'com_reg' => 'company22',
                'name' => 'martin',
                'doc_number' => 1122,
                'status' => 'on'
            ],
            [
                'app_number' =>31 ,
                'id_card' => 'card3',
                'com_reg' => 'company31',
                'name' => 'John',
                'doc_number' => 1101,
                'status' => 'on'
            ],
            [
                'app_number' =>32 ,
                'id_card' => 'card3',
                'com_reg' => 'company12',
                'name' => 'John',
                'doc_number' => 1102,
                'status' => 'on'
            ],
            [
                'app_number' =>41 ,
                'id_card' => 'card4',
                'com_reg' => 'company11',
                'name' => 'cristin',
                'doc_number' => 1141,
                'status' => 'on'
            ],
            [
                'app_number' =>42 ,
                'id_card' => 'card4',
                'com_reg' => 'company12',
                'name' => 'cristin',
                'doc_number' => 1142,
                'status' => 'on'
            ],
            [
                'app_number' =>51 ,
                'id_card' => 'card',
                'com_reg' => 'company11',
                'name' => 'John',
                'doc_number' => 1101,
                'status' => 'on'
            ],
            [
                'app_number' =>52 ,
                'id_card' => 'card5',
                'com_reg' => 'company52',
                'name' => 'nikel',
                'doc_number' => 1152,
                'status' => 'on'
            ],
            [
                'app_number' =>61 ,
                'id_card' => 'card6',
                'com_reg' => 'company61',
                'name' => 'niket',
                'doc_number' => 1151,
                'status' => 'on'
            ],
            [
                'app_number' =>2 ,
                'id_card' => 'card6',
                'com_reg' => 'company62',
                'name' => 'John6',
                'doc_number' => 1162,
                'status' => 'on'
            ],
            [
                'app_number' =>1 ,
                'id_card' => 'card8',
                'com_reg' => 'company11',
                'name' => 'John',
                'doc_number' => 1101,
                'status' => 'on'
            ],
            [
                'app_number' =>72 ,
                'id_card' => 'card7',
                'com_reg' => 'company72',
                'name' => 'John7',
                'doc_number' => 1172,
                'status' => 'on'
            ],
            [
                'app_number' =>71 ,
                'id_card' => 'card7',
                'com_reg' => 'company71',
                'name' => 'John7',
                'doc_number' => 1171,
                'status' => 'on'
            ],
        ];
        DB::table('datas')->insert($data);
    }
}
