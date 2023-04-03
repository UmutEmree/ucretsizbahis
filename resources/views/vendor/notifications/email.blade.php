@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# Merhaba !
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@if (isset($actionText))
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endif

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

<!-- Salutation -->
@if (! empty($salutation))
{{ $salutation }}
@else
Saygılarımızla,<br>{{ config('app.name') }}
@endif

<!-- Subcopy -->
@if (isset($actionText))
@component('mail::subcopy')
Eğer bağlantıya tıklamayla ilgili sorun yaşıyorsanız "{{ $actionText }}" linki kopyayalıp browserınıza yapıştırarak deneyiniz: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endif
@endcomponent
