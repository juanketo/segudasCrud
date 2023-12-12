<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>tienda</title>
</head>

<body>
    <div class="container mx-auto ">
        <h1 class="text-center uppercase text-lg mt-5">Pedidos Tiendita</h1>
        <div>
            <div class="mt-5">
                <a href="{{ route('agregar1') }}" class="text-gray-400 bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium uppercase">Agregar Nuevo Producto</a>
            </div>
            <div class="mt-5">
              <a href="{{ route('provedor1') }}" class="text-gray-400 bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium uppercase">Agregar Provedor</a>
          </div> 
            <table class=" w-full mt-8">
                <thead class="bg-gray-200 border-b-2 border-slate-200">
                  <tr>
                    <th class="p-3 text-sm font-semibold -tracking-wide text-center">ID del Provedor</th>
                    <th class="p-3 text-sm font-semibold -tracking-wide text-center">Nombre</th>
                    <th class="p-3 text-sm font-semibold -tracking-wide text-center">Marca</th>
                    <th class="p-3 text-sm font-semibold -tracking-wide text-center">Actualizar</th>
                    <th class="p-3 text-sm font-semibold -tracking-wide text-center">Eliminar</th>
                  </tr>
                </thead>

                <tbody class="p-3 border-y-gray-400">
                    @foreach ($piezas as $item)
                  <tr>
                    <td class="p-3 text-sm font-semibold -tracking-wide text-center">{{$item->provedor}}</td>
                    <td class="p-3 text-sm font-semibold -tracking-wide text-center">{{$item->nombre}}</td>
                    <td class="p-3 text-sm font-semibold -tracking-wide text-center">{{$item->marca}}</td>
                    <td class="p-3 text-sm font-semibold -tracking-wide text-center"><a href="{{ route('actualizar1',$item->id) }}" class="text-gray-40 bg-orange-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium uppercase">Actualizar</a></td>
                    <td class="p-3 text-sm font-semibold -tracking-wide text-center"><a href="{{ route('eliminar1',$item->id) }}" class="text-gray-40 bg-red-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium uppercase">Eliminar</a></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            <h1 class="text-center uppercase text-lg mt-10">Provedors</h1>
            <table class=" w-full mt-8">
              <thead class="bg-gray-200 border-b-2 border-slate-200">
                <tr>
                  <th class="p-3 text-sm font-semibold -tracking-wide text-center">Nombre</th>
                  <th class="p-3 text-sm font-semibold -tracking-wide text-center">Actualizar</th>
                  <th class="p-3 text-sm font-semibold -tracking-wide text-center">Eliminar</th>
                </tr>
              </thead>

              <tbody class="p-3 border-y-gray-400">
                  @foreach ($provedores as $item)
                <tr>
                  <td class="p-3 text-sm font-semibold -tracking-wide text-center">{{$item->nombre}}</td>
                  <td class="p-3 text-sm font-semibold -tracking-wide text-center"><a href="{{ route('actualizar2',$item->id) }}" class="text-gray-40 bg-orange-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium uppercase">Actualizar</a></td>
                  <td class="p-3 text-sm font-semibold -tracking-wide text-center"><a href="{{ route('eliminar2',$item->id) }}" class="text-gray-40 bg-red-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium uppercase">Eliminar</a></td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
    </div>
</body>
</html>
