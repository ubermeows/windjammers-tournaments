@extends('app')

@push('metas')
<title>How to | Windjammers France</title>
<meta property='og:title' content="How to">
<meta property='og:description' content="">
@endpush

@section('title', 'How to')

@section('content')
<div class="px-4 pt-16 pb-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto prose">
        <h1>How to 🥏</h1>
        <h2>1. Install Fightcade</h2>
        <p>Download and install <b>Fightcade2</b> : <a href="https://www.fightcade.com/">https://www.fightcade.com/</a></p>
        <h2>2. Set up an account</h2>
        <p>In order to connect to <b>Fightcade</b> 2 you'll have to create an account on the website : <a href="https://www.fightcade.com/register">https://www.fightcade.com/register</a></p>
        <h2>3. Install Windjammers</h2>
        <ul>
            <li>Launch <b>Fightcade2</b> and click <code>Roms > Open ROMS folder</code></li>
            <li>In the pop-up window, clic on the link <code>FBNeo ROMs</code>, the link will bring you to the file in which the ROMs are placed</li>
            <li>In that file, paste the archives <b><a href="{{asset('storage/roms/neogeo.zip')}}">neogeo.zip</a></b> and <b><a href="{{asset('storage/roms/wjammers.zip')}}">wjammers.zip</a></b></li>
            <li>Reboot <b>Fightcade2</b> so it refreshes and takes into account the newly installed ROMs</li>
        </ul>
        <h2>4. Add the tournament lobby</h2>
        <p>Once connected to <b>Fightcade2</b>, add the tournament lobby by searching "windjammers" in the game channel search function</p>
        <p><b>Be careful</b> to select <b>ARCADE FC2</b></p>
        <video controls width="500">
            <source src="{{asset('storage/webm/loobie.webm')}}" type="video/webm">
        </video>
        <h2>5. Set your account for ranked games</h2>
        <p>It's better to set your account as "Ranked Player" in order to play</p>
        <video controls width="500">
            <source src="{{asset('storage/webm/rank.webm')}}" type="video/webm">
        </video>
        <h2>6. Play a match</h2>
        <video controls width="500">
            <source src="{{asset('storage/webm/fight.webm')}}" type="video/webm">
        </video>
    </div>
</div>
@endsection