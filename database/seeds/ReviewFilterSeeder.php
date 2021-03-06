<?php

use Illuminate\Database\Seeder;
use \App\Models\ReviewFilter;

class ReviewFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filters = [
            [
                'name' => [
                    'en' => 'filter by date',
                    'zh' => '按日期過濾',
                ],
                'slug' => \Illuminate\Support\Str::slug('filter by date'),
            ],
            [
                'name' => [
                    'en' => 'sort by',
                    'zh' => '分類根據',
                ],
                'slug' => \Illuminate\Support\Str::slug('sort by'),
            ],
        ];

        foreach($filters as $filter){
            $filterData = [];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $filterData[$localeKey] = [
                    'name' => \Illuminate\Support\Arr::get($filter['name'], $localeKey, app('laravellocalization')->getDefaultLocale())
                ];
            }
            ReviewFilter::updateOrCreate(
                [
                    'slug' => $filter['slug']
                ],$filterData);
        }
    }
}
