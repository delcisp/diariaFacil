@extends ('master')

@section ('content')
<x-app-layout>
    <x-slot name="header">
        <script src="https://kit.fontawesome.com/f5aca0c92c.js" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="container mx-auto mt-5 border-[#6D0FF2] border rounded ">
    <form class="max-w mt-3 mx-3">
        <div class="flex">
            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Seu email</label>
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Filtrar por <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg></button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                </li>
                </ul>
            </div>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="PAAAAAAAAAAAAAAAA" required />
                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Procurar</span>
                </button>
            </div>
        </div>
    </form>
        @foreach ($diaristas as $listing=>$item)
        <div class="mt-3 mb-3 flex flex-col justify-center">
            <div
                class="relative mt-3 mb-3 flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 mx-5 border border-white bg-white">
                <div class="w-full md:w-1/3 bg-white grid place-items-center">
                    @if ($item->foto_perfil)
                    <img src="{{ asset('storage/users/' . $item->foto_perfil) }}" alt="Profile Photo" class="rounded-xl w-8/12" />
                @else
                    <img src="img/logo.png" alt="Default Avatar" class="rounded-xl w-8/12" />
                @endif
            </div>
                    <div class="w-full bg-white flex flex-col space-y-2 p-3">

                        <div class="flex justify-between item-start">
                            <p class="text-gray-500 font-medium hidden md:block">Serviços de Limpeza</p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <p class="text-gray-600 font-bold text-sm ml-1">
                                    4.96
                                    <span class="text-gray-500 font-normal">(76 reviews)</span>
                                </p>
                            </div>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                                Verificado</div>
                        </div>
                        <h3 class="font-black text-gray-800 md:text-3xl text-xl"> {{$item->user->name }} {{$item->user->lastname }} </h3>
                        <p class="md:text-lg text-gray-500 text-base"> {{$item->descricao}}  </p>
                        <p class="text-xl font-black text-gray-800">
                            {{$item->valor_hora}}
                            <span class="font-normal text-gray-600 text-base">/hora</span>
                            {{$item->valor_diaria }}
                            <span class="font-normal text-gray-600 text-base">/diária</span>

                        </p>
                        <div class="flex  me-5 ">
                            <div class="flex-grow-0">
                            <a href="https://wa.me/{{ preg_replace('/\D+/', '', $item->telefone) }}?text={{ urlencode('Olá! Estou vindo pela plataforma DiariaFacil e gostaria de mais informações sobre o seu serviço.') }}"class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#B99AD9] rounded-lg hover:bg-[#F2B807] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#F2B807] dark:hover:bg-[#F2B807] dark:focus:ring-[#F2B807]">
                                    Entrar em contato
                                </a>
                            </div>

                            <div class="flex-grow-0 ms-3">
                                <a href="{{ route('listing', ['id' => $item->id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#B99AD9] rounded-lg hover:bg-[#F2B807] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#F2B807] dark:hover:bg-[#F2B807] dark:focus:ring-[#F2B807]">
                                    Ver detalhes
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                  <div class="flex mx-auto ">

                    <a href="#" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                      <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                      </svg>
                      Anterior
                    </a>
                    <a href="#" class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                      Próximo
                      <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                      </svg>
                    </a>
                  </div>

            </div>


</div>

</x-app-layout>

@endsection
