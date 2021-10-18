@component('mail::message')
# Selamat datang.

Silahkan aktivasi akun melalui tombol di bawah ini.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
