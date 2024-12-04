<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Meta viewport para responsividad -->
    <title>NBA</title>
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
    <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center mb-6">LLlista de jugadors de la NBA</h1>
        <div class="mb-4 text-right">
            <a href="/nba/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Crear Jugador</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                <tr>
                    <th class="px-4 py-2 text-left border-b">Nom</th>
                    <th class="px-4 py-2 text-left border-b">Equip</th>
                    <th class="px-4 py-2 text-left border-b">Data del debut</th>
                    <th class="px-4 py-2 text-left border-b">Anells guanyats</th>
                    <th class="px-4 py-2 text-left border-b">Accions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($nba as $jugador): ?>
                <tr class="border-b">
                    <td class="px-4 py-2"><?= htmlspecialchars($jugador->nombre) ?></td>
                    <td class="px-4 py-2"><?= htmlspecialchars($jugador->equipo) ?></td>
                    <td class="px-4 py-2"><?= htmlspecialchars($jugador->fecha_debut) ?></td>
                    <td class="px-4 py-2"><?= htmlspecialchars($jugador->anillos_ganados) ?></td>
                    <td class="px-4 py-2">
                        <!-- Botón Ver Detalles -->
                        <a href="/nba/edit/<?= $jugador->id ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 ml-2">Editar</a>
                        <a href="/nba/confirm-delete/<?= $jugador->id ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Eliminar</a>
                        <a href="/nba/show/<?= $jugador->id ?>" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Show</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<footer class="fixed-footer bg-gray-800 text-white text-center py-4 mt-8">
    <p>&copy; 2024 phpASIX by Lahcen. Tots els drets reservats.</p>
</footer>
</body>
</html>