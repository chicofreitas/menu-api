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
    <body class="loaded">
		
		<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-3 sm:py-0 dark:bg-gray-800 dark:border-gray-700">
			<nav class="relative max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
				<div class="flex items-center justify-between">
					<a class="flex-none text-xl font-semibold text-white" href="#" aria-label="Brand">Brand</a>
					<div class="sm:hidden">
						<button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
							<svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
							</svg>
							<svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
							</svg>
						</button>
					</div>
				</div>

				<div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
					<div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
						<a class="font-medium text-blue-600 sm:py-6 dark:text-blue-500" href="#" aria-current="page">Landing</a>
						<a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-gray-400 dark:hover:text-gray-500" href="#">Account</a>
						<a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-gray-400 dark:hover:text-gray-500" href="#">Work</a>
						<a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-gray-400 dark:hover:text-gray-500" href="#">Blog</a>

						<div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
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
						</div>

						<a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-l sm:border-gray-300 sm:my-6 sm:pl-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500" href="#">
							<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
							</svg>
							Log in
						</a>
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
		
		<div class="bg-gray-100 py-20">
			<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
				<div class="text-center">
					<h2 class="text-lg text-gray-800 mb-4">
						Por que Soucer?
					</h2>
					<p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">
						Soucer é a fonte do seu negócio 
					</p>
					<p class="mt-4 max-w-2xl text-xl text-gray-600 lg:mx-auto">
						Soucer é a fonte por onde saem as mais incríveis soluções em tecnologia para o seu negócio. Trabalhamos com o que 
						há de mais moderno em tecnologias para Internet, mobile e ciência de dados para garantir os melhores resultados para 
						sua empresa.
					</p>
				</div>
			</div>
		</div>
		
		<div class="sm:flex sm:flex-row overflow-auto">

			<div class="sm:basis-1/2 px-4">
				<h1 class="my-5 text-md text-gray-800 uppercase aos-init" data-aos="fade-left" data-aos-delay="300" data-aos-duration="800">
					UI Desing para
				</h1>

				<h1 class="my-5 font-bold text-3xl text-gray-800 uppercase" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
					Websites
				</h1>
				
				<div class="my-5 text-xl text-gray-600" data-aos="fade-right" data-aos-delay="300"  data-aos-duration="800">
					Websites com interfaces responsivas e amigáveis aos mecanismos de busca. Obtenha a melhor experiência em qualquer dispotivo à sua disposição. 
				</div>
				
				<div class="my-10 text-gray-900">
					
					<div class="flex space-x-3" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
						<svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
							<path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
						</svg>
						<span class="text-gray-800 dark:text-gray-400">
							<p class="text-semibold">
								Layouts responsivos
							</p>
							Seu público navega no celular, tablet ou notebook? Nossos designs responsivos garantem
							que o usuário final tenha a melhor experiência independente do dispositivo em suas mãos.
						</span>
					</div>

				</div>

				<div class="my-4 text-underline" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
					<a href="#">Veja nossos templates </a>
					<!-- <button class="font-semibold text-white border rounded-md bg-violet-800 py-2 px-4">
						Nossos templates
					</button> -->
				</div>
			</div>

			<div class="sm:basis-1/2" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" >
				<img src="https://soucer.com.br/images/pexels-drew-williams-3098620.jpg" alt="Foto de Drew Williams">
			</div>
		</div>

		<div class="bg-gray-100">
			<div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
				
				<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
					<span class="block">Em breve</span>
					<span class="block text-indigo-600">Estamos trabalhando nas próximas seções</span>
				</h2>

				<div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
					
				</div>
			</div>
		</div>

		<footer class="py-10 px-4 content-center bg-slate-900">

			<div class="container mx-auto sm:flex sm:flex-row py-20 border-b border-white">

				<div class="mb-10 sm:mx-14">
					<h1 class="text-gray-100 font-bold mb-4">
						SITEMAP
					</h1>

					<div class="text-gray-200">
						<div class="mb-4">
							Home
						</div>
						<div class="mb-4">
							Serviços
						</div>
						<div class="mb-4">
							Produtos
						</div>
						</div>
				</div>
			
				<div class="mb-10 sm:mx-14">
					<h1 class="text-gray-100 font-bold mb-4">
						SERVIÇOS
					</h1>

					<div class="text-gray-200">
						<div class="mb-4">
							Ciação de Websites
						</div>
						<div class="mb-4">
							Desenvolvimento de Sistemas
						</div>
						<div class="mb-4">
							Análise de Dados
						</div>
						<div class="mb-4">
							Cursos e Palestras
						</div>
						</div>
				</div>

				<div class="mb-10 sm:mx-14">
					<h1 class="text-gray-100 font-bold mb-4">
						PRODUTOS
					</h1>

					<div class="text-gray-200">
						<div class="mb-4">
							Api Delivery
						</div>
						<div class="mb-4">
							Ecommece
						</div>
						<div class="mb-4">
							App Ecommerce
						</div>
						<div class="mb-4">
							Templates
						</div>
					</div>
				</div>

				<div class="mb-10 sm:mx-14">

					<h1 class="text-gray-100 font-bold mb-4">
						FAÇA UMA VISITA
					</h1>

					<address class="text-gray-200">
						<p>Rua Espírito Santo, 1216. Acarape. 64003-750</p>
						<p>Teresina, PI.</p>
						<p>+55 86 99556-5249</p>
					</address>

				</div>
				
				<div class="sm:mx-14">
					<h1 class="text-gray-100 text-2xl font-bold mb-6">TRABALHE COM A GENTE!</h1>
					
					<p class="inline-block border-b border-gray-400 py-2 text-2xl text-white">
						atendimento@soucer.com.br
					</p>
				</div>
			</div>

		</footer>

		<section class="py-5 bg-gray-900 text-white text-sm">
			Soucer, todos os direitos reservados.
		</section>

		<style type="text/css" data-typed-js-css="true">
			.typed-cursor{
				opacity: 1;
			}
			.typed-cursor.typed-cursor--blink{
				animation: typedjsBlink 0.7s infinite;
				-webkit-animation: typedjsBlink 0.7s infinite;
				animation: typedjsBlink 0.7s infinite;
			}
			@keyframes typedjsBlink{
				50% { opacity: 0.0; }
			}
			@-webkit-keyframes typedjsBlink{
				0% { opacity: 1; }
				50% { opacity: 0.0; }
				100% { opacity: 1; }
			}
		</style>
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
    </body>
</html>
