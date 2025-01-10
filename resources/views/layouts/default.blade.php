<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ implode(' | ', array_filter([
		$metaTitle ?? null,
		config('app.name')
		])) }}</title>

	{{-- <link rel="icon" type="image/png" href="favicon.png" /> --}}

	@vite(['resources/js/app.js'])

</head>

<body class="bg-black antialiased flex flex-col items-center h-screen text-white">

	<header class="w-full fixed top-0 left-0">
		<nav class="flex justify-between items-center w-full p-8">
			<div class="font-bold flex gap-x-12">
				<a href="/" class="text-xl hover:opacity-60 transition duration-200" class="text-xl hover:opacity-60 transition duration-200">Faith</a>
				<a href="https://fundamental.company" class="text-xl hover:opacity-60 transition duration-200">Company</a>
	
				{{-- Tease, collect email, and point to streams.dev --}}
				<a href="https://fundamental.dev" class="text-xl hover:opacity-60 transition duration-200">Code</a>
	
				{{-- Gifts and giving --}}
				{{-- <a href="https://fundamental.gratis" class="text-xl hover:opacity-60 transition duration-200">Gifts</a> --}}
			</div>
			<div>
				<a href="/" class="opacity-100 hover:opacity-50 focus:opacity-50 transition-all duration-200">
					<span class="sr-only">Fundamental Faith</span>
					<div>
						<img src="/img/icon.svg" alt="Vision Logo" class="w-16" />
					</div>
				</a>
			</div>
		</nav>
	</header>

	{!! $slot !!}

	<footer class="w-full fixed bottom-0 left-0">
		<nav class="flex items-end justify-between w-full p-8">
			<div class="font-bold flex gap-x-6">
				<a href="/thoughts" class="text-xl" class="text-xl">Thoughts</a>
				<a href="/materials" class="text-xl" class="text-xl">Materials</a>
			</div>
			<div x-data="{show: false}" x-on:mouseover="show=true" x-on:mouseleave="show=false">
				<a href="/{{ $next ?? '00' }}" class="bg-white h-20 min-w-20 rounded-full flex justify-center items-center transition-all duration-200">
					<span x-bind:class="show ? 'w-40 opacity-100' : 'w-0 opacity-0'" x-transition class="text-4xl font-black overflow-hidden transition-all text-center text-black">Next</span>
				</a>
			</div>
		</nav>
	</footer>

</body>

</html>
