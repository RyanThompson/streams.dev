@extends('layouts/default')

@section('content')

<div class="h-screen flex justify-center align-items-center bg-dark">
    <div class="flex flex-col self-center">
        
        <div>
            <pre class="brand-ascii text-center text-xs mb-8 leading-tight text-black bg-white opacity-90">
   _____________  _______   __  _______
  / __/_  __/ _ \/ __/ _ | /  |/  / __/
 _\ \  / / / , _/ _// __ |/ /|_/ /\ \  
/___/ /_/ /_/|_/___/_/ |_/_/  /_/___/  
                                                     </pre>
        </div>

        {{-- <p class="font-mono text-xs text-white text-center mb-6">
            {{ Arr::random([
                'A Development Cult',
                'Stacked',
                'A Development Methodology',
                'Idoimatic Bliss', 
                'A Higher Language',
                'Data First',
            ]) }}
        </p> --}}

        <p class="font-mono text-center">
            <a href="https://github.com/anomalylabs/streams" target="_blank" class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-purple _hover:bg-purple text-purple _hover:text-white font-normal py-2 px-4 rounded">GitHub</a>
            <a href="https://discord.gg/RjywDG2" target="_blank" class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-purple _hover:bg-purple text-purple _hover:text-white font-normal py-2 px-4 rounded">Discord</a>
            @if (in_array(Request::ip(), ['127.0.0.1', '::1']) || Request::has('showmethedocs'))
            <a href="/docs" class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-purple _hover:bg-purple text-purple _hover:text-white font-normal py-2 px-4 rounded">Docs</a>
            <a href="/status" class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-purple _hover:bg-purple text-purple _hover:text-white font-normal py-2 px-4 rounded">Status</a>
            @endif
        </p>

    </div>
</div>
    
@endsection
