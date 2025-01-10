<main class="flex-grow flex items-start w-full px-8">

	<div class="flex flex-col gap-y-2 mt-44">
		@foreach (entries('scripture')->get() as $scripture)
		<section>
			<header class="">
				<a href="/{{ $scripture->id }}" aria-heading="Faith {{ $scripture->id }}. {{ $scripture->label }}" class="opacity-50 hover:opacity-100 focus:opacity-100 transition-all duration-200">
				  <dl class="font-bold flex gap-x-2">
					<dt class="text-4xl">{{ $scripture->id }}.</dt>
					<dd class="text-4xl">{{ $scripture->label }}</dd>
				  </dl>
				</a>
			  </header>
		</section>
		@endforeach
	</div>

</main>
