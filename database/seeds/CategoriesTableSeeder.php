<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
                    'ズボン', '上着', '靴','アイテム'
                ];
        
                $pants_categories = [
                    'ジーパン', 'チノパン', 'スウェット','半パン',
                ];
                $pants_detail_categories = [
                    '', 'T-shirt', '靴',
                ];
        

                $Material_categories = [
                    'ナイロン', '綿', 'シルク' ,
                ];
                
                $brand_categories = [
                    'ユニクロ', 'GU', 'H&M' 
                ];
                foreach ($major_category_names as $major_category_name) {
                    if ($major_category_name == '服') {

                    }

                }
                }
}
