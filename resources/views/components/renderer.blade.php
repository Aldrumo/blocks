@if ($inEditor)
<div class="content-editor" id="{{ $key }}">{!! $content ?: $slot !!}</div>
@else
{!! $content ?: $slot !!}
@endif
