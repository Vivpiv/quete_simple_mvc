<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'],
        ['index', '/items', 'GET'], // action, url, HTTP method
        ['add', '/item/add', ['GET','POST']],
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['edit', '/item/edit/{id}', ['GET','POST']],
        ['delete', '/item/delete/{id}', 'GET'],
    ],
    'Category' => [
        ['showCategories','/categories','GET'],
        ['showCategory', '/category/{id}', 'GET'],
    ],
];