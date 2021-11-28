<?php

use Illuminate\Database\Seeder;
use \App\Models\Region;
use \App\Models\Country;

class CountryRegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            '中國' => [
                'name' => [
                    'en' => 'China',
                    'zh' => '中國'
                ],
                'region_naming' => [
                    'en' => 'Region',
                    'zh' => '地區'
                ],
                'regions' => [
                    '安徽省', '北京市', '重庆市', '福建省', '广东省', '甘肃省', '广西壮族自治区', '贵州省', '河南省', '湖北省', '河北省', '海南省', '香港特别行政区', '黑龙江省', '湖南省', '吉林省', '江苏省', '江西省', '辽宁省', '澳门特别行政区', '内蒙古自治区', '宁夏回族自治区', '青海省', '四川省', '山东省', '上海市', '陕西省', '山西省', '天津市', '台湾省', '新疆维吾尔自治区', '西藏自治区', '云南省', '浙江省'
                ],
                'is_enable' => true
            ],
            '阿爾巴尼亞'=>['is_enable'=>false],'阿爾及利亞'=>['is_enable'=>false],'安道爾共和國'=>['is_enable'=>false],'安哥拉'=>['is_enable'=>false],'安提瓜和巴布達'=>['is_enable'=>false],'阿根廷'=>['is_enable'=>false],'亞美尼亞'=>['is_enable'=>false],'澳大利亞'=>['is_enable'=>false],'阿塞拜疆'=>['is_enable'=>false],'巴哈馬群島'=>['is_enable'=>false],'巴林'=>['is_enable'=>false],'孟加拉國'=>['is_enable'=>false],'巴巴多斯'=>['is_enable'=>false],'白俄羅斯'=>['is_enable'=>false],'比利時'=>['is_enable'=>false],'伯利茲'=>['is_enable'=>false],'貝寧'=>['is_enable'=>false],'不丹'=>['is_enable'=>false],'玻利維亞'=>['is_enable'=>false],'波斯尼亞和黑塞哥維那'=>['is_enable'=>false],'博茨瓦納'=>['is_enable'=>false],'巴西'=>['is_enable'=>false],'文萊'=>['is_enable'=>false],'保加利亞'=>['is_enable'=>false],'佈基納法索'=>['is_enable'=>false],'佈隆迪'=>['is_enable'=>false],'佛得角'=>['is_enable'=>false],'柬埔寨'=>['is_enable'=>false],'喀麥隆'=>['is_enable'=>false],'中非共和國'=>['is_enable'=>false],'乍得'=>['is_enable'=>false],'智利'=>['is_enable'=>false],'哥倫比亞'=>['is_enable'=>false],'科摩羅'=>['is_enable'=>false],'剛果民主共和國'=>['is_enable'=>false],'剛果共和國'=>['is_enable'=>false],'哥斯達黎加'=>['is_enable'=>false],'科特迪瓦'=>['is_enable'=>false],'克羅地亞'=>['is_enable'=>false],'古巴'=>['is_enable'=>false],'賽歐魯斯'=>['is_enable'=>false],'捷克共和國'=>['is_enable'=>false],'丹麥'=>['is_enable'=>false],'吉佈提'=>['is_enable'=>false],'多米尼加'=>['is_enable'=>false],'多米尼加阿共和國'=>['is_enable'=>false],'東帝汶'=>['is_enable'=>false],'厄瓜多爾'=>['is_enable'=>false],'埃及'=>['is_enable'=>false],'薩爾瓦多'=>['is_enable'=>false],'赤道幾內亞'=>['is_enable'=>false],'厄立特里亞'=>['is_enable'=>false],'愛沙尼亞'=>['is_enable'=>false],'i斯威士蘭'=>['is_enable'=>false],'埃塞俄比亞'=>['is_enable'=>false],'斐濟'=>['is_enable'=>false],'芬蘭'=>['is_enable'=>false],'法國'=>['is_enable'=>false],'加蓬'=>['is_enable'=>false],'岡比亞'=>['is_enable'=>false],'喬治亞州'=>['is_enable'=>false],'德國'=>['is_enable'=>false],'加納'=>['is_enable'=>false],'希臘'=>['is_enable'=>false],'格林納達'=>['is_enable'=>false],'危地馬拉'=>['is_enable'=>false],'幾內亞'=>['is_enable'=>false],'幾內亞比紹'=>['is_enable'=>false],'圭亞那'=>['is_enable'=>false],'海底'=>['is_enable'=>false],'洪都拉斯'=>['is_enable'=>false],'匈牙利'=>['is_enable'=>false],'冰島'=>['is_enable'=>false],'印尼'=>['is_enable'=>false],'伊朗'=>['is_enable'=>false],'伊拉克'=>['is_enable'=>false],'愛爾蘭'=>['is_enable'=>false],'以色列'=>['is_enable'=>false],'意大利'=>['is_enable'=>false],'牙買加'=>['is_enable'=>false],'日本'=>['is_enable'=>false],'約旦'=>['is_enable'=>false],'哈薩克斯坦'=>['is_enable'=>false],'肯尼亞'=>['is_enable'=>false],'基里巴斯'=>['is_enable'=>false],'朝鮮'=>['is_enable'=>false],'韓國'=>['is_enable'=>false],'科索沃'=>['is_enable'=>false],'科威特'=>['is_enable'=>false],'吉爾吉斯斯坦'=>['is_enable'=>false],'老撾'=>['is_enable'=>false],'拉脫維亞'=>['is_enable'=>false],'黎巴嫩'=>['is_enable'=>false],'萊索托'=>['is_enable'=>false],'利比里亞'=>['is_enable'=>false],'利比亞'=>['is_enable'=>false],'列支敦士登'=>['is_enable'=>false],'立陶宛'=>['is_enable'=>false],'盧森堡'=>['is_enable'=>false],'馬達加斯加'=>['is_enable'=>false],'馬拉維'=>['is_enable'=>false],'馬來西亞'=>['is_enable'=>false],'馬爾代夫'=>['is_enable'=>false],'馬里'=>['is_enable'=>false],'馬耳他'=>['is_enable'=>false],'馬紹爾羣島'=>['is_enable'=>false],'毛里塔尼亞'=>['is_enable'=>false],'毛里求斯'=>['is_enable'=>false],'墨西哥'=>['is_enable'=>false],'密克羅尼西亞聯邦'=>['is_enable'=>false],'摩爾多瓦'=>['is_enable'=>false],'摩納哥'=>['is_enable'=>false],'蒙古'=>['is_enable'=>false],'黑山共和國'=>['is_enable'=>false],'摩洛哥'=>['is_enable'=>false],'莫桑比克'=>['is_enable'=>false],'緬甸'=>['is_enable'=>false],'納米比亞'=>['is_enable'=>false],'瑙魯'=>['is_enable'=>false],'尼泊爾'=>['is_enable'=>false],'荷蘭'=>['is_enable'=>false],'新西蘭'=>['is_enable'=>false],'尼加拉瓜'=>['is_enable'=>false],'尼日爾'=>['is_enable'=>false],'尼日利亞'=>['is_enable'=>false],'北馬其頓'=>['is_enable'=>false],'挪威'=>['is_enable'=>false],'阿曼'=>['is_enable'=>false],'帕勞'=>['is_enable'=>false],'巴拿馬'=>['is_enable'=>false],'巴布新幾內亞'=>['is_enable'=>false],'巴拉圭'=>['is_enable'=>false],'秘魯'=>['is_enable'=>false],'菲律賓'=>['is_enable'=>false],'波蘭'=>['is_enable'=>false],'葡萄牙'=>['is_enable'=>false],'卡塔爾'=>['is_enable'=>false],'羅馬尼亞'=>['is_enable'=>false],'俄羅斯'=>['is_enable'=>false],'盧旺達'=>['is_enable'=>false],'聖基茨和尼維斯'=>['is_enable'=>false],'聖盧西亞島'=>['is_enable'=>false],'聖文森特和格林納丁斯'=>['is_enable'=>false],'薩摩亞'=>['is_enable'=>false],'聖馬力諾'=>['is_enable'=>false],'聖多美和普林西比'=>['is_enable'=>false],'沙特阿拉伯'=>['is_enable'=>false],'塞內加爾'=>['is_enable'=>false],'塞爾維亞'=>['is_enable'=>false],'塞舌爾'=>['is_enable'=>false],'塞拉利昂'=>['is_enable'=>false],'新加坡'=>['is_enable'=>false],'斯洛伐克'=>['is_enable'=>false],'斯洛文尼亞'=>['is_enable'=>false],'所羅門群島'=>['is_enable'=>false],'索馬里'=>['is_enable'=>false],'西班牙'=>['is_enable'=>false],'斯里蘭卡'=>['is_enable'=>false],'蘇丹'=>['is_enable'=>false],'南蘇丹'=>['is_enable'=>false],'蘇里南'=>['is_enable'=>false],'瑞典'=>['is_enable'=>false],'瑞士'=>['is_enable'=>false],'敘利亞'=>['is_enable'=>false],'台灣'=>['is_enable'=>false],'塔吉克斯坦'=>['is_enable'=>false],'坦桑尼亞'=>['is_enable'=>false],'泰國'=>['is_enable'=>false],'多哥'=>['is_enable'=>false],'湯加'=>['is_enable'=>false],'特立尼達和多巴哥'=>['is_enable'=>false],'突尼斯'=>['is_enable'=>false],'土耳其'=>['is_enable'=>false],'土庫曼斯坦'=>['is_enable'=>false],'圖瓦盧'=>['is_enable'=>false],'烏干達'=>['is_enable'=>false],'烏克蘭'=>['is_enable'=>false],'阿拉伯聯合酋長國'=>['is_enable'=>false],'烏拉圭'=>['is_enable'=>false],'烏茲別克斯坦'=>['is_enable'=>false],'瓦努阿圖'=>['is_enable'=>false],'梵蒂岡城'=>['is_enable'=>false],'委內瑞拉'=>['is_enable'=>false],'越南'=>['is_enable'=>false],'也門'=>['is_enable'=>false],'贊比亞'=>['is_enable'=>false],'津巴布韋'=>['is_enable'=>false]
        ];

        $slugify = new \Cocur\Slugify\Slugify();
        $slugify->activateRuleSet('chinese');
        foreach($countries as $countryName => $countryData){
            $slug = $slugify->slugify($countryName);
            $country = Country::firstOrCreate(['slug' => $slug]);
            $transData = [];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $naming = $countryName;
                if(\Illuminate\Support\Arr::has($countryData, 'name')){
                    $naming = \Illuminate\Support\Arr::get($countryData['name'], $localeKey, app('laravellocalization')->getDefaultLocale());
                }
                $transData[$localeKey] = [
                    'country' => $naming
                ];
            }
            $transData['is_enable'] = $countryData['is_enable'];
            Country::updateOrCreate(
                [
                    'slug' => $slug
                ],
                $transData);
            $regions = \Illuminate\Support\Arr::has($countryData, 'regions')
                ?  \Illuminate\Support\Arr::get($countryData, 'regions')
                : [];
            if(!empty($regions)){
                foreach($regions as $regionName){
                    $slug = $slugify->slugify($regionName);
                    $region = Region::firstOrCreate(['slug' => $slug, 'country_id' => $country->id]);
                    $transRegionData = [];
                    foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                        $naming = $regionName;
//                        if(\Illuminate\Support\Arr::has($countryData, 'name')){
//                            $naming = \Illuminate\Support\Arr::get($countryData['name'], $localeKey, app('laravellocalization')->getDefaultLocale());
//                        }
                        $regionNaming = 'Region';
                        if(\Illuminate\Support\Arr::has($countryData, 'region_naming')){
                            $regionNaming = \Illuminate\Support\Arr::get($countryData['region_naming'], $localeKey, app('laravellocalization')->getDefaultLocale());
                        }
                        $transRegionData[$localeKey] = [
                            'region' => $naming,
                            'region_naming' => $regionNaming
                        ];
                    }

                    Region::updateOrCreate(
                        [
                            'slug' => $slug,
                            'country_id' => $country->id
                        ],
                        $transRegionData
                    );
                }
            }
        }
    }
}
