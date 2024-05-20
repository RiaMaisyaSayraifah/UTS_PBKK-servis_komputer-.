<!DOCTYPE html>
<html lang="en" class="bg-gray-200">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Servis Komputer</title>
</head>
<body>
    <div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white shadow-md flex flex-col">
            <div class="flex items-center justify-center h-20 shadow-md bg-gray-900">
                <h1 class="text-2xl font-bold text-blue-400 tracking-wide">Servis <span class="text-yellow-300">Komputer</span></h1>
            </div>
            <nav class="mt-10 flex-1 px-4 space-y-2">
                <a href="{{ route('customers.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Customer</a>
                <a href="{{ route('pegawai.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Pegawai</a>
                <a href="{{ route('komputer.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Komputer</a>
                <a href="{{ route('keluhan.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Keluhan</a>
            </nav>
        </aside>
        <div class="flex flex-col flex-1 overflow-hidden">
            <nav class="h-20 px-4 py-4 bg-gray-900 text-white shadow-md flex items-center">
                <!-- Navbar kosong -->
            </nav>
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>