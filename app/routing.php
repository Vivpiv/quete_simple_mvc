<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'],
        ['index', '/items', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Category' => [
        ['showCategories','/categories','GET'],
        ['showCategory', '/category/{id}', 'GET'],
    ],
];