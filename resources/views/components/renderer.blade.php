@if ($inEditor)
<div class="content-editor" id="{{ $key }}">{{ $slot }}</div>
@else
{{ $slot }}
@endif
