<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
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
        <h1 class="text-3xl font-bold text-center mb-6">Estàs segur que vols eliminar el llibre: <strong><?= $book->name ?></strong>?</h1>
        <form action="/books/destroy/<?= $book->id ?>" method="POST" class="text-center">
            <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-700">Eliminar</button>
            <a href="/books" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-700 ml-4">Cancel·lar</a>
        </form>
    </div>
</section>
<footer class="fixed-footer bg-gray-800 text-white text-center py-4 mt-8">
    <p>&copy; 2024 phpASIX by Lahcen. Tots els drets reservats.</p>
</footer>
</body>
</html>