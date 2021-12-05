@component('mail::message')
你好 {{ $user }},

考慮到您的意願，我們提醒您 {{ \Carbon\Carbon::now()->diffInDays($date_remind, false) ? \Carbon\Carbon::now()->diffInDays($date_remind, false) . ' 直到' : ' 今天' }} 特別的日子，

<b>日期</b>: {{ $date }}

<b>姓名:</b> {{ $name }}

<b>類別:</b> {{ $date_type }}

直到那一天，你還有時間為這個特殊的日子做準備。

尊敬。

Reviews4CH 團隊
@endcomponent
