<section class="relative flex items-center min-h-450px lg:min-h-600px xl:min-h-800px">
    <div class="relative z-10 max-w-screen-md px-4 mx-auto text-center sm:px-6">
        <h1 class="text-lg text-white md:text-2xl lg:text-3xl font-display text-shadow">{{$tournament['title']}}</h1>
        <h2 class="text-lg text-white md:text-1xl lg:text-1xl font-display text-shadow">{{$tournament['subtitle']}}</h2>
    </div>
    <div class="scanlines"></div>
    <div x-data="parallaxBackground()" x-ref="bg" @scroll.window="handleScroll" class="absolute top-0 left-0 w-full h-full bg-no-repeat bg-cover -z-1" style="background-image: url({{$image}});background-position-x: center;"></div>
</section>