<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soucer - Sua fonte de ideias criativas</title>

        <!-- Styles -->
		@if(App::environment('local'))
			@vite('resources/css/app.css')
		@else 
			<link rel="stylesheet" href="{{ asset('build/assets/app.e65561f0.css') }}">
		@endif
    </head>
    <body>
		
		<!-- ========== HEADER ========== -->
		<header id="toggled-header" class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full text-base py-3 dark:border-gray-700 transition-all duration-200">
			<nav class="relative max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
			<div class="flex items-center justify-between">
				<a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">
					<img src="" alt="Soucer">
				</a>
				<div class="sm:hidden">
				<button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
					<svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
					</svg>
					<svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
					<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
					</svg>
				</button>
				</div>
			</div>
			<div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
				<div id="nav-items" 
					class="flex flex-col 
						gap-y-4 gap-x-0 
						mt-5 sm:flex-row 
						sm:items-center 
						sm:justify-end 
						sm:gap-y-0 
						sm:gap-x-7 
						sm:mt-0 sm:pl-7
						text-gray-400
						dark:text-gray-200">
					
					<a class="font-medium text-blue-600 sm:py-6 dark:text-blue-500" href="#" aria-current="page">Landing</a>
					<a class="font-medium hover:text-gray-400 sm:py-6  dark:hover:text-gray-500" href="#">Serviços</a>
					<a class="font-medium hover:text-gray-400 sm:py-6 dark:hover:text-gray-500" href="#">Produtos</a>
					<a class="font-medium hover:text-gray-400 sm:py-6 dark:hover:text-gray-500" href="#">Contato</a>

					<!-- <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
						<button type="button" class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
							Dropdown
							<svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
							</svg>
						</button>

						<div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
							
							<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
								About
							</a>

							<div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
								<button type="button" class="w-full flex justify-between w-full items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
								Sub Menu
								<svg class="sm:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
								</svg>
								</button>

								<div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute sm:border before:-right-5 before:top-0 before:h-full before:w-5 top-0 right-full !mx-[10px]">
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									About
								</a>
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Downloads
								</a>
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Team Account
								</a>
								</div>
							</div>

							<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
								Downloads
							</a>
							<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
								Team Account
							</a>
						</div>
					</div> -->

					<!-- <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-l sm:border-gray-300 sm:my-6 sm:pl-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500" href="#">
						<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
						<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
						</svg>
						Log in
					</a> -->
				</div>
			</div>
			</nav>
		</header>
		<!-- ========== END HEADER ========== -->

		<!-- ========== MAIN CONTENT ========== -->
		<main id="content" role="main" class="bg-[url('https://soucer.com.br/images/bg-hero.png')] bg-no-repeat bg-cover bg-center text-center py-32 -mt-28">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<!-- Page Heading -->
			<header class="">
				<!-- <p class="mb-2 text-sm font-semibold text-blue-600">Todo: hero banner here</p> -->
				<h1 class="block font-bold text-gray-800 sm:py-20 sm:text-7xl dark:text-white">
					Somos a sua principal fonte de ideias criativas
				</h1>

				<!-- <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">
					This example is a quick exercise to illustrate how fixed to top navbar works using Tailwind CSS. As you scroll, it will remain fixed to the top of your browser's viewport.
				</p> -->

				<div class="mt-5 content-center gap-2 sm:flex-row sm:gap-3 py-10">
				
					<a class="w-full sm:w-auto inline-flex justify-center items-center gap-x-3 text-center bg-indigo-500 hover:bg-blue-700 border border-transparent text-white text-md font-medium rounded-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-4 px-10 dark:focus:ring-offset-gray-800" href="https://github.com/htmlstreamofficial/preline/tree/main/examples" target="_blank">
						<!-- <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
						</svg> -->
						Confira
					</a>
					<!-- <a class="w-full sm:w-auto inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-blue-500 hover:text-blue-700 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm py-3 px-4 dark:ring-offset-slate-900" href="../../examples.html">
						<svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
						<path d="M11.2792 1.64001L5.63273 7.28646C5.43747 7.48172 5.43747 7.79831 5.63273 7.99357L11.2792 13.64" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
						</svg>
						Back to examples
					</a> -->
				</div>
			</header>
			<!-- End Page Heading -->
			</div>
		</main>
		<!-- ========== END MAIN CONTENT ========== -->

		<div class="bg-white py-12">
			<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
				<div class="lg:text-center">
					<h2 class="text-lg font-semibold text-indigo-600">Transactions</h2>
					<p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">A better way to send money</p>
					<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
				</div>

				<div class="mt-10">
					<dl class="space-y-10 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10 md:space-y-0">
						<div class="relative">
							<dt>
							<div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
								<!-- Heroicon name: outline/globe-alt -->
								<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
								</svg>
							</div>
							<p class="ml-16 text-lg font-medium leading-6 text-gray-900">Competitive exchange rates</p>
							</dt>
							<dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
						</div>

						<div class="relative">
							<dt>
							<div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
								<!-- Heroicon name: outline/scale -->
								<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
								</svg>
							</div>
							<p class="ml-16 text-lg font-medium leading-6 text-gray-900">No hidden fees</p>
							</dt>
							<dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
						</div>

						<div class="relative">
							<dt>
							<div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
								<!-- Heroicon name: outline/bolt -->
								<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
								</svg>
							</div>
							<p class="ml-16 text-lg font-medium leading-6 text-gray-900">Transfers are instant</p>
							</dt>
							<dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
						</div>

						<div class="relative">
							<dt>
							<div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
								<!-- Heroicon name: outline/chat-bubble-bottom-center-text -->
								<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
								</svg>
							</div>
							<p class="ml-16 text-lg font-medium leading-6 text-gray-900">Mobile notifications</p>
							</dt>
							<dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
						</div>
					</dl>
				</div>
			</div>
		</div>

		<div class="bg-gray-50">
			<div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
				<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
				<span class="block">Ready to dive in?</span>
				<span class="block text-indigo-600">Start your free trial today.</span>
				</h2>
				<div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
				<div class="inline-flex rounded-md shadow">
					<a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">Get started</a>
				</div>
				<div class="ml-3 inline-flex rounded-md shadow">
					<a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">Learn more</a>
				</div>
				</div>
			</div>
		</div>

		<footer class="sm:flex sm:flex-row px-4 py-8 bg-gray-800">
			<div class="mb-4">
				<h1 class="text-gray-100 font-bold mb-2">
					Sitemap
				</h1>

				<ul class="px-4 text-gray-400">
					<li>
						Home
					</li>
					<li>
						Serviços
					</li>
					<li>
						Soluções
					</li>
				</ul>
			</div>

			<div class="mb-4">

				<h1 class="text-gray-100 font-bold mb-2">
					Localização
				</h1>

				<address class="px-4 text-gray-400">
					<p>Rua Espírito Santo, 1216. Acarape. 64003-750</p>
					<p>Teresina, PI.</p>
					<p>+55 86 99556-5249</p>
				</address>

			</div>
			
			<div>
				<h1 class="text-gray-100 font-bold mb-2">Nos envie uma mensagem</h1>

				<form action="" method="post">

					<div class="mb-4">
						<label for="nome" class="block text-gray-500">Nome e Sobrenome</label>
						<input type="text" name="nome" id="nome" placeholder="Carol Denvers" class="p-2">
					</div>

					<div class="mb-4">
						<label for="celular" class="block text-gray-500">Celular*</label>
						<input type="text" name="celular" id="celular" placeholder="(86) 93939-9898" class="p-2">
						<span class="text-xs text-gray-400 block mt-2">*Não esqueça de colocar o DDD da sua região.</span>
					</div>

					<div class="mb-4">
						<textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
					</div>

					<button class="border px-2 py-4 text-white bg-gray-900">
						Enviar mensagem
					</button>

				</form>
			</div>
		</footer>

		<section class="px-4 py-2 bg-gray-900 text-white text-sm">
			Soucer, todos os direitos reservados.
		</section>

		<!-- JS Implementing Plugins -->
		@if(App::environment('local'))
			@vite('resources/js/app.js')
		@else
			<script type="module" src="{{asset('build/assets/app.ed3c36f4.js')}}"></script>
		@endif

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-B73TDMXKF5"></script>

		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'G-B73TDMXKF5');
		</script>
		
    </body>
</html>
