<main class="flex-grow flex items-start w-full px-8">

	<div class="flex flex-col gap-y-2 mt-44 px-8">

        <div class="mb-20">
            <h1 class="text-5xl font-bold mb-4">Articles</h1>
            <p class="text-3xl font-medium max-w-lg">A collection of articles regarding the Christian faith.</p>
        </div>

		@php
			$query = entries('articles');

			if ($tag = Request::segment(1)) {
				// $query->where('tag', 'LIKE', "%{$tag}%");
			}
		@endphp

		@foreach ($query->get() as $article)
		<section>
			<header class="">
				<a href="/{{ Str::slug($article->heading) }}/{{ $article->id }}" aria-heading="Thought {{ $article->id }}. {{ $article->heading }}" class="opacity-50 hover:opacity-100 focus:opacity-100 transition-all duration-200 underline">
				  <dl class="font-bold flex gap-x-2">
					<dt class="text-4xl">{{ $article->id }}.</dt>
					<dd class="text-4xl">{{ $article->heading }}</dd>
				  </dl>
				</a>
			  </header>
		</section>
		@endforeach
	</div>

</main>
