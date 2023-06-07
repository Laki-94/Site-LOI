<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/categories' => [[['_route' => 'app_admin_categories_index', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categories/new' => [[['_route' => 'app_admin_categories_new', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/profiles' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/profile/new' => [[['_route' => 'app_admin_new', '_controller' => 'App\\Controller\\Admin\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/produits/new' => [[['_route' => 'app_admin_produits_new', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart/show' => [[['_route' => 'app_cart_show', '_controller' => 'App\\Controller\\CartController::show'], null, null, null, false, false, null]],
        '/cart/clear' => [[['_route' => 'app_cart_clear', '_controller' => 'App\\Controller\\CartController::clear'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'app_categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'app_categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandesController::index'], null, null, null, false, false, null]],
        '/profile/commande/success' => [[['_route' => 'app_commandes_succes', '_controller' => 'App\\Controller\\CommandesController::sucess'], null, null, null, false, false, null]],
        '/profile/commande/cancel' => [[['_route' => 'app_commande_cancel', '_controller' => 'App\\Controller\\CommandesController::cancel'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|categories/([^/]++)(?'
                        .'|(*:39)'
                        .'|/edit(*:51)'
                        .'|(*:58)'
                    .')'
                    .'|profile/(?'
                        .'|([^/]++)(*:85)'
                        .'|modifier/([^/]++)(*:109)'
                    .')'
                    .'|([^/]++)(*:126)'
                    .'|produits(?'
                        .'|(*:145)'
                        .'|/(?'
                            .'|([^/]++)(*:165)'
                            .'|edit/([^/]++)(*:186)'
                            .'|([^/]++)(*:202)'
                        .')'
                    .')'
                .')'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:237)'
                        .'|remove(?'
                            .'|/([^/]++)(*:263)'
                            .'|quantite/([^/]++)(*:288)'
                        .')'
                    .')'
                    .'|tegories/(?'
                        .'|([^/]++)(*:318)'
                        .'|edit/([^/]++)(*:339)'
                        .'|([^/]++)(*:355)'
                    .')'
                .')'
                .'|/produits/([^/]++)(*:383)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:422)'
                    .'|wdt/([^/]++)(*:442)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:488)'
                            .'|router(*:502)'
                            .'|exception(?'
                                .'|(*:522)'
                                .'|\\.css(*:535)'
                            .')'
                        .')'
                        .'|(*:545)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'app_admin_categories_show', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [[['_route' => 'app_admin_categories_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        58 => [[['_route' => 'app_admin_categories_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        85 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\Admin\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        109 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        126 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        145 => [[['_route' => 'app_admin_produits_index', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::index'], [], ['GET' => 0], null, true, false, null]],
        165 => [[['_route' => 'app_admin_produits_show', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        186 => [[['_route' => 'app_admin_produits_edit', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        202 => [[['_route' => 'app_admin_produits_delete', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::index'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove_all'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'app_cart_removequantite', '_controller' => 'App\\Controller\\CartController::removequantite'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        339 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        355 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        383 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        422 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        442 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        488 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        502 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        522 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        535 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        545 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
