<?php

use Illuminate\Database\Seeder;
use App\Category;

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
            'マンドリンオリジナル作品', '編曲作品'    
        ];
        
        $organization_categorys = [
            '合奏曲', 'アンサンブル曲', '独奏曲'
        ];
        
        $genre_categorys = [
            'J-POP', 'アニメ', 'ボーカロイド曲', 'ゲームミュージック', 'クラシック', 'その他'
        ];
        
        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == 'マンドリンオリジナル作品') {
                foreach ($organization_categorys as $organization_category) {
                    Category::create ([
                        'major_category_name' => $major_category_name,
                        'middle_category_name' => $organization_category,
                        'name' => $organization_category,
                        'description' => $organization_category,
                    ]);
                }
            }
            
            if ($major_category_name == '編曲作品') {
                foreach ($organization_categorys as $organization_category) {
                    foreach ($genre_categorys as $genre_category) {
                        Category::create ([
                            'major_category_name' => $major_category_name,
                            'middle_category_name' => $organization_category,
                            'name' => $genre_category,
                            'description' => $genre_category,
                        ]);
                    }
                }
            }
        }
    }
}
