<a @class([
    'bg-gray-950/50 text-white' => request()->is('/'),
    'text-gray-300 hover:bg-white/5 hover:text-white' => !request()->is('/'),
    aria current="page" => request()->is'/
])>{{ $slot }}</a>