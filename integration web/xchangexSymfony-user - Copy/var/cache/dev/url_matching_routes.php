<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/echange' => [[['_route' => 'app_echange_index', '_controller' => 'App\\Controller\\EchangeController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/echange/front' => [[['_route' => 'app_echange_front', '_controller' => 'App\\Controller\\EchangeController::front'], null, ['GET' => 0], null, false, false, null]],
        '/echange/newF' => [[['_route' => 'app_echange_newF', '_controller' => 'App\\Controller\\EchangeController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/echange/new' => [[['_route' => 'app_echange_new', '_controller' => 'App\\Controller\\EchangeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/AllEvenement' => [[['_route' => 'list', '_controller' => 'App\\Controller\\EvenementController::getStudents'], null, null, null, false, false, null]],
        '/evenement/Addjson' => [[['_route' => 'Addjson', '_controller' => 'App\\Controller\\EvenementController::addStudentJSON'], null, null, null, false, false, null]],
        '/evenement/statistique' => [[['_route' => 'app_statist', '_controller' => 'App\\Controller\\EvenementController::statistiue'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/evenement/front' => [[['_route' => 'app_evenement_indexFront', '_controller' => 'App\\Controller\\EvenementController::front'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/home' => [[['_route' => 'app_evenement_home', '_controller' => 'App\\Controller\\EvenementController::home'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forgot-password-sms' => [[['_route' => 'forgot_password_sms', '_controller' => 'App\\Controller\\ForgotPasswordController::index'], null, null, null, false, false, null]],
        '/oubli-mot-de-passe' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ForgotPasswordController::motdepasseoublie'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/frontindex' => [[['_route' => 'app_frontindex', '_controller' => 'App\\Controller\\FrontindexController::index'], null, null, null, false, false, null]],
        '/client/banned' => [[['_route' => 'app_clientBanned', '_controller' => 'App\\Controller\\HomeController::client_banned'], null, null, null, false, false, null]],
        '/coach/banned' => [[['_route' => 'app_coachBanned', '_controller' => 'App\\Controller\\HomeController::coach_banned'], null, null, null, false, false, null]],
        '/livraison/randomnumber' => [[['_route' => 'random_number', '_controller' => 'App\\Controller\\LivraisonController::randomNumber'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'app_livraison_index', '_controller' => 'App\\Controller\\LivraisonController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/livraison/home' => [[['_route' => 'app_livraison_home', '_controller' => 'App\\Controller\\LivraisonController::home'], null, ['GET' => 0], null, false, false, null]],
        '/livraison/new' => [[['_route' => 'app_livraison_new', '_controller' => 'App\\Controller\\LivraisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livreur' => [[['_route' => 'app_livreur_index', '_controller' => 'App\\Controller\\LivreurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livreur/new' => [[['_route' => 'app_livreur_new', '_controller' => 'App\\Controller\\LivreurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participation' => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/newback' => [[['_route' => 'app_participation_newback', '_controller' => 'App\\Controller\\ParticipationController::newback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/pdf' => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\ProduitController::generatePdfAction'], null, ['GET' => 0], null, false, false, null]],
        '/produit/roue' => [[['_route' => 'app_produit_roue', '_controller' => 'App\\Controller\\ProduitController::roue'], null, ['GET' => 0], null, false, false, null]],
        '/produit/front' => [[['_route' => 'app_produit_front', '_controller' => 'App\\Controller\\ProduitController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/produit/sort' => [[['_route' => 'app_produit_sort', '_controller' => 'App\\Controller\\ProduitController::indexS'], null, ['GET' => 0], null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/qr-codes' => [[['_route' => 'app_qr_codes', '_controller' => 'App\\Controller\\QrCodeGeneratorLController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/update_note' => [[['_route' => 'update_note', '_controller' => 'App\\Controller\\ReclamationController::updateNote'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reclamation/front' => [[['_route' => 'app_reclamation_front', '_controller' => 'App\\Controller\\ReclamationController::front'], null, ['GET' => 0], null, false, false, null]],
        '/reduction' => [[['_route' => 'app_reduction_index', '_controller' => 'App\\Controller\\ReductionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reduction/new' => [[['_route' => 'app_reduction_new', '_controller' => 'App\\Controller\\ReductionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service/pdf' => [[['_route' => 'generator_service3', '_controller' => 'App\\Controller\\ServiceController::generatePdfAction'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/back' => [[['_route' => 'app_service_indexback', '_controller' => 'App\\Controller\\ServiceController::back'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/admin/fonc' => [[['_route' => 'fonc', '_controller' => 'App\\Controller\\UserController::fonc'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/users/filter' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], null, null, null, false, false, null]],
        '/admin/dashboard/users' => [[['_route' => 'app_users_admin', '_controller' => 'App\\Controller\\UserController::dash'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:32)'
                        .'|/edit(*:44)'
                        .'|(*:51)'
                    .')'
                    .'|o(?'
                        .'|mmentaire/([^/]++)(?'
                            .'|(*:84)'
                            .'|/edit(*:96)'
                            .'|(*:103)'
                        .')'
                        .'|ach/homeCoach/([^/]++)(*:134)'
                    .')'
                    .'|lient/home/([^/]++)(*:162)'
                .')'
                .'|/e(?'
                    .'|change/(?'
                        .'|([^/]++)(?'
                            .'|(*:197)'
                            .'|/edit(?'
                                .'|F(*:214)'
                                .'|(*:222)'
                            .')'
                            .'|(*:231)'
                        .')'
                        .'|([^/]+)F(*:248)'
                    .')'
                    .'|venement/(?'
                        .'|updateEventJSON/([^/]++)(*:293)'
                        .'|deleteEventJSON/([^/]++)(*:325)'
                        .'|show_in_map/([^/]++)(*:353)'
                        .'|([^/]++)(?'
                            .'|(*:372)'
                            .'|/edit(*:385)'
                            .'|(*:393)'
                        .')'
                    .')'
                .')'
                .'|/livr(?'
                    .'|aison/(?'
                        .'|show_in_map/([^/]++)(*:441)'
                        .'|([^/]++)(?'
                            .'|(*:460)'
                            .'|/edit(*:473)'
                            .'|(*:481)'
                        .')'
                    .')'
                    .'|eur/(?'
                        .'|([^/]++)(?'
                            .'|(*:509)'
                            .'|/edit(*:522)'
                            .'|(*:530)'
                        .')'
                        .'|show_in_map/([^/]++)(*:559)'
                    .')'
                .')'
                .'|/p(?'
                    .'|articipation(?'
                        .'|([^/]++)/new(*:601)'
                        .'|/([^/]++)(?'
                            .'|(*:621)'
                            .'|/edit(*:634)'
                            .'|(*:642)'
                        .')'
                    .')'
                    .'|roduit/(?'
                        .'|([^/]++)(*:670)'
                        .'|front/detail(?'
                            .'|/([^/]++)(*:702)'
                            .'|l/([^/]++)(*:720)'
                        .')'
                        .'|([^/]++)(?'
                            .'|/edit(*:745)'
                            .'|(*:753)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation(?'
                        .'|([^/]++)/new(?'
                            .'|(*:797)'
                            .'|F(*:806)'
                        .')'
                        .'|/(?'
                            .'|([^/]++)(*:827)'
                            .'|([^/]+)F(*:843)'
                            .'|([^/]++)/edit(*:864)'
                            .'|sms(*:875)'
                            .'|([^/]++)/editF(*:897)'
                            .'|([^/]+)F(*:913)'
                            .'|([^/]++)(*:929)'
                        .')'
                    .')'
                    .'|duction/(?'
                        .'|mailing/([^/]++)(*:966)'
                        .'|([^/]++)(?'
                            .'|(*:985)'
                            .'|/edit(*:998)'
                            .'|(*:1006)'
                        .')'
                    .')'
                .')'
                .'|/service/(?'
                    .'|show_in_map/([^/]++)(*:1050)'
                    .'|([^/]++)(?'
                        .'|(*:1070)'
                        .'|/edit(*:1084)'
                        .'|(*:1093)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|disabled/([^/]++)(*:1131)'
                    .'|users/update/([^/]++)(*:1161)'
                    .'|([^/]++)(?'
                        .'|(*:1181)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1223)'
                    .'|wdt/([^/]++)(*:1244)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1291)'
                            .'|router(*:1306)'
                            .'|exception(?'
                                .'|(*:1327)'
                                .'|\\.css(*:1341)'
                            .')'
                        .')'
                        .'|(*:1352)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        84 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idCommentaire'], ['GET' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['idCommentaire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        103 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['idCommentaire'], ['POST' => 0], null, false, true, null]],
        134 => [[['_route' => 'app_home_coach', '_controller' => 'App\\Controller\\HomeController::indexCoach'], ['id'], null, null, false, true, null]],
        162 => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], ['id'], null, null, false, true, null]],
        197 => [
            [['_route' => 'app_echange_show', '_controller' => 'App\\Controller\\EchangeController::show'], ['idEchange'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_echange_showF', '_controller' => 'App\\Controller\\EchangeController::showFront'], ['idEchange'], ['GET' => 0], null, false, true, null],
        ],
        214 => [[['_route' => 'app_echange_editF', '_controller' => 'App\\Controller\\EchangeController::editFront'], ['idEchange'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        222 => [[['_route' => 'app_echange_edit', '_controller' => 'App\\Controller\\EchangeController::edit'], ['idEchange'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        231 => [[['_route' => 'app_echange_delete', '_controller' => 'App\\Controller\\EchangeController::delete'], ['idEchange'], ['POST' => 0], null, false, true, null]],
        248 => [[['_route' => 'app_echange_deleteF', '_controller' => 'App\\Controller\\EchangeController::deleteFront'], ['idEchange'], ['POST' => 0], null, false, false, null]],
        293 => [[['_route' => 'updateEventJSON', '_controller' => 'App\\Controller\\EvenementController::updateEventJSON'], ['idev'], null, null, false, true, null]],
        325 => [[['_route' => 'deleteEventJSON', '_controller' => 'App\\Controller\\EvenementController::deleteEventJSON'], ['idev'], null, null, false, true, null]],
        353 => [[['_route' => 'app_evenement_map', '_controller' => 'App\\Controller\\EvenementController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        372 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        385 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_livraison_map', '_controller' => 'App\\Controller\\LivraisonController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        460 => [[['_route' => 'app_livraison_show', '_controller' => 'App\\Controller\\LivraisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'app_livraison_edit', '_controller' => 'App\\Controller\\LivraisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        481 => [[['_route' => 'app_livraison_delete', '_controller' => 'App\\Controller\\LivraisonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        509 => [[['_route' => 'app_livreur_show', '_controller' => 'App\\Controller\\LivreurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_livreur_edit', '_controller' => 'App\\Controller\\LivreurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        530 => [[['_route' => 'app_livreur_delete', '_controller' => 'App\\Controller\\LivreurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        559 => [[['_route' => 'app_Livreur_map', '_controller' => 'App\\Controller\\LivreurController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        601 => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        621 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        634 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        642 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        670 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        702 => [[['_route' => 'app_produit_showF', '_controller' => 'App\\Controller\\ProduitController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        720 => [[['_route' => 'app_produit_red', '_controller' => 'App\\Controller\\ProduitController::showred'], ['id'], ['GET' => 0], null, false, true, null]],
        745 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        753 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        797 => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], ['idEchan'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        806 => [[['_route' => 'app_reclamation_newF', '_controller' => 'App\\Controller\\ReclamationController::newF'], ['idEchan'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        827 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        843 => [[['_route' => 'app_reclamation_showF', '_controller' => 'App\\Controller\\ReclamationController::showF'], ['idReclamation'], ['GET' => 0], null, false, false, null]],
        864 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        875 => [[['_route' => 'app_reclamation_sms', '_controller' => 'App\\Controller\\ReclamationController::sms'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        897 => [[['_route' => 'app_reclamation_editF', '_controller' => 'App\\Controller\\ReclamationController::editf'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        913 => [[['_route' => 'app_reclamation_deleteF', '_controller' => 'App\\Controller\\ReclamationController::deleteF'], ['idReclamation'], ['POST' => 0], null, false, false, null]],
        929 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idReclamation'], ['POST' => 0], null, false, true, null]],
        966 => [[['_route' => 'app_reduction_mailing', '_controller' => 'App\\Controller\\ReductionController::mailing'], ['id'], null, null, false, true, null]],
        985 => [[['_route' => 'app_reduction_show', '_controller' => 'App\\Controller\\ReductionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        998 => [[['_route' => 'app_reduction_edit', '_controller' => 'App\\Controller\\ReductionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1006 => [[['_route' => 'app_reduction_delete', '_controller' => 'App\\Controller\\ReductionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1050 => [[['_route' => 'app_service_map', '_controller' => 'App\\Controller\\ServiceController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        1070 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1084 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1093 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1131 => [[['_route' => 'app_user_banned', '_controller' => 'App\\Controller\\UserController::banned_user'], ['id'], null, null, false, true, null]],
        1161 => [[['_route' => 'app_users_update', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1181 => [
            [['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_user_afficher', '_controller' => 'App\\Controller\\UserController::afficher'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1223 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1244 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1291 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1306 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1327 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1341 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1352 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
