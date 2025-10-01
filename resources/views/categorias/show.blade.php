<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categorías') }}
        </h2>
        <a class="p-6 text-gray-900 dark:text-gray-100" href="{{route('categorias.index')}}">
         <div class="w-0 h-0
            border-t-8 border-t-transparent
            border-b-8 border-b-transparent
            border-r-8 border-r-gray-100"></div>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2># {{ $categoria->id }} - {{ $categoria->nombre }}</h2>
                </div>
                <div class="p-2 text-gray-900 dark:text-gray-100">
                   <b>Descripción:</b>  {{ $categoria->descripcion }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
