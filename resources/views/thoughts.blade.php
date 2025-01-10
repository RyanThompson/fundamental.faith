<main class="flex-grow flex items-start w-full px-8">

	<div class="flex flex-col gap-y-2 mt-44 px-8">

        <div class="mb-20">
            <h1 class="text-5xl font-bold mb-4">Thoughts</h1>
            <p class="text-3xl font-medium max-w-lg">A collection of larger thoughts regarding the Christian faith.</p>
        </div>

		@foreach (entries('thoughts')->get() as $thought)
		<section>
			<header class="">
				<a href="/{{ Str::slug($thought->heading) }}/{{ $thought->id }}" aria-heading="Thought {{ $thought->id }}. {{ $thought->heading }}" class="opacity-50 hover:opacity-100 focus:opacity-100 transition-all duration-200 underline">
				  <dl class="font-bold flex gap-x-2">
					<dt class="text-4xl">{{ $thought->id }}.</dt>
					<dd class="text-4xl">{{ $thought->heading }}</dd>
				  </dl>
				</a>
			  </header>
		</section>
		@endforeach
	</div>

</main>
