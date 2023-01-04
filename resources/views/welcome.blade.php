<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

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
	
		<!-- <header data-aos="bg-slide-up" data-aos-anchor=".aos-nav" class="fixed top-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full text-sm py-3 sm:py-0 dark:bg-gray-800 dark:border-gray-700">
			<nav class="relative max-w-7xl flex flex-wrap basis-full items-center w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
				<div class="flex items-center justify-between">
					<a class="flex-none text-xl font-semibold" href="#" aria-label="Brand">Soucer</a>
				</div>

				<div class="flex items-center ml-auto sm:ml-0 sm:order-3">
					<div class="sm:hidden">
						<button type="button" class="p-2 inline-flex justify-center items-center gap-2 font-medium text-white text-sm shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-xs dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-overlay="#navbar-offcanvas-example" aria-controls="navbar-offcanvas-example" aria-label="Toggle navigation">
							
							<svg class="hs-overlay-open:hidden w-8 h-8" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
							</svg>
							<svg class="hs-overlay-open:block hidden w-4 h-8" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
							</svg>
						</button>
					</div>
				</div>

				<div id="navbar-offcanvas-example" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white sm:bg-transparent border-r basis-full grow sm:order-2 sm:static sm:block sm:h-auto sm:max-w-none sm:w-auto sm:border-r-transparent sm:transition-none sm:translate-x-0 sm:z-40 sm:basis-auto dark:bg-gray-800 dark:border-r-gray-700 sm:dark:border-r-transparent hidden" tabindex="-1" data-hs-overlay-close-on-resize>
					<div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
						<div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
							<button type="button" class="flex items-center w-full hover:text-gray-400 font-medium px-6 sm:px-0 dark:text-gray-400 dark:hover:text-gray-500">
								Serviços
								<svg class="ml-2 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
								</svg>
							</button>

							<div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg py-2 px-3 sm:px-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
								
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 disable">
									BUSINESS INTELLIGENCE
								</a>

								<p class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 disable">
									CIÊNCIA DE DADOS
								</p>

								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Consultoria em Ciência de Dados
								</a>

								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Pesquisa com Ciência de Dados
								</a>

								<p class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 disable">
									CLOUD
								</p>
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Armazenamento de Dados na Nuvem
								</a>
							</div>
						</div>
						
						<a class="font-medium hover:text-gray-400 px-6 sm:py-6 sm:px-0 dark:text-gray-400 dark:hover:text-gray-500" href="#">Portfólio</a>

						<a class="font-medium hover:text-gray-400 px-6 sm:py-6 sm:px-0 dark:text-gray-400 dark:hover:text-gray-500" href="#">Blog</a>

						<div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
							<button type="button" class="flex items-center w-full hover:text-gray-400 font-medium px-6 sm:px-0 dark:text-gray-400 dark:hover:text-gray-500">
								A Empresa
								<svg class="ml-2 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
								</svg>
							</button>

							<div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg py-2 px-3 sm:px-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									SOBRE A SOUCER
								</a>

								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									CONTATO
								</a>

								<div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
									<button type="button" class="w-full flex justify-between w-full items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
										MAIS INFORMAÇÕES
										<svg class="sm:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</button>

									<div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute sm:border before:-right-5 before:top-0 before:h-full before:w-5 top-0 right-full !mx-[10px]">
										<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
											ML
										</a>
										<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
											REINFORCEMENT LEARNING
										</a>
										<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
											TRAINING PEOPLE
										</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</nav>
		</header> -->

		<header data-aos="bg-slide-up" data-aos-anchor=".aos-nav" class="fixed top-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white drop-shadow-lg text-sm py-3 sm:py-0">
			<nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
				<div class="flex items-center justify-between">
					<a class="flex-none text-xl font-semibold" href="#" aria-label="Brand">Soucer</a>
					<div class="sm:hidden">
						<button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2  border border-white font-medium shadow-sm align-middle hover:bg-white/[.1] hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
							<svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
							</svg>
							<svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="black" viewBox="0 0 16 16">
								<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
							</svg>
						</button>
					</div>
				</div>
				<div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
					<div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
						<!-- <a class="font-medium text-white sm:py-6" href="#" aria-current="page">Serviços</a> -->
						<div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
							<button type="button" class="flex items-center w-full hover:text-white font-medium">
								Serviços
								<svg class="ml-2 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
								</svg>
							</button>

							<div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									BUSINESS INTELLIGENCE
								</a>
								
								<!-- <div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
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
								</div> -->

								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									DATA SCIENCE
								</a>
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									SOLUÇÕES EM TI
								</a>
							</div>
						</div>
						<div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
							<button type="button" class="flex items-center w-full hover:text-white font-medium">
								Produtos
								<svg class="ml-2 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
								</svg>
							</button>

							<div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									AIR BOX
								</a>
							</div>
						</div>
						<!-- <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Account</a>
						<a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Work</a> -->
						<a class="font-medium hover:text-white sm:py-6" href="#">Blog</a>

						<div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
							<button type="button" class="flex items-center w-full hover:text-white font-medium">
								Sobre
								<svg class="ml-2 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
								</svg>
							</button>

							<div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Contato
								</a>
								<!-- <div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
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
 -->
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Treinamentos
								</a>
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Consultoria
								</a>
								<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
									Fale conosco
								</a>
							</div>
						</div>

						<!-- <a class="flex items-center gap-x-2 font-medium text-white/[.8] hover:text-white sm:border-l sm:border-white/[.3] sm:my-6 sm:pl-6" href="#">
							<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
							</svg>
							Log in
						</a> -->

					</div>
				</div>
			</nav>
		</header>

		<!-- ========== MAIN CONTENT ========== -->
		<main id="content" role="main" class="relative h-screen bg-[url('https://soucer.com.br/images/bg-hero.png')] static bg-no-repeat bg-cover bg-center py-20 sm:py-32 text-5xl text-white">
			
			<div class="ml-4 mt-72 uppercase text-blue-200">
				Business Intelligence
			</div>

			<div class="ml-4 text-md">
				aplicada de forma
			</div>

			<div class="ml-4 uppercase">
				inteligente
			</div>

			<div class="absolute bottom-10 text-center w-full">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block w-12 h-12 text-gray-600 rounded-full bg-white drop-shadow-md animate-bounce ">
					<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
				</svg>
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
		
		<div class="container mx-auto px-2 sm:px-44 md:px-10 py-20 lg:flex md:flex-row md:gap-20 text-center text-gray-600 aos-nav">
			
			<div class="group my-10 sm:basis-1/3" data-aos="slide-up" data-aos-delay="100" data-aos-duration="800">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-14 h-14 text-violet-700 transition duration-300 group-hover:text-violet-500 group-hover:scale-125">
					<path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
				</svg>

				<h1 class="font-semibold text-xl my-5 transition duration-300 group-hover:text-violet-600">Business Intellicence</h1>
				
				<p class="my-4 transition duration-300 group-hover:text-gray-800">
					Acumular grandes quantidades de dados parace ser algo natural atualmente. Mas saber o que fazer com estes dados e extrair proveito deles é uma tarefa que requer um expertise
					em análise de dados e fazer surgir informações preciosas e rentáveis para o seu negócio.
				</p>

				<a href="#" class="font-bold text-gray-600 underline transition duration-300 group-hover:text-violet-900">
					Saiba mais 
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-flex w-4 h-4">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
					</svg>

				</a>
			</div>

			<div class="group my-10 sm:basis-1/3" data-aos="slide-up" data-aos-delay="250" data-aos-duration="800">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-14 h-14 text-violet-700 transition duration-300 group-hover:text-violet-500 group-hover:scale-125">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
				</svg>

				<h1 class="font-semibold text-xl my-5 transition duration-300">Soluções</h1>
				
				<p class="my-4  transition duration-300 group-hover:text-gray-800">
					Sua empresa pode aumentar a produtividade utilizando soluções em tecnologia para gerenciamento, armazenagem e que compartilhamento de dados.
				</p>

				<a href="#" class="font-bold text-gray-600 underline transition duration-300 group-hover:text-violet-900">
					Saiba mais 
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-flex w-4 h-4">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
					</svg>

				</a>
			</div>

			<div class="group my-10 basis-1/3" data-aos="slide-up" data-aos-delay="400" data-aos-duration="800">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-14 h-14 text-violet-700 transition duration-300 group-hover:text-violet-500 group-hover:scale-125">
					<path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
				</svg>

				<h1 class="font-semibold text-xl my-5">Cloud Service</h1>
				
				<p class="my-4  transition duration-300 group-hover:text-gray-800">
					Armazenagem e compartilhamento de dados na nuvem utilizando servidores em diversas regições do mundo. 
				</p>

				<a href="#" class="font-bold text-gray-600 underline transition duration-300 group-hover:text-violet-900">
					Saiba mais 
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-flex w-4 h-4">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
					</svg>

				</a>
			</div>
		</div>

		<div class="bg-gray-800">
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
							Business Intellicence
						</div>
						<div class="mb-4">
							Ciência de Dados
						</div>
						<div class="mb-4">
							Nuvem
						</div>
					</div>
				</div>

				<div class="mb-10 sm:mx-14">
					<h1 class="text-gray-100 font-bold mb-4">
						PRODUTOS
					</h1>

					<div class="text-gray-200">
						<div class="mb-4">
							Air Box
						</div>
					</div>
				</div>

				<div class="mb-10 sm:mx-14">

					<h1 class="text-gray-100 font-bold mb-4">
						NOS FAÇA UMA VISITA
					</h1>

					<address class="text-gray-200">
						<p>Rua Espírito Santo, 1216. Acarape. 64003-750</p>
						<p>Teresina, PI.</p>
						<p>+55 86 99556-5249</p>
					</address>

				</div>
				
				<div class="sm:mx-14">
					<h1 class="text-gray-100 text-2xl font-bold mb-6">QUER TRABALHAR COM A GENTE!</h1>
					
					<p class="inline-block border-b border-gray-400 py-2 text-2xl text-white">
						contato@soucer.com.br
					</p>
				</div>
			</div>

		</footer>

		<section class="py-5 px-44 bg-gray-900 text-white text-sm">
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
