<p>title : {{$tournament['title']}}</p>
<p>challonge_url : {{$tournament['challonge_url']}}</p>
<p>started_at : {{$tournament['started_at']}}</p>
<p>description : {{$tournament['localization']['description']}}</p>
Rules :
<ul>
@foreach($tournament['localization']['rules'] as $rule) <li>{{$rule}}</li> @endforeach
</ul>


<p style='margin-top: 107px;'>Une fois le tournoi terminé on affiche ces infos en plus :</p>

<p>video (attention, la vidéo peut être du youtube ou du twitch) : {{$tournament['video']}}</p>
Winners (Regarde comment challonge gere ca https://windjammersfr.challonge.com/fr/winterleague3) :
<ul>
@foreach($tournament['winners'] as $winner) <li>{{$winner}}</li> @endforeach
</ul>
