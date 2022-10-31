<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soucer - Sua fonte de ideias criativas</title>

        <!-- Styles -->
		@env('local')
			@vite('resources/css/app.css')
		@endenv

		@env('production')
			<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		@endenv

    </head>
    <body>
		
		<!-- ========== HEADER ========== -->
		<header id="toggled-header" class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full text-base py-2 transition-all duration-100">
			<nav class="relative max-w-7xl w-full mx-auto px-0 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
				<div class="flex items-center justify-between px-6">
					<a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">
						<img src="{{asset('images/logoipsum-284.svg')}}" alt="Soucer">
					</a>
					<div class="sm:hidden">
						<button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 font-medium shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-xl dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
							<svg id="nav-button" class="hs-collapse-open:hidden w-10 h-10 text-white" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
							</svg>
							<svg class="hs-collapse-open:block hidden w-10 h-10 text-gray-500" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
								<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
							</svg>
						</button>
					</div>
				</div>
				<div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 w-full grow bg-white sm:bg-transparent sm:block">
					<div id="nav-items" 
						class="flex flex-col 
							gap-y-4 gap-x-0 
							mt-5 sm:flex-row 
							sm:items-center 
							sm:justify-end 
							sm:gap-y-0 
							sm:gap-x-7 
							sm:mt-0 sm:pl-7 
							sm:p-0 
							text-gray-400 
							bg-white 
							p-6 sm:bg-transparent
							dark:text-gray-200">

						<a class="font-medium hover:text-gray-400 sm:py-6  dark:hover:text-gray-500" href="#">Serviços</a>
						<a class="font-medium hover:text-gray-400 sm:py-6 dark:hover:text-gray-500" href="#">Produtos</a>
						<a class="font-medium hover:text-gray-400 sm:py-6 dark:hover:text-gray-500" href="#">Contato</a>

						
					</div>
				</div>
			</nav>
		</header>
		<!-- ========== END HEADER ========== -->

		<!-- ========== MAIN CONTENT ========== -->
		<main id="content" role="main" class="bg-[url('https://soucer.com.br/images/bg-hero.png')] bg-no-repeat bg-cover bg-center content-center text-center py-20 sm:py-32 -mt-32">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<!-- Page Heading -->
			<header class="py-10 px-8">
				<!-- <p class="mb-2 text-sm font-semibold text-blue-600">Todo: hero banner here</p> -->
				<h1 class="block font-bold text-white mt-20 text-3xl sm:text-7xl text-white">
					Somos a sua principal fonte de ideias criativas
				</h1>

				<!-- <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">
					This example is a quick exercise to illustrate how fixed to top navbar works using Tailwind CSS. As you scroll, it will remain fixed to the top of your browser's viewport.
				</p> -->

				<div class="mt-5 content-center gap-2 sm:flex-row sm:gap-3 sm:py-10">
				
					<a class="sm:w-auto inline-flex justify-center items-center gap-x-3 text-center bg-violet-800 hover:bg-blue-700 border border-transparent text-white text-md font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-2 px-10 dark:focus:ring-offset-gray-800" href="https://github.com/htmlstreamofficial/preline/tree/main/examples" target="_blank">
						Confira
					</a>
					
				</div>
			</header>
			<!-- End Page Heading -->
			</div>
		</main>
		<!-- ========== END MAIN CONTENT ========== -->
		
		

		<div class="bg-white py-16">
			<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
				<div class="text-center">
					<h2 class="text-lg text-gray-800">
						A Soucer
					</h2>
					<p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">
						A better way to send money
					</p>
					<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
						Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
					</p>
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
		
		<div class="sm:flex sm:flex-row">

			<div class="sm:basis-1/2 px-12 py-16">
				<h1 class="my-5 text-md text-gray-800 uppercase aos-init aos-animate" data-aos="fade-left" data-aos-delay="150" data-aos-duration="800">
					UI Desing para Websites
				</h1>

				<h1 class="my-5 font-bold text-3xl text-gray-800 uppercase aos-init aos-animate" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
					Websites
				</h1>
				
				<div class="my-5 text-xl text-gray-600 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200"  data-aos-duration="800">
					Websites com interfaces responsivas e amigáveis aos mecanismos de busca. Obtenha a melhor experiência em qualquer dispotivo à sua disposição. 
				</div>
				
				<div class="my-10">
					<ul class="my-5 text-xl text-gray-800">
						<li class="my-5">
							<p class="font-semibold aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
								Layouts responsivos
							</p>

							<p class="aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
								Seu público navega no celular, tablet ou notebook? Nossos designs responsivos garantem
								que o usuário final tenha a melhor experiência independente do dispositivo em suas mãos.
							</p>
						</li>

						<li class="my-5">
							<p class="font-semibold aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
								Velocidade de carregamento
							</p>

							<p class="aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
								Nossos sites são construídos de forma que o seu carregamento seja rápido o suficiente para entregar 
								seu conteúdo em poucos instantes.
							</p>
						</li>

						<li class="my-5">
							<p class="font-semibold aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
								SEO Otimizado
							</p>
							
							<p class="aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
								Que tal aparecer nos primeiros resultados nas buscas pela Internet?
							</p>
						</li>
					</ul>
				</div>

				<div>
					<button class="font-semibold text-white border rounded-md bg-violet-800 py-2 px-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
						Nossos templates
					</button>
				</div>
			</div>

			<div class="sm:basis-1/2">
				<img class="aos-init aos-animate" data-aos="fade-left" data-aos-delay="250" data-aos-duration="1000" src="https://soucer.com.br/images/pexels-drew-williams-3098620.jpg" alt="Foto de Drew Williams">
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

		<footer class="py-12 content-center bg-slate-900">

			<div class="container mx-auto sm:flex sm:flex-row py-20 border-b border-white">
			<div class="mb-4 sm:mx-14">
				<h1 class="text-gray-100 font-bold mb-8">
					SITEMAP
				</h1>

				<ul class="text-gray-200">
					<li class="mb-4">
						Home
					</li>
					<li class="mb-4">
						Serviços
					</li>
					<li class="mb-4">
						Produtos
					</li>
				</ul>
			</div>
			
				<div class="mb-4 sm:mx-14">
					<h1 class="text-gray-100 font-bold mb-8">
						SERVIÇOS
					</h1>

					<ul class="text-gray-200">
						<li class="mb-4">
							Ciação de Websites
						</li>
						<li class="mb-4">
							Desenvolvimento de Sistemas
						</li>
						<li class="mb-4">
							Análise de Dados
						</li>
						<li class="mb-4">
							Cursos e Palestras
						</li>
					</ul>
				</div>

				<div class="mb-4 sm:mx-14">
					<h1 class="text-gray-100 font-bold mb-8">
						PRODUTOS
					</h1>

					<ul class="text-gray-200">
						<li class="mb-4">
							Api Delivery
						</li>
						<li class="mb-4">
							Ecommece
						</li>
						<li class="mb-4">
							App Ecommerce
						</li>
						<li class="mb-4">
							Templates
						</li>
					</ul>
				</div>

				<div class="mb-4 sm:mx-14">

					<h1 class="text-gray-100 font-bold mb-8">
						FAÇA UMA VISITA
					</h1>

					<address class="text-gray-200">
						<p>Rua Espírito Santo, 1216. Acarape. 64003-750</p>
						<p>Teresina, PI.</p>
						<p>+55 86 99556-5249</p>
					</address>

				</div>
				
				<div class="mb-4 sm:mx-14">
					<h1 class="text-gray-100 text-2xl font-bold mb-6">TRABALHE COM A GENTE!</h1>
					<span class="block border-b border-white py-2 text-2xl text-white">
						atendimento@soucer.com.br
					</span>
				</div>
			</div>
			

		</footer>

		<section class="px-32 py-10 bg-gray-900 text-white text-sm text-right">
			Soucer, todos os direitos reservados.
		</section>

		<!-- JS Implementing Plugins -->
		@env('local')
			@vite('resources/js/app.js')
		@endenv
		
		@env('production')
			<script type="module" src="{{asset('js/app.js')}}"></script>
		@endenv

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-B73TDMXKF5"></script>

		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'G-B73TDMXKF5');
		</script>
		
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
    </body>
</html>
