<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* Reset bàsic */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Space between header, content, and footer */
            align-items: center;
            min-height: 100vh;
            padding-bottom: 20px; /* Space for the footer */
        }

        header {
            text-align: center;
            margin-bottom: 50px;
        }

        header a {
            font-size: 1.5rem;
            font-weight: bold;
            color: #0078d4;
            text-decoration: none;
        }

        nav {
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin: 15px 0;
        }

        nav ul li a {
            display: block;
            padding: 15px 30px;
            font-size: 1.5rem;
            color: #fff;
            background-color: #0078d4;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        nav ul li a:hover {
            background-color: #005bb5;
            transform: scale(1.05);
        }

        nav ul li a:active {
            background-color: #003f87;
        }

        footer {
            text-align: center;
            background: #333;
            color: #fff;
            padding: 10px 0;
            width: 100%;
        }


        .titol {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <a class="titol">phpASIX fet per Lahcen</a>
</header>
<nav>
    <ul>
        <li><a href="books">Books</a></li>
        <li><a href="nba">NBA</a></li>
    </ul>
</nav>
<footer >
    <p>&copy; 2024 phpASIX by Lahcen. Tots els drets reservats.</p>
</footer>
</body>
</html>
