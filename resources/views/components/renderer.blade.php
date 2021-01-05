@if ($inEditor)
<div class="content-editor" id="{{ $key }}" contenteditable="true">{!! $content ?: $slot !!}</div>
@else
{!! $content ?: $slot !!}
@endif
