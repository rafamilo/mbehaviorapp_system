<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Index', 'action' => 'index']);
    /** Blocks */
    $routes->connect('/blocos', ['prefix' => 'Admin', 'controller' => 'Blocks', 'action' => 'index']);
    $routes->connect('/blocos/add', ['prefix' => 'Admin', 'controller' => 'Blocks', 'action' => 'add']);
    $routes->connect('/blocos/view/*', ['prefix' => 'Admin', 'controller' => 'Blocks', 'action' => 'view']);
    $routes->connect('/blocos/edit/*', ['prefix' => 'Admin', 'controller' => 'Blocks', 'action' => 'edit']);
    $routes->connect('/blocos/delete/*', ['prefix' => 'Admin', 'controller' => 'Blocks', 'action' => 'delete']);
    /** Block invoices */
    $routes->connect('/bloco-contas', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'index']);
    $routes->connect('/bloco-contas/add', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'add']);
    $routes->connect('/bloco-contas/view/*', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'view']);
    $routes->connect('/bloco-contas/edit/*', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'edit']);
    $routes->connect('/bloco-contas/delete/*', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'delete']);
    /** Invoice Plans */
    $routes->connect('/plano-contas', ['prefix' => 'Admin', 'controller' => 'InvoicePlans', 'action' => 'index']);
    $routes->connect('/plano-contas/add', ['prefix' => 'Admin', 'controller' => 'InvoicePlans', 'action' => 'add']);
    $routes->connect('/plano-contas/view/*', ['prefix' => 'Admin', 'controller' => 'InvoicePlans', 'action' => 'view']);
    $routes->connect('/plano-contas/edit/*', ['prefix' => 'Admin', 'controller' => 'InvoicePlans', 'action' => 'edit']);
    $routes->connect('/plano-contas/delete/*', ['prefix' => 'Admin', 'controller' => 'InvoicePlans', 'action' => 'delete']);
    /** Entry Types */
    $routes->connect('/tipo-entrada', ['prefix' => 'Admin', 'controller' => 'EntryTypes', 'action' => 'index']);
    $routes->connect('/tipo-entrada/add', ['prefix' => 'Admin', 'controller' => 'EntryTypes', 'action' => 'add']);
    $routes->connect('/tipo-entrada/view/*', ['prefix' => 'Admin', 'controller' => 'EntryTypes', 'action' => 'view']);
    $routes->connect('/tipo-entrada/edit/*', ['prefix' => 'Admin', 'controller' => 'EntryTypes', 'action' => 'edit']);
    $routes->connect('/tipo-entrada/delete/*', ['prefix' => 'Admin', 'controller' => 'EntryTypes', 'action' => 'delete']);
    /** User Invoices */
    $routes->connect('/morador-contas', ['prefix' => 'Admin', 'controller' => 'UserInvoices', 'action' => 'index']);
    $routes->connect('/morador-contas/add', ['prefix' => 'Admin', 'controller' => 'UserInvoices', 'action' => 'add']);
    $routes->connect('/morador-contas/view/*', ['prefix' => 'Admin', 'controller' => 'UserInvoices', 'action' => 'view']);
    $routes->connect('/morador-contas/edit/*', ['prefix' => 'Admin', 'controller' => 'UserInvoices', 'action' => 'edit']);
    $routes->connect('/morador-contas/index/*', ['prefix' => 'Admin', 'controller' => 'UserInvoices', 'action' => 'delete']);
    /** Block Invoices */
    $routes->connect('/bloco-contas', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'index']);
    $routes->connect('/bloco-contas/add', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'add']);
    $routes->connect('/bloco-contas/view/*', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'view']);
    $routes->connect('/bloco-contas/edit/*', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'edit']);
    $routes->connect('/bloco-contas/index/*', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'delete']);
    /** Bills To Pay */
    $routes->connect('/contas-pagar', ['prefix' => 'Admin', 'controller' => 'BillsToPay', 'action' => 'index']);
    $routes->connect('/contas-pagar/add', ['prefix' => 'Admin', 'controller' => 'BillsToPay', 'action' => 'add']);
    $routes->connect('/contas-pagar/view/*', ['prefix' => 'Admin', 'controller' => 'BillsToPay', 'action' => 'view']);
    $routes->connect('/contas-pagar/edit/*', ['prefix' => 'Admin', 'controller' => 'BillsToPay', 'action' => 'edit']);
    $routes->connect('/contas-pagar/index/*', ['prefix' => 'Admin', 'controller' => 'BillsToPay', 'action' => 'delete']);
    /** Bills To Receive */
    $routes->connect('/contas-receber', ['prefix' => 'Admin', 'controller' => 'BillsToReceive', 'action' => 'index']);
    $routes->connect('/contas-receber/add', ['prefix' => 'Admin', 'controller' => 'BillsToReceive', 'action' => 'add']);
    $routes->connect('/contas-receber/view/*', ['prefix' => 'Admin', 'controller' => 'BillsToReceive', 'action' => 'view']);
    $routes->connect('/contas-receber/edit/*', ['prefix' => 'Admin', 'controller' => 'BillsToReceive', 'action' => 'edit']);
    $routes->connect('/contas-receber/index/*', ['prefix' => 'Admin', 'controller' => 'BillsToReceive', 'action' => 'delete']);
    // $routes->connect('/usuarios', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index']);
    // $routes->connect('/telefones', ['prefix' => 'Admin', 'controller' => 'UserPhones', 'action' => 'index']);
    // $routes->connect('/salao', ['prefix' => 'Admin', 'controller' => 'PartyHallSchedules', 'action' => 'index']);
    // $routes->connect('/bloco-contas', ['prefix' => 'Admin', 'controller' => 'BlockInvoices', 'action' => 'index']);
    // $routes->connect('/usuario-contas', ['prefix' => 'Admin', 'controller' => 'UserInvoices', 'action' => 'index']);
    $routes->connect('/apartamentos', ['prefix' => 'Admin', 'controller' => 'Apartments', 'action' => 'index']);
    $routes->connect('/apartamentos/add', ['prefix' => 'Admin', 'controller' => 'Apartments', 'action' => 'add']);
    $routes->connect('/apartamentos/view/*', ['prefix' => 'Admin', 'controller' => 'Apartments', 'action' => 'view']);
    $routes->connect('/apartamentos/edit/*', ['prefix' => 'Admin', 'controller' => 'Apartments', 'action' => 'edit']);
    $routes->connect('/apartamentos/delete/*', ['prefix' => 'Admin', 'controller' => 'Apartments', 'action' => 'delete']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */

    Router::prefix('admin', function ($routes) {
        $routes->fallbacks(DashedRoute::class);
    });
    
    $routes->setExtensions(['json', 'xml']);
    $routes->fallbacks(DashedRoute::class);
});
