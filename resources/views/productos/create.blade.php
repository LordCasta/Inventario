<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Productos') }}
        </h2>
      
        <a class="p-6 text-gray-900 dark:text-gray-100" href="{{route('productos.index')}}">
         <div class="w-0 h-0
  border-t-8 border-t-transparent
  border-b-8 border-b-transparent
  border-r-8 border-r-gray-100"></div>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    {{ __("Crea un Producto") }}
                </div>
                <form class="max-w-md mx-auto" method="post" action="{{route('productos.store')}}">
                    @csrf

                    <div>
                        <label for="Nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="Nombre" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    @error('Nombre')
                        <div class="p-6 text-gray-900 dark:text-red-600 ">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="Descripcion" class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                    <textarea name="Descripcion" rows="4" class="mb-5 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>


                    @error('Descripcion')
                        <div class="p-6 text-gray-900 dark:text-red-600 ">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-5">
                        <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                        <input type="text" name="stock" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    @error('stock')
                        <div class="p-6 text-gray-900 dark:text-red-600 ">
                            {{ $message }}
                        </div>
                    @enderror

                     <div class="mb-5">
                        <label for="precio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                        <input type="text" name="precio" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    @error('precio')
                        <div class="p-6 text-gray-900 dark:text-red-600 ">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elige la categoría</label>
                    <select name="categoria" id="categorias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5">
                       @foreach ($categorias as $cat)
                            <option value="{{$cat->id}}">{{$cat->nombre}} </option>
                        @endforeach
                    </select>
                                        
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
                
                </form>
            </div>
            

        </div>
    </div>
    
</x-app-layout>
