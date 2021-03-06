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
        <h2>1. S'inscrire au tournoi</h2>
        <p>Pour commencer il est nécessaire de s'inscrire sur le challonge du tournoi en cliquant sur "Participer au tournoi".</p>
        <video controls width="500">
            <source src="{{asset('storage/webm/challonge.webm')}}" type="video/webm">
        </video>
        <h2>2. Installer Fightcade</h2>
        <p>Téléchargez et installez <b>Fightcade2</b> : <a href="https://www.fightcade.com/">https://www.fightcade.com/</a>.</p>
        <h2>3. Se créer un compte</h2>
        <p>Pour pouvoir vous connecter à <b>Fightcade2</b>, vous devez vous créer un compte sur le site <a href="https://www.fightcade.com/register">https://www.fightcade.com/register</a>.</p>
        <h2>4. Installer Windjammers</h2>
        <ul>
            <li>Lancez <b>Fightcade 2</b> puis cliquez sur <code>ROMS > Open ROMS Folder</code></li>
            <li>Dans la nouvelle fenêtre, cliquez sur le lien <code>FBNeo ROMs</code>, ce lien vous emmène vers le dossier contenant les ROMs de l'émulateur</li>
            <li>Dans ce dossier, insérez les archives <b><a href="{{asset('storage/roms/neogeo.zip')}}">neogeo.zip</a></b> et <b><a href="{{asset('storage/roms/wjammers.zip')}}">wjammers.zip</a></b></li>
            <li>Relancez <b>Fightcade2</b> pour prendre en compte les nouvelles ROMs</li>
        </ul>
        <h2>5. Ajouter le lobby du tournoi</h2>
        <p>Une fois connecté à <b>Fighcade2</b>, ajoutez le lobby du tournoi en recherchant l'identifiant : <b>Windjammers</b>.</p>
        <p><b>Attention</b> à bien selectionner le lobby <b>ARCADE FC2</b>.</p>
        <video controls width="500">
            <source src="{{asset('storage/webm/loobie.webm')}}" type="video/webm">
        </video>
        <h2>6. Préparer son compte aux matchs ranked</h2>
        <p>Pour participer aux matchs il est préférable de paramétrer son compte en "Ranked Player".</p>
        <video controls width="500">
            <source src="{{asset('storage/webm/rank.webm')}}" type="video/webm">
        </video>
        <h2>7. Lancer un match</h2>
        <video controls width="500">
            <source src="{{asset('storage/webm/fight.webm')}}" type="video/webm">
        </video>
    </div>
</div>
@endsection