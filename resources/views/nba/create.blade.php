<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Meta viewport para responsividad -->
    <title>Demo ASIX - Crear Jugador</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .fixed-footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #2d3748;
            color: white;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>
<body class="bg-gray-100">
<header class="bg-blue-600 text-white p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="/" class="text-2xl font-bold">phpASIX by Lahcen</a>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="/nba" class="hover:text-blue-200">NBA</a></li>
                <li><a href="/books" class="hover:text-blue-200">Books</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="py-8">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center mb-8">Afegir nou jugador</h1>
        <form action="/nba/store" method="POST">
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nom del jugador</label>
                <input type="text" name="nombre" id="nombre" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="equipo" class="block text-sm font-medium text-gray-700">Equip</label>
                <input type="text" name="equipo" id="equipo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="fecha_debut" class="block text-sm font-medium text-gray-700">Data de debut</label>
                <input type="date" name="fecha_debut" id="fecha_debut" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="anillos_ganados" class="block text-sm font-medium text-gray-700">Número d'anells guanyats</label>
                <input type="number" name="anillos_ganados" id="anillos_ganados" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700">Crear</button>
        </form>
    </div>
</section>

<footer class="fixed-footer bg-gray-800 text-white text-center py-4 mt-8">
    <p>&copy; 2024 phpASIX by Lahcen. Tots els drets reservats.</p>
</footer>
</body>
</html>
