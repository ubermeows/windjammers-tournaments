<nav class="fixed z-50 w-full sm:transition sm:duration-200 sm:ease-in-out bg-transparent font-body" x-data="navbar()" @resize.window="open = false" @scroll.window="handleScroll" :class="{ 'bg-white shadow-sm':  scrolled || open }">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center flex-shrink-0">
                <img class="block w-auto h-8 mr-2" src="{{asset('images/logo-disc.png')}}" alt="Windjammers France logo">
                <a href="/" :class="{ 'gradient-text':  scrolled || open }"  class="flex flex-col items-center justify-center ml-2 font-bold text-white uppercase transition ease-in-out sm:duration-200 font-display">
                    <span class="text-sm">Windjammers</span>
                    <span style="font-size: 0.5rem">France</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    function navbar() {
        return {
            open: false,
            scrolled: false,
            handleScroll() {
                if (window.pageYOffset > 0) {
                    this.scrolled = true;
                } else {
                    this.scrolled = false;
                }
            }
        }
    }
</script>