<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
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
                'link_name' => '杰的博客',
                'link_title' => '每天进步一点点',
                'link_url' => 'http://www.jiegiser.win',
                'link_order' => 1,
            ],
            [
                'link_name' => 'happyGIS分享GIS快乐',
                'link_title' => '分享gis技术',
                'link_url' => 'http://www.happygis.com',
                'link_order' => 2,
            ]
        ];
        DB::table('links')->insert($data);
    }

}
