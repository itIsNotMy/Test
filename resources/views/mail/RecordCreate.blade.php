@component('mail::message')
<p>Создана новая статья</p>

<p>{{ $record->text }}</p>
<p>{{ $record->owner }}</p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent