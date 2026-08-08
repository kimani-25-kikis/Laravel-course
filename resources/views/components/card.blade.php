@props(['color', 'bgColor'])
<div class ="card">
    <div class = "card-header">{{ $title }}</div>
    @if ($slot->isEmpty())
        <p>Josh</p>
    @else
        {{ $slot }}
    @endif
    <div class = "card-footer">{{ $footer }}</div>
</div>