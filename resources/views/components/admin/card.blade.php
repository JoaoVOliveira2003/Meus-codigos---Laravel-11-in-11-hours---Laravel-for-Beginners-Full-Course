@props(['color', 'bgColor' => 'white', 'title' => '', 'footer' => ''])

<div {{ $attributes->merge(['class' => "card card-text-$color card-bg-$bgColor"]) }}>
    
    @if (!empty($title))
        <div class="card-header">
            {{ $title }}
        </div>
    @endif

    <div class="card-body">
        {{ $slot ?: 'Insira um valor' }}
    </div>

    @if (!empty($footer))
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>