<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Eliminar Pedido</title>
</head>

<body>
    <div class="container mx-auto mt-10 ">
        <form action="{{route('destroy1',$item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Eliminar el Producto</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">El producto sera eliminado y dejara de existir :C </p>

                    <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="nombre"
                                class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input disabled value="{{$item->nombre}}" type="text" name="nombre" id="nombre" autocomplete="nombre"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="nombre del producto">
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="marca"
                                class="block text-sm font-medium leading-6 text-gray-900">Marca</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input disabled value="{{$item->marca}}" type="text" name="marca" id="marca" autocomplete="marca"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="marca del producto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-start gap-x-6">
                <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Eliminar</button>
                <a href="{{ route('tienda1') }}" class="rounded-md bg-slate-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Cancelar</a>    
              </div>
        </form>
    </div>
</body>
</html>