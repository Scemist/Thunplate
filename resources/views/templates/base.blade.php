<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">

	<title>Scemist</title>

	@vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800 justify-center flex">

	<body class="flex flex-nowrap justify-center">
		<main class="flex-1 p-3 relative min-h-screen" style="max-width: 1200px">
			@include('components.nav')

			<hr class="bg-none border-t-2 border-gray-700">

			<div class="mb-20">
				@yield('main')
			</div>

			{{-- <div class="hidden bg-red-800 bg-blue-800"></div>
			<div class="absolute bottom-12 right-8 py-4 px-8 shadow rounded {{ category | category_color }}">
			</div> --}}

			@include('components.footer')
		</main>

		@vite('resources/js/app.js')
	</body>

</html>
