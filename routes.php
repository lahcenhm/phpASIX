<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',
    '/books/show/{id}' => '../App/Controllers/BookController.php@show',

    '/nba' => '../App/Controllers/NbaController.php@index',
    '/nba/create' => '../App/Controllers/NbaController.php@create',
    '/nba/store' => '../App/Controllers/NbaController.php@store',
    '/nba/edit/{id}' => '../App/Controllers/NbaController.php@edit',
    '/nba/update/{id}' => '../App/Controllers/NbaController.php@update',
    '/nba/delete/{id}' => '../App/Controllers/NbaController.php@delete',
    '/nba/destroy/{id}' => '../App/Controllers/NbaController.php@destroy',
    '/nba/confirm-delete/{id}' => '../App/Controllers/NbaController.php@confirmDelete',
    '/nba/show/{id}' => '../App/Controllers/NbaController.php@show',

];