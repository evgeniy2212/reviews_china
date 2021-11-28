@component('mail::message')

您好，{{ $name }}.

您的評論現在可在 {{ config('app.name') }}

@component('mail::button', ['url' => $url])
    你的意見
@endcomponent

謹致問候，<br>
— {{ __('service/index.site_name') }} 團隊
@endcomponent
