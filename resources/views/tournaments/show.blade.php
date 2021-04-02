@extends('app')
@section('content')
<section class="relative flex items-center min-h-450px lg:min-h-600px xl:min-h-800px">
    <div class="relative z-10 max-w-screen-md px-4 mx-auto sm:px-6 text-center">
        <h1 class="text-lg text-white md:text-2xl lg:text-3xl font-display text-shadow">{{$tournament['title']}}</h1>
        <h2 class="text-lg text-white md:text-1xl lg:text-1xl font-display text-shadow">du fun, du frais, du frisbee</h2>
    </div>
    <div class="scanlines"></div>
    <div x-data="parallaxBackground()" x-ref="bg" @scroll.window="handleScroll" class="absolute top-0 left-0 w-full h-full bg-no-repeat bg-cover -z-1" style="background-image: url('https://t3.ftcdn.net/jpg/03/81/01/88/240_F_381018889_71KL86GV7Sd5ueAuxrRUWCCxwNlbzzZw.jpg');background-position-x: center;"></div>
</section>
<section class="px-4 pb-16 bg-white lg:px-8 lg:pb-24 md:pb-20 pt-16 sm:px-6 relative">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" class="absolute left-0 z-10 -mt-4 bottom-full">
        <path fill="#ffffff" fill-opacity="1" d="M0,128L60,117.3C120,107,240,85,360,101.3C480,117,600,171,720,176C840,181,960,139,1080,112C1200,85,1320,75,1380,69.3L1440,64L1440,200L1380,200C1200,200,1200,200,1080,200C960,200,840,200,720,200C600,200,480,200,360,200C240,200,120,200,60,200L0,200Z"></path>
    </svg>
    <div class="mx-auto lg:max-w-4xl text-gray-500 md:text-lg">
        <h3 class="font-bold mb-4 text-2xl md:text-3xl text-gray-900">À propos de ce tournoi</h3>
        <p>{{$tournament['localization']['description']}}</p>
        <p class="mt-3">Début du tournoi : {{$tournament['started_at']}}</p>
        <div class="mt-3">
            Règles :
            <ul class="mt-0">
                @foreach($tournament['localization']['rules'] as $rule) <li>{{$rule}}</li> @endforeach
            </ul>
        </div>
        @if (!$tournament['is_over'])
        <p class="mt-3">Si tu ne sais pas encore comment nous rejoindre le jour du tournoi, jette un coup d'œil à <a href="{{route('rules')}}" class="underline text-indigo-500">la procédure</a>.</p>
        <div class="mt-8 text-center">
            <a href="{{$tournament['challonge_url']}}" rel="noreferrer nofollow noopener" target="_blank" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-blue-700 bg-blue-100 border border-transparent rounded-md shadow-sm hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Participer au tournoi
            </a>
        </div>
        @else
        <div class="rounded-md bg-indigo-50 p-4 mt-8">
            <div class="flex-1 md:flex md:justify-between">
                <p class="text-sm text-indigo-700">
                    Le tournoi est à présent terminé. N'hésitez pas à participer au prochain !
                </p>
            </div>
        </div>

        <h3 class="font-bold mb-4 text-2xl md:text-3xl text-gray-900 mt-20">Résultats</h3>
        <div class="aspect-w-16 aspect-h-9 mt-3">
            <iframe src="https://www.youtube.com/embed/WHGEc6lMVOA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="grid grid-cols-3 gap-4 mt-6">
            @foreach($tournament['winners'] as $key => $winner)
            <x-winner-card :winner="$winner" :index="$key" />
            @endforeach
        </div>
        @endif
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
@endsection