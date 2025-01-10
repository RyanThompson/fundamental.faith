<main class="flex-grow flex items-start w-full px-8">

	<div class="flex flex-col gap-y-2 mt-44">
		@foreach (entries('map')->get() as $point)
		<section>
			<header class="">
				<a href="/{{ $point->id }}" aria-heading="Faith {{ $point->id }}. {{ $point->heading }}" class="opacity-50 hover:opacity-100 focus:opacity-100 transition-all duration-200">
				  <dl class="font-bold flex gap-x-2">
					<dt class="text-4xl">{{ $point->id }}.</dt>
					<dd class="text-4xl">{{ $point->heading }}</dd>
				  </dl>
				</a>
			  </header>
		</section>
		@endforeach
	</div>

</main>
