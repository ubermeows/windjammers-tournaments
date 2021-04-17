@extends('app')

@push('metas')
<title>How to | Windjammers France</title>
<meta property='og:title' content="How to">
<meta property='og:description' content="">
@endpush

@section('title', 'How to')

@section('content')
<div class="px-4 pt-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto prose">
        <h1>How to 🥏</h1>
        <h2>1. Installer Fightcade</h2>
        <p>Télécharger et installer <b>Fightcade2</b> : <a href="https://www.fightcade.com/">https://www.fightcade.com/</a></p>
        <h2>2. Se créer un compte</h2>
        <p>Pour pouvoir vous connecter à <b>Fightcade2</b> vous devez vous créer un compte sur le site <a href="https://www.fightcade.com/register">https://www.fightcade.com/register</a></p>
        <h2>3. Installer Windjammers</h2>
        <ul>
            <li>Lancer <b>Fightcade 2</b>, puis cliquer sur <code>ROMS > Open ROMS Folder</code></li>
            <li>Dans la nouvelle fenêtre cliquez sur le lien <code>FBNeo ROMs</code>, ce lien vous emmène vers le dossier contenant les ROMs de l'émulateur (FightCade\emulator\fbneo\ROMs)</li>
            <li>Dans ce dossier insérer les archives <b>neogeo.zip</b> et <b>wjammers.zip</b></li>
            <li>Relancer <b>Fightcade2</b> pour prendre en compte les nouvelles ROMs</li>
        </ul>
        <h2>4. Ajouter le looby du tournoi</h2>
        <p>Une fois connecté à <b>Fighcade2</b> ajouter le loobie du tournoi en recherchant l'identifiant : <b>Windjammers FC2</b> (voir vidéo)</p>
        <h2>5. Préparer son compte aux matchs ranked</h2>
        <p>Pour pouvoir participer aux matchs il est nécessaire de paramétrer son compte en "Ranked Player" (voir vidéo)</p>
        <video controls width="500">
            <source src="{{asset('storage/webm/rank.webm')}}" type="video/webm">
        </video>
    </div>
</div>
@endsection