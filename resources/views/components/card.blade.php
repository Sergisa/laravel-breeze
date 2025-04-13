<div {{ $attributes->merge(['class' => 'card']) }} id="{{ $attributes->get('id') }}">
    <div class="card__image">
        <img src="{{ $attributes->get('img') }}" alt="">
    </div>
    <div class="card__content">
        <span class="card__label @if($attributes->has('action')) card__label_violet @endif">
            @if($attributes->has('action'))
                Акция
            @else
                Не акция
            @endif
        </span>
        <p class="card__date">{{ $date }}</p>
        <h1 class="card__header">{{ $title }}</h1>
        <p class="card__description">
            {{ $slot }}
        </p>
        @if($attributes->has('link'))
            <a href="{{ $attributes->get('link') }}" class="ml-auto inline-flex p-2 underline italic mt-auto">Читать
                далее</a>
        @endif
    </div>
</div>
@pushonce('scripts')
    <script type="module">
        $('.card').on('click', function () {
            console.log(this.id)
        })
    </script>
@endpushonce
