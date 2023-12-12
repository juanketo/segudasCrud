<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>

<body>
    <div class="container mx-auto ">
        <h1 class="text-center uppercase text-lg mt-5">Bienvenido a mi tiendita</h1>
        <div class="mt-10 text-center">
            <a href="{{ route('tienda1') }}" class="text-gray-400 bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium uppercase">COMENZAR</a>
        </div> 
   
    </div>
</body>

</html>
