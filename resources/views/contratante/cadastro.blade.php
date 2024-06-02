@extends ('master')

@section ('content')
<x-app-layout>
    <x-slot name="header">
        <script src="https://kit.fontawesome.com/f5aca0c92c.js" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="body">

    <a href="/profilec" class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

        <div class=" ms-2 w-full bg-gray-200 rounded-full dark:bg-gray-700">
          <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
        </div>
              <div class="flex flex-col justify-between p-4 leading-normal">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-700 dark:text-white">Complete seu Cadastro!</h5>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Obrigado por se registrar! Clique aqui para preencher o resto das informações e deslanchar o seu perfil no DiariaFacil!</p>
              </div>
          </a>
</div>

</x-app-layout>

@endsection
