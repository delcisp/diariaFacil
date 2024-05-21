@extends('master')

@section('content')
    <body style="background-image: url(img/bg_welcome.png); background-repeat: no-repeat; background-size:cover; ">
        <div class="relative sm:flex sm:justify-center  sm:items-center min-h-50 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-purple-300focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-purple-300  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Entrar</a>


                            <a href="{{ url('/tipoperfil') }}" class="ml-4 font-semibold text-purple-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>

                    @endauth

                </div>
            @endif

            <div class="p-6 lg:p-8">
                <img src="img/logo.png"
                width="300px" alt="">

            </div>
        </div>
        <div class="relative sm:flex sm:justify-center sm:items-center">
            <p class="mt-2 text-4xl text-center font-bold text-white">Bem vindo ao nosso mundo de diaristas talentosas!</p>
        </div>
    </body>
@endsection
