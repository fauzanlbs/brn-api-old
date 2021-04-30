<?php

declare(strict_types=1);

return [

    // Manage autoload migrations
    'autoload_migrations' => false,

    // Addresses Database Tables
    'tables' => [
        'addresses' => 'addresses',
    ],

    // Addresses Models
    'models' => [
        'address' => \Rinvex\Addresses\Models\Address::class,
    ],

    // Addresses Geocoding Options
    'geocoding' => true,

];
