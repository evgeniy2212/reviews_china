@component('mail::message')

@lang('service/message.mail.hi') {{ $name }}.

{{ config('app.name') }}, 通知您您有未閱讀的消息，請檢查它們。

謝謝.<br>

團隊 {{ config('app.name') }}.
@endcomponent
