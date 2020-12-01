<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Permissions
    require_once __DIR__ . '/admin/permissions.php';

    // Roles
    require_once __DIR__ . '/admin/roles.php';

    // Users
    require_once __DIR__ . '/admin/users.php';

    // Product Categories
    require_once __DIR__ . '/admin/product-categories.php';

    // Product Tags
    require_once __DIR__ . '/admin/product-tags.php';

    // Products
    require_once __DIR__ . '/admin/products.php';

    // Inventories
    require_once __DIR__ . '/admin/inventories.php';
});
