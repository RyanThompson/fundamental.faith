<main class="flex-grow flex items-start w-full px-8">

    <div class="flex flex-col gap-y-2 mt-44">
        @foreach (entries('map')->get() as $point)
        @if (Request::segment(1) == $point->id)
        <section class="">
            <header tabindex="-1" autofocus="" class="focus:outline-none">
                <h2 class="font-bold flex gap-x-2" aria-label="Faith {{ $point->id }}. {{ $point->heading }}">
                    <span class="text-4xl">{{ $point->id }}.</span>
                    <strong class="text-4xl">{{ $point->heading }}</strong>
                </h2>
            </header>
            <div class="font-medium pl-14 py-8 max-w-3xl">
                <p class="text-4xl">{!! $point->description !!}</p>
            </div>
        </section>
        @else
        <section>
            <header class="">
                <a href="/{{ $point->id }}" aria-heading="Faith {{ $point->id }}. {{ $point->heading }}"
                    class="opacity-50 hover:opacity-100 focus:opacity-100 transition-all duration-200">
                    <dl class="font-bold flex gap-x-2">
                        <dt class="text-4xl">{{ $point->id }}.</dt>
                        <dd class="text-4xl">{{ $point->heading }}</dd>
                    </dl>
                </a>
            </header>
        </section>
        @endif
        @endforeach
    </div>

</main>
