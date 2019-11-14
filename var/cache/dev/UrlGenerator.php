<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'comptable' => [[], ['_controller' => 'App\\Controller\\ComptableController::index'], [], [['text', '/comptable']], [], []],
    'comptable/seConnecter' => [[], ['_controller' => 'App\\Controller\\ComptableController::creerFormConnexionAction'], [], [['text', '/comptable/seConnecter']], [], []],
    'fiche_frais' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::index'], [], [['text', '/fiche/frais']], [], []],
    'creerFicheFrais' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::creerFiche'], [], [['text', '/fiche/frais/creerFiche']], [], []],
    'validerFicheFrais' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::validerFiche'], [], [['text', '/fiche/frais/valider']], [], []],
    'afficherFicheFrais' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::AfficherFicheFrais'], [], [['text', '/fiche/frais/afficher']], [], []],
    'upd_route' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::updateAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/fiche/frais/update']], [], []],
    'r_register' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::register'], [], [['text', '/article/update/register']], [], []],
    'verif_del_art' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::deleteVerif'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/fiche/frais/verif/supprimer']], [], []],
    'del_art' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::deleterArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/supprimer']], [], []],
    'affichage_final' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::indexAction'], [], [['text', '/article/afficher']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], []],
    'Accueil' => [[], ['_controller' => 'App\\Controller\\UserController::seConnecter'], [], [['text', '/Accueil']], [], []],
    'visiteur' => [[], ['_controller' => 'App\\Controller\\VisiteurController::index'], [], [['text', '/visiteur']], [], []],
    'visiteur_connect' => [[], ['_controller' => 'App\\Controller\\VisiteurController::connectionVisiteur'], [], [['text', '/visiteur/seConnecter']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\comptableController::index'], [], [['text', '/']], [], []],
];
