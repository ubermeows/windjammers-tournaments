<div {{ $attributes->class(['relative rounded-b-lg border-t-4 bg-gray-50 px-6 py-5 shadow-sm flex items-center space-x-3', 'border-yellow-300' => $index === '0', 'border-gray-400' => $index === '1', 'border-yellow-500' => $index === '2']) }}>
    <div class="mr-3 text-lg font-semibold">{{$rank}}</div>
    <div class="flex-shrink-0">
        <img class="h-10 w-10 rounded-full" src="https://s3.amazonaws.com/challonge_app/users/images/003/442/717/xlarge/WindjammersLogo.png" alt="">
    </div>
    <div class="flex-1 min-w-0">
        <p class="text-sm font-medium text-gray-900">
            {{$winner}}
        </p>
        <p class="text-sm text-gray-500 truncate">
            8 - 0 - 0
        </p>
    </div>
</div>