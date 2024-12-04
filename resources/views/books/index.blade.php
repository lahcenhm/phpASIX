<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .fixed-footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #2d3748; /* Gris oscuro */
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
        <h1 class="text-3xl font-bold text-center mb-6">Llista de llibres</h1>
        <div class="mb-4 text-right">
            <a href="/books/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700"><Cr></Cr>ear Llibre</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                <tr>
                    <th class="px-4 py-2 text-left border-b">Títol</th>
                    <th class="px-4 py-2 text-left border-b">Autor</th>
                    <th class="px-4 py-2 text-left border-b">Any</th>
                    <th class="px-4 py-2 text-left border-b">Accions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($books as $book): ?>
                <tr class="border-b">
                    <td class="px-4 py-2"><?= $book->name; ?></td>
                    <td class="px-4 py-2"><?= $book->author; ?></td>
                    <td class="px-4 py-2"><?= $book->releaseYear; ?></td>
                    <td class="px-4 py-2">
                        <a href="/books/edit/<?= $book->id ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 ml-2">Editar</a>
                        <a href="/books/confirm-delete/<?= $book->id ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Eliminar</a>
                        <a href="/books/show/<?= $book->id ?>" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Show</a>
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