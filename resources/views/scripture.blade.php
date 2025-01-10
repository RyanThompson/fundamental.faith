<main class="flex-grow flex items-start w-full px-8">

    <style>
        .scripture-text a {
            font-size: 2.25rem; /* 4xl */
            text-decoration: underline;
            font-weight: 800;
        }
    </style>

    <div class="flex flex-col gap-y-2 mt-44">
        @foreach (entries('scripture')->get() as $scripture)
        @if (Request::segment(1) == $scripture->id)
        <section class="mb-6">
            <header tabindex="-1" autofocus="" class="focus:outline-none">
                <h2 class="font-bold flex gap-x-2" aria-label="Faith {{ $scripture->id }}. {{ $scripture->label }}">
                    <span class="text-4xl">{{ $scripture->id }}.</span>
                    <strong class="text-4xl">{{ $scripture->label }}</strong>
                </h2>
            </header>
            <div class="font-medium pl-14 py-8 pb-0 max-w-3xl">
                <p class="text-4xl scripture-text">{!! strip_tags(Str::markdown($scripture->text), '<a>') !!}</p>
            </div>
            @if ($scripture->hebrew)
            <div class="font-medium pl-14 py-8 max-w-3xl" dir="rtl">
                <p class="text-2xl">{!! $scripture->hebrew !!}</p>
            </div>
            @endif
            @if ($scripture->notes || $scripture->links)
            <div class="pl-14 py-4 max-w-3xl">
                @foreach ($scripture->notes ?? [] as $note)
                <div class="text-sm py-1 opacity-50 leading-snug">{!! $note !!}</div>
                @endforeach
                @foreach ($scripture->links ?? [] as $url => $label)
                <div>
                    <a href="{{ is_numeric($url) ? $label : $url }}" class="text-sm py-1 opacity-50 hover:opacity-100 focus:opacity-100 leading-snug underline">{{ is_numeric($url) ? $label : $url }}{!! $label ? " &mdash; {$label}": null !!}</a>
                </div>
                @endforeach
            </div>
            @endif
        </section>
        @else
        <section>
            <header class="">
                <a href="/{{ $scripture->id }}" aria-heading="Faith {{ $scripture->id }}. {{ $scripture->label }}"
                    class="opacity-50 hover:opacity-100 focus:opacity-100 transition-all duration-200">
                    <dl class="font-bold flex gap-x-2">
                        <dt class="text-4xl">{{ $scripture->id }}.</dt>
                        <dd class="text-4xl">{{ $scripture->label }}</dd>
                    </dl>
                </a>
            </header>
        </section>
        @endif
        @endforeach
    </div>

</main>
