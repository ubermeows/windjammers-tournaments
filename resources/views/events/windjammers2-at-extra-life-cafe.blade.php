<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('metas')
    <title>Windjammers France</title>
    <meta property='og:title' content="windjammers 2 at Extra Life Cafe">
    <meta property='og:description' content="L'Extra Life Cafe organise le premier tournoi de Windjammers 2 pour fêter sa release !">
    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GVY5J3SKJQ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-GVY5J3SKJQ');
    </script>
</head>
<body class="antialiased">
    @include('parts.navbar', ['isHome' => true])
    <main class="min-h-screen font-body">
    <section class="relative flex items-center min-h-450px lg:min-h-600px xl:min-h-800px">
        <div class="relative z-10 max-w-screen-md px-4 mx-auto text-center sm:px-6">
            <h1 class="text-lg text-white md:text-2xl lg:text-3xl font-display text-shadow">windjammers 2 at extra life cafe</h1>
            <h2 class="text-lg text-white md:text-1xl lg:text-1xl font-display text-shadow"></h2>
        </div>
        <div class="scanlines"></div>
        <div x-data="parallaxBackground()" x-ref="bg" @scroll.window="handleScroll" class="absolute top-0 left-0 w-full h-full bg-no-repeat bg-cover -z-1" style="background-image: url('https://tournaments.windjammers.fr/storage/banners/extralife.jpg');background-position-x: center;"></div>
    </section>
    <section class="relative px-4 pt-16 pb-16 bg-white lg:px-8 lg:pb-24 md:pb-20 sm:px-6">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" class="absolute left-0 z-10 -mt-4 bottom-full">
            <path fill="#ffffff" fill-opacity="1" d="M0,128L60,117.3C120,107,240,85,360,101.3C480,117,600,171,720,176C840,181,960,139,1080,112C1200,85,1320,75,1380,69.3L1440,64L1440,200L1380,200C1200,200,1200,200,1080,200C960,200,840,200,720,200C600,200,480,200,360,200C240,200,120,200,60,200L0,200Z"></path>
        </svg>
        <div class="mx-auto text-gray-700 lg:max-w-4xl md:text-lg">
            <h3 class="mb-4 text-2xl font-bold text-gray-900 md:text-3xl">À propos de l'événement</h3>
            <div class="prose md:prose-lg max-w-none">
                <div class="aspect-w-16 aspect-h-9">
                  <iframe src="https://www.youtube.com/embed/or1-y1LQJCo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>L'<a href='https://www.facebook.com/extralifecafe/'>Extra Life Café</a> organise ce samedi 22 janvier un tournoi physique pour fêter la sorti du jeu <a href='https://www.dotemu.com/game/windjammers-2/'>Windjammers 2</a> !</p>
                <p>Une cotisation de 10 euros sera demandé pour participer au tournoi, il sera également l'occasion de rencontrer les membres de la <a href='https://twitter.com/windjammersfr'>communeauté Windjammers FR</a> ainsi que de tester le jeu librement !</p>
                <p>Des clés CD et des versions physiques du jeu offertes par Dotemu seront à gagner !</p>
                <p>Le tournoi sera redifusé sur la chaine twitch de l'ExtraLifeCafe.</p>
            </div>
            <p class="pt-6 mt-6 border-t-2 border-gray-100">
                <span class="font-bold">Adresse</span> : 9 Pass. des Patriarches, 75005 Paris
            </p>
            <p>
                <span class="font-bold">{{__('tournament.start')}}</span> : 2022-01-22 à 19h
            </p>
            <p>
                <span class="font-bold">{{__('tournament.streaming')}}</span> : <a href='https://www.twitch.tv/extralifecafe'>twitch.tv/extralifecafe</a>
            </p>
            <div class="mt-3">
                <span class="font-bold">{{__('tournament.rules')}}</span> :
                <ul class="mt-0">
                    <li>FT2/BO3</li> 
                    <li>Double élimination</li> 
                </ul>
            </div>
            <p class="mt-3">Pour participer, il suffit de venir t'inscrire sur Facebook !</p>
            <div class="mt-8 text-center">
                <a href="#" rel="noreferrer nofollow noopener" target="_blank" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-blue-700 bg-blue-100 border border-transparent rounded-md shadow-sm hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    {{__('tournament.participate')}}
                </a>
            </div>
        </div>
    </section>
    <script>
        function parallaxBackground() {
            return {
                coords: '0px',
                speed: 3,
                handleScroll() {
                    let yPos = window.scrollY / this.speed;
                    this.coords = yPos + "px";
                    this.$refs.bg.style.transform = `translate3d(0px, ${this.coords}, 0px)`;
                }
            }
        }
    </script>
    </main>
    @include('parts.footer')
</body>
</html>