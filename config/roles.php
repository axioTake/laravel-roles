<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package Connection
    |--------------------------------------------------------------------------
    |
    | You can set a different database connection for this package. It will set
    | new connection for models Role and Permission. When this option is null,
    | it will connect to the main database, which is set up in database.php
    |
    */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Slug Separator
    |--------------------------------------------------------------------------
    |
    | Here you can change the slug separator. This is very important in matter
    | of magic method __call() and also a `Slugable` trait. The default value
    | is a dot.
    |
    */

    'separator' => '.',

    /*
    |--------------------------------------------------------------------------
    | Permission naming
    |--------------------------------------------------------------------------
    |
    | Define permission naming order, either <resource><separator><action> 
    | (e.g. users.create) or vice versa <action><separator><resource>
    | (e.g. create.users). 
    | This is very important in matter of magic method __call(), so you can
    | still use magic functions like, allowCreateUsers() 
    |
    */

    'resourceFirstOrder' => true,

    /*
    |--------------------------------------------------------------------------
    | Permission wildcard selector - not implemented, yet
    |--------------------------------------------------------------------------
    |
    | Allow/disallow permission wildcard selector, e.g. users.*
    |
    */

    'permissionWildcard' => true,

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | If you want, you can replace default models from this package by models
    | you created. Have a look at `axioTake\LaravelRoles\Models\Role` model and
    | `axioTake\LaravelRoles\Models\Permission` model.
    |
    */

    'models' => [
        'role'       => axioTake\LaravelRoles\Models\Role::class,
        'permission' => axioTake\LaravelRoles\Models\Permission::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Roles, Permissions and Allowed "Pretend"
    |--------------------------------------------------------------------------
    |
    | You can pretend or simulate package behavior no matter what is in your
    | database. It is really useful when you are testing you application.
    | Set up what will methods hasRole(), hasPermission() and allowed() return.
    |
    */

    'pretend' => [

        'enabled' => false,

        'options' => [
            'hasRole'       => true,
            'hasPermission' => true,
            'allowed'       => true,
        ],

    ],

];
