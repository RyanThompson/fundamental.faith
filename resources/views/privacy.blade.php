@php
    $previous = URL::previous('/thoughts');
    $previous = $previous === Request::url() ? URL::to('/thoughts') : $previous;
@endphp

<main class="flex-grow flex items-start w-full px-8">

	<style>
		article.prose * {
			color: white;
		}

		article.prose p {
			opacity: 80%;
			font-weight: 500;
			font-size: 1.25rem;
			line-height: 1.75rem;
			margin-bottom: 1rem;
			margin-top: 0;
		}

		article.prose h2 {
			font-size: 2rem !important;
			font-weight: 800;
			margin-bottom: 1rem;
		}
	</style>

	<div class="flex flex-col w-full gap-y-2 mt-36 px-8">

		<header class="mb-20">
			<div class="mb-8">
				<a href="{{ $previous }}" class="underline opacity-50 hover:opacity-100 focus:opacity-100 transition-all duration-200">← Back</a>
			</div>
			<h1 class="text-5xl font-bold mb-4">Privacy</h1>
			<p class="text-3xl font-medium max-w-lg">Seriously Private</p>
		</header>

		<div class="flex justify-between max-w-5xl">
			<article class="prose">
@markdown
## Introduction
@endmarkdown
			</article>
			<nav class="flex flex-col gap-y-2">
				<a href="#introduction" class="text-2xl font-bold opacity-50 hover:opacity-100 focus:opacity-100 transition-all duration-200">Introduction</a>
			</nav>
		</div>
	</div>

</main>
