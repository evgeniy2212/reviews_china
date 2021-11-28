@component('mail::message')
您好 {{ $name }},

您在Reviews4Results的賬戶已經更新。如果您沒有授權此更改，請聯繫info@reviews4ch.com。

非常感謝您的評論！

谨致问候,<br>
— {{ __('service/index.site_name') }} 團隊
@endcomponent
