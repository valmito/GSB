<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/comptable' => [[['_route' => 'comptable', '_controller' => 'App\\Controller\\ComptableController::index'], null, null, null, false, false, null]],
        '/comptable/seConnecter' => [[['_route' => 'comptable/seConnecter', '_controller' => 'App\\Controller\\ComptableController::creerFormConnexionAction'], null, null, null, false, false, null]],
        '/fiche/frais' => [[['_route' => 'fiche_frais', '_controller' => 'App\\Controller\\FicheFraisController::index'], null, null, null, false, false, null]],
        '/fiche/frais/creerFiche' => [[['_route' => 'creerFicheFrais', '_controller' => 'App\\Controller\\FicheFraisController::creerFiche'], null, null, null, false, false, null]],
        '/fiche/frais/valider' => [[['_route' => 'validerFicheFrais', '_controller' => 'App\\Controller\\FicheFraisController::validerFiche'], null, null, null, false, false, null]],
        '/fiche/frais/afficher' => [[['_route' => 'afficherFicheFrais', '_controller' => 'App\\Controller\\FicheFraisController::AfficherFicheFrais'], null, null, null, false, false, null]],
        '/article/update/register' => [[['_route' => 'r_register', '_controller' => 'App\\Controller\\FicheFraisController::register'], null, null, null, false, false, null]],
        '/article/afficher' => [[['_route' => 'affichage_final', '_controller' => 'App\\Controller\\FicheFraisController::indexAction'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/Accueil' => [[['_route' => 'Accueil', '_controller' => 'App\\Controller\\UserController::seConnecter'], null, null, null, false, false, null]],
        '/visiteur' => [[['_route' => 'visiteur', '_controller' => 'App\\Controller\\VisiteurController::index'], null, null, null, false, false, null]],
        '/visiteur/seConnecter' => [[['_route' => 'visiteur_connect', '_controller' => 'App\\Controller\\VisiteurController::connectionVisiteur'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\comptableController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/fiche/frais/(?'
                    .'|update/([^/]++)(*:200)'
                    .'|verif/supprimer/([^/]++)(*:232)'
                .')'
                .'|/article/supprimer/([^/]++)(*:268)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'upd_route', '_controller' => 'App\\Controller\\FicheFraisController::updateAction'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'verif_del_art', '_controller' => 'App\\Controller\\FicheFraisController::deleteVerif'], ['id'], null, null, false, true, null]],
        268 => [
            [['_route' => 'del_art', '_controller' => 'App\\Controller\\FicheFraisController::deleterArticle'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
