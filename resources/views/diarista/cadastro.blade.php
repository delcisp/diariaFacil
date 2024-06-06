@extends('master')

@section('content')
<x-app-layout>
    <x-slot name="header">
    </x-slot>
<div class="flex justify-center items-center min-h-screen bg-[#D6C9F2] " >
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="img/logo.png" alt="" />
        </a>
        <div class=" mx-auto w-full bg-gray-200 rounded-full dark:bg-gray-700">
            <div class="bg-[#6D0FF2] text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
          </div>
        <div class="p-5">

            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-700 dark:text-white">Complete seu Cadastro!</h5>
            </a>

            <a href="/profile" class="  bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <p class="mb-3 font-normal text-[#705ABF] dark:text-gray-400">Obrigado por se registrar! Clique aqui para preencher o resto das informações e deslanchar o seu perfil no DiariaFacil!</p>
            <a href="/profile" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#6D0FF2] rounded-lg hover:bg-[#D6C9F2] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Completar cadastro
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>

</x-app-layout>
@endsection

