@extends ('master')

@section ('content')
<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="body">
    <div class="relative overflow-x-auto mt-5 mx-4 shadow-md sm:rounded-lg">
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Procurar</label>
            <div class="relative mt-1 py-1 ms-2">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search" class="block mt-2 pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Procurar por...">
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Nome de Usuário
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipo de Usuário
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Perfil criado Em
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Motivo denuncia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-{{ $user->id }}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-{{ $user->id }}" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="px-8 py-4">
                        {{ $user->usertype }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->created_at->format('d/m/Y') }}
                    </td>
                    <td class="px-6 py-4">
                        <!-- Placeholder for 'motivo denuncia' -->
                    </td>
                    <td class="px-6 py-4">
                        <i class="fas fa-user-check fa-lg" style="color: #B197FC;"></i>
                        <i class="ms-2 fas fa-trash-alt fa-lg" style="color: #B197FC;"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

</x-app-layout>
@endsection
