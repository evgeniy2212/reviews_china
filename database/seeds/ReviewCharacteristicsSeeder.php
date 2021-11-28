<?php

use Illuminate\Database\Seeder;
use \App\Models\ReviewCharacteristic;
use \App\Models\ReviewCategory;

class ReviewCharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characteristics = [
            'person' => [
                ['name' =>  [
                    'en' => 'Honest',
                    'zh' => '誠實',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Loyal',
                    'zh' => '忠誠',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Responsible',
                    'zh' => '負責任',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Respectful',
                    'zh' => '尊重',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Humble',
                    'zh' => '謙遜',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Forgiving',
                    'zh' => '寬容',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Compassionate',
                    'zh' => '有同情心',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Fair',
                    'zh' => '公平',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Authentic',
                    'zh' => '真實可信',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Courageous',
                    'zh' => '勇敢',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Generous',
                    'zh' => '慷慨',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Polite',
                    'zh' => '有禮貌',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Kind',
                    'zh' => '親切友好',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Loving',
                    'zh' => '有愛心',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Reliable',
                    'zh' => '可靠',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Conscientious',
                    'zh' => '盡職盡責',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Patient',
                    'zh' => '由耐心',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Thorough',
                    'zh' => '仔細周到',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Dishonest',
                    'zh' => '不誠實',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Selfish',
                    'zh' => '自私',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Arrogant',
                    'zh' => '自大',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Rude',
                    'zh' => '粗魯',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Cruel',
                    'zh' => '殘酷',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Hypocritical',
                    'zh' => '虛偽',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Jealous',
                    'zh' => '好妒',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Immoral',
                    'zh' => '不道德',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Greedy',
                    'zh' => '貪婪',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Lazy',
                    'zh' => '懶惰',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Unscrupulous',
                    'zh' => '狂妄',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Vengeful',
                    'zh' => '睚眥必報',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Deceptive',
                    'zh' => '虛偽',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Unforgiving',
                    'zh' => '無情',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Nasty',
                    'zh' => '齷齪',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Aggressive',
                    'zh' => '咄咄逼人',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Disrespectful',
                    'zh' => '不尊敬',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Bossy',
                    'zh' => '專橫跋扈',
                ], 'is_positive' => false, 'is_published' => true,],
            ],
            'company' => [
                ['name' =>  [
                    'en' => 'Adventurous',
                    'zh' => '敢於創新',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Agile',
                    'zh' => '靈活',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Challenging',
                    'zh' => '充滿挑戰',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Collaborative',
                    'zh' => '合作的',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Creative',
                    'zh' => '有創造力',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Daring',
                    'zh' => '大膽的',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Energetic',
                    'zh' => '精力充沛',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Energizing',
                    'zh' => '激勵的',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Fun',
                    'zh' => '有趣',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Friendly',
                    'zh' => '友好',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Inclusive',
                    'zh' => '包容性強',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Innovate',
                    'zh' => '創新的',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Inspiring',
                    'zh' => '鼓舞人心',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Passionate',
                    'zh' => '熱情',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Playful',
                    'zh' => '幽默',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Progressive',
                    'zh' => '先進的',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Respectful',
                    'zh' => '恭敬的',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Rewarding',
                    'zh' => '盈利',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Biased',
                    'zh' => '有爭議',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Boring',
                    'zh' => '無聊',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Discriminatory',
                    'zh' => '歧視',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Demanding',
                    'zh' => '苛刻',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Disengaged',
                    'zh' => '空閒',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Disrespectful',
                    'zh' => '不尊重',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Messy',
                    'zh' => '混亂的',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Micromanaging',
                    'zh' => '微處理',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Inflexible',
                    'zh' => '不靈活',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Deceptive',
                    'zh' => '欺騙',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Outdated',
                    'zh' => '過時',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Rigid',
                    'zh' => '死板',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Stressful',
                    'zh' => '壓力大',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Toxic',
                    'zh' => '有害',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Unethical',
                    'zh' => '不道德',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Unforgiving',
                    'zh' => '無情的',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Unrewarding',
                    'zh' => '不能盈利',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Unsupportive',
                    'zh' => '缺少支持',
                ], 'is_positive' => false, 'is_published' => true,],
            ],
            'goods' => [
                ['name' =>  [
                    'en' => 'Comfortable',
                    'zh' => '舒適',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Durable',
                    'zh' => '耐用',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Effective',
                    'zh' => '有效',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Ideal',
                    'zh' => '完美',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Popular',
                    'zh' => '流行',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Quality',
                    'zh' => '質量',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Stylish',
                    'zh' => '時髦',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Well-priced',
                    'zh' => '價格合理',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Useful',
                    'zh' => '有用',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Creamy',
                    'zh' => '柔滑細膩',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Delicious',
                    'zh' => '美味',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Dangerous',
                    'zh' => '危險',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Fragrant',
                    'zh' => '芳香',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Nutritious',
                    'zh' => '營養豐富',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Organic',
                    'zh' => '有機的',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Peculiar',
                    'zh' => 'Своеобразный',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Smooth',
                    'zh' => '光滑',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Tempting',
                    'zh' => '吸引人',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' =>  [
                    'en' => 'Bad',
                    'zh' => '劣質'
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Faulty',
                    'zh' => '有缺陷',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Uncomfortable',
                    'zh' => '不舒服',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Low quality',
                    'zh' => '質量低劣',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Outdated',
                    'zh' => '過時',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Impractical',
                    'zh' => '不切實際',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Overrated',
                    'zh' => '高估',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Primitive',
                    'zh' => '樸實',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Useless',
                    'zh' => '無用',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Bitter',
                    'zh' => '苦澀',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Chewy',
                    'zh' => '有嚼勁',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Disgusting',
                    'zh' => '令人厭惡',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Harmful',
                    'zh' => 'Вредный',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Horrible',
                    'zh' => '糟糕',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Tasteless',
                    'zh' => '枯燥',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Terrible',
                    'zh' => '糟糕',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Unpleasant',
                    'zh' => '令人不快',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Unusual',
                    'zh' => '不尋常',
                ], 'is_positive' => false, 'is_published' => true,],
            ],
            'vocations' => [
                ['name' => [
                    'en' => 'Alive',
                    'zh' => '活潑',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Attractive',
                    'zh' => '吸引人',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Beautiful',
                    'zh' => '美麗',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Calm',
                    'zh' => '冷靜',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Comfortable',
                    'zh' => '舒適',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Enchanting',
                    'zh' => '迷人',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Exciting',
                    'zh' => '刺激',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Exotic',
                    'zh' => '異國情調',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Fascinating',
                    'zh' => '風景迷人',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Friendly',
                    'zh' => '友好',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Fun',
                    'zh' => '有趣',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Homey',
                    'zh' => '舒適',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Inexpensive',
                    'zh' => '便宜',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Interesting',
                    'zh' => '有趣',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Lively',
                    'zh' => '生氣勃勃',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Peaceful',
                    'zh' => '平靜',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Picturesque',
                    'zh' => '風景如畫',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Unspoiled',
                    'zh' => '自然美',
                ], 'is_positive' => true, 'is_published' => true,],
                ['name' => [
                    'en' => 'Bleak',
                    'zh' => '荒涼',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Boring',
                    'zh' => '無聊',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Bustling',
                    'zh' => '忙亂',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Creepy',
                    'zh' => '令人毛骨悚然',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Crowded',
                    'zh' => '擁擠',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Dangerous',
                    'zh' => '危險',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Desert',
                    'zh' => '荒蕪',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Desolate',
                    'zh' => '荒無人煙',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Dirty',
                    'zh' => '不夠乾淨',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Dull',
                    'zh' => '無趣',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Hectic',
                    'zh' => '繁忙',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Horrifying',
                    'zh' => '令人驚駭',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Nightmarish',
                    'zh' => '可怕',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Overcrowded',
                    'zh' => '過於擁擠',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Polluted',
                    'zh' => '被污染',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Pricey',
                    'zh' => '價格高',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Stormy',
                    'zh' => '暴風雨',
                ], 'is_positive' => false, 'is_published' => true,],
                ['name' => [
                    'en' => 'Terrible',
                    'zh' => '糟糕',
                ], 'is_positive' => false, 'is_published' => true,],
            ]
        ];

        foreach(ReviewCharacteristic::all() as $characteristic){
            $characteristic->delete();
        }
        foreach($characteristics as $characteristic_category => $characteristics){
            $category_id = ReviewCategory::where('slug', '=', $characteristic_category)->first()->id;
            foreach($characteristics as $characteristic){
                $characteristic['review_category_id'] = $category_id;
                $charactData = [
                    'review_category_id' => $category_id,
                    'is_positive' => $characteristic['is_positive'],
                    'is_published' => $characteristic['is_published'],
                ];
                foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                    $charactData[$localeKey] = [
                        'name' => \Illuminate\Support\Arr::get($characteristic['name'], $localeKey, app('laravellocalization')->getDefaultLocale())
                    ];
                }
                ReviewCharacteristic::create($charactData);
            }
        }
    }
}
