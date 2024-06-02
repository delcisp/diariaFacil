@extends('master')

@section('content')


<x-validation-errors class="mb-4" />

<div class="body bg-[#D6C9F2] flex justify-center items-center min-h-screen">

    <form method="POST" action="{{ route('register') }}" >
        @csrf
        <div class="grid bg-[#fff] rounded-lg border-4 border-[#705abf] p-4">

            <div class="mx-2 border-b mb-3 border-purple-300/100 pb-12">
              <h2 class="mt-2 font-semibold leading-7 text-[#705ABF]">INFORMAÇÕES PESSOAIS</h2>


              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-12">
                <div class="sm:col-span-6">
                  <label for="name" value="{{ __('Name')}}" class="block text-sm font-medium leading-6 text-[#705ABF]">Nome</label>
                  <div class="mt-2">
                    <input type="text" name="name" id="name" required autofocus autocomplete="name" :value="old('name')" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>

                <div class="sm:col-span-6">
                  <label for="lastname" class="block text-sm font-medium leading-6 text-[#705ABF]" value="{{ __('Lastname')}}" >Sobrenome</label>
                  <div class="mt-2">
                    <input type="text" name="lastname" id="lastname" required autofocus autocomplete="lastname" :value="old('sobrenome')" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-6">
                  <label for="email" class="block text-sm font-medium leading-6 text-[#705ABF]" value="{{ __('Email')}}">Email</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" :value="old('email')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="email" class="block text-sm font-medium leading-6 text-[#705ABF]" value="{{ __('Usertype') }}">Tipo de perfil</label>
                  <div class="mt-2">
                    <input id="usertype" name="usertype" type="text" placeholder="contratante" value="2" readonly required class="block w-full rounded-md border-0 py-1.5 text-[#B99AD9] shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400">
                  </div>
                </div>

                <div class="sm:col-span-6">
                  <label for="password" class="block text-sm font-medium leading-6 text-[#705ABF]" value="{{ __('Senha')}}"> Senha</label>
                  <div class="mt-2">
                    <input type="password" name="password" id="password" required autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
              <div class="sm:col-span-6">
                <label for="password_confirmation" value="{{ __('Confirme a senha') }}"  class="block text-sm font-medium leading-6 text-[#705ABF]"  >Confirme a Senha</label>
                <div class="mt-2">
                  <input type="password" name="password_confirmation" required autocomplete="new-password" id="password_confirmation"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              </div>
            </div>
            <div class="col-span-full mx-2">
              <input type="checkbox" class="checkbox ms-2 "  />
              <label for="checkbox" class="text-[#B99AD9]">Aceito os termos e condições de serviço. </label>
            </div>
            <div class="mt-6 flex items-center justify-end mx-3 mb-2 gap-x-6">
              <button type="button" class="text-sm font-semibold leading-6 text-[#B99AD9]" > <a href="/tipoperfil"> Cancelar</a> </button>
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Registrar') }}</button>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
        @endif

            <div class="flex items-center justify-end mt-4">
              <a class=" mb-2 me-4 underline text-lg text-[#705ABF] hover:text-[#B99AD9] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                  {{ __('Já está registrado?') }}
              </a>
          </div>

          </div>


  </form>

</div>

@endsection
