@component('mail::message')

@lang('service/message.mail.hi') {{ $contact_name }}.

{{ config('app.name') }}, 通知您, {{ $name }} 他想將您包括在他的聯繫人名單中，以實時與您溝通。 如果您同意，請單擊下面的鏈接。

@component('mail::button', ['url' => $url])
    @lang('service/message.mail.agree')
@endcomponent

謝謝.<br>

團隊 {{ config('app.name') }}.
@endcomponent
