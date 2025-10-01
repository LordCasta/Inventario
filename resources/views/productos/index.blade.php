<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Categorías') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Estás en index Productos") }}
                </div>
                <div class="p-6 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <buttontype="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <a href=" {{ route('productos.create') }} ">{{ __("Crear producto") }} </a> </button>
                </div>
            </div>
            

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table id="productosTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Stock
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Precio
                            </th>
                             <th scope="col" class="px-6 py-3">
                                Categoria
                            </th>
                           
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($productos as $prod)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('productos.show', $prod->id) }}">{{$prod->id}}</a>
                            </th>

                             <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('productos.show', $prod->id) }}">{{$prod->nombre}}</a>
                            </th>
                             <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$prod->stock}}
                            </th>
                             <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{number_format($prod->precio, 2)}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{ $prod->categoria ? $prod->categoria->nombre : 'Sin categoría' }}
                            </th>
                            

                            <td class="px-6 py-4">
                                <a href="{{route('productos.edit',  $prod->id)}}" 
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline btn btn-warning btn-sm">Edit</a> | 
                                    <form method="post" action="{{route('productos.destroy', $prod->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input class="font-medium text-blue-600 dark:text-red-600 cursor-pointer hover:underline" type="submit" value="DELETE" />
                                    </form>
                            </td>
                        
                        </tr>

                        @empty
                        <td>
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                {{ __("No data") }}
                             </div>
                        </td>

                        @endforelse

                        
                    </tbody>
                </table>
            </div>

        </div>


        

    </div>
</x-app-layout>
<script>
$('#productosTable').DataTable({
    responsive: true,
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'excelHtml5',
            text: 'Exportar a Excel',
            exportOptions: {
                // Exporta todas las columnas excepto la última (índice -1 en jQuery)
                columns: ':not(:last-child)'
            }
        }
    ]
});

</script>