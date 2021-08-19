@extends('app')

@push('metas')
<title>{{$tournament['title']}} | Windjammers France</title>
<meta property='og:title' content="{{$tournament['title']}}">
<meta property='og:description' content="{{$tournament['localization']['description']}}">
@endpush

@section('title', $tournament['title'])

@section('content')
<x-banner :tournament="$tournament"  />
<section class="relative px-4 pt-16 pb-16 bg-white lg:px-8 lg:pb-24 md:pb-20 sm:px-6">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" class="absolute left-0 z-10 -mt-4 bottom-full">
        <path fill="#ffffff" fill-opacity="1" d="M0,128L60,117.3C120,107,240,85,360,101.3C480,117,600,171,720,176C840,181,960,139,1080,112C1200,85,1320,75,1380,69.3L1440,64L1440,200L1380,200C1200,200,1200,200,1080,200C960,200,840,200,720,200C600,200,480,200,360,200C240,200,120,200,60,200L0,200Z"></path>
    </svg>
    <div class="mx-auto text-gray-700 lg:max-w-4xl md:text-lg">
        <h3 class="mb-4 text-2xl font-bold text-gray-900 md:text-3xl">{{__('tournament.about')}}</h3>
        <div class="prose md:prose-lg max-w-none">
            {!!$tournament['localization']['description']!!}
        </div>
        <p class="pt-6 mt-6 border-t-2 border-gray-100">
            <span class="font-bold">{{__('tournament.start')}}</span> : {{$tournament['started_at']}}
        </p>
        <p>
            <span class="font-bold">{{__('tournament.streaming')}}</span> : <a href='https://www.twitch.tv/lamegaforgelive'>twitch.tv/lamegaforgelive</a>
        </p>
        <div class="mt-3">
            <span class="font-bold">{{__('tournament.rules')}}</span> :
            <ul class="mt-0">
                @foreach($tournament['localization']['rules'] as $rule) 
                <li>{!!$rule!!}</li> 
                @endforeach
            </ul>
        </div>
        @if (! $tournament['is_over'])
        <p class="mt-3">{!!__('tournament.how_to', ['url' => route('howto')])!!}</p>
        <p class="mt-3">{!!__('tournament.discord')!!}</p>
        <div class="mt-8 text-center">
            <a href="{{$tournament['challonge_url']}}" rel="noreferrer nofollow noopener" target="_blank" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-blue-700 bg-blue-100 border border-transparent rounded-md shadow-sm hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{__('tournament.participate')}}
            </a>
        </div>
        @else
        <div class="p-4 mt-8 rounded-md bg-indigo-50">
            <div class="flex-1 md:flex md:justify-between">
                <p class="text-sm text-indigo-700">
                    {{__('tournament.its_over')}}
                </p>
            </div>
        </div>

        <h3 class="mt-10 mb-4 text-2xl font-bold text-gray-900 md:mt-20 md:text-3xl">{{__('tournament.result')}}</h3>
        <div class="mt-3 aspect-w-16 aspect-h-9">
            <iframe
                src="{{$tournament['video']}}"
                height="100%"
                width="100%"
                allowfullscreen="true">
            </iframe>
        </div>
        <div class="grid gap-4 mt-6 md:grid-cols-3">
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