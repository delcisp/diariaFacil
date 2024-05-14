@extends('master')

@section('content')
@if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
<div class=" body">
    <div class="flex justify-center h-screen"  >
        <div class="hidden bg-cover lg:block lg:w-2/3"  style="background-image: url('img/image_login.png')">
            <div class="flex items-center h-full px-20 ">

            </div>
        </div>

        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6" >
            <div class="flex-1">
                <div class="text-center">
                    <div class="flex justify-center mx-auto">
                        <img class="w-auto h-7 sm:h-8" src="img/logo.png" alt="">
                    </div>

                    <p class="mt-3 text-[#705ABF] md:text-4xl ms:text-2xl ">Entre na sua conta</p>
                </div>

                <div class="mt-8">
                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email" value="{{ __('Email') }}" class="block mb-2 text-lg text-[#705ABF]">Email</label>
                            <input type="email" name="email" id="email" :value="old('email')" required autofocus autocomplete="username"  placeholder="email@gmail.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-lg text-[#705ABF]" value="{{ __('Senha') }}" >Senha</label>

                                @if (Route::has('password.request'))
                                <a class="text-sm text-[#705ABF] focus:text-[#705abf] focus:ring-indigo-500hover:underline" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            @endif

                            </div>

                            <input type="password" name="password" id="password" required autocomplete="current-password"  placeholder="Sua senha" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <button class="w-full px-4 py-2 tracking-wide text-[#D6C9F2] hover:text-[#705abf] transition-colors duration-300 transform bg-[#705ABF] rounded-lg hover:bg-[#d6c9f2] focus:outline-none focus:bg-[#d6c9f2] focus:ring focus:ring-purple-600 focus:ring-opacity-50">
                                {{ __('Entrar') }}
                            </button>
                        </div>

                    </form>

                    <p class="mt-6 text-sm text-center text-gray-400">Ainda não tem uma conta?  <a href="/tipoperfil" class="text-[#705ABF] focus:outline-none focus:underline hover:underline"> Registre-se!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
