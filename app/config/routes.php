<?php
/**
 * Copyright (c) <YEAR>, <YOU OR YOUR ORGANIZATION>
 * All rights reserved.
*/

use \Sprout\Router;

/**
 * Configuration file for all routing patterns in your application
 *
 * Routes are defined with a pattern at minimum and in most cases, and array of route component
 * definitions. Route patterns are slash-delimited strings with components tokenized with a
 * preceding semicolon (:) character. Tokenized route components should be defined with a regular
 * expression in the second parameter array. If no component definition is provided, a very generic
 * default one will be used.
 *
 * Tokenized route components and their values are added to the $request->params array. If
 * conflicting query string parameters or formatted key:value URI parameters exist, tokenized route
 * components will take precedence.
 *
 * Routes are prioritized in the order they are defined. Connect your routes in order of specificity
 * with the most generic default route last.
 *
 * The one exception to the priority rule is the home route ('/'). Because this route contains only
 * static segments and is likely to be a high traffic route, it is a good idea to make it the first
 * connection so that it is always the first match attempted. Routes with only static segments skip
 * component matching via regular expressions altogether.
 *
 * The basic format is:
 * 	Router:connect($pattern, $component_definitions, $name);
 *
 * where:
 *	$pattern is the URL pattern to match - something like '/home' or '/archives/:year/:month'
 *	$components (optional) is a associative array or hash defining the controller and action to be
 *		used to load the route along with any custom components defined in the $url.
 *	$name (optional) is a human-readable, underscored, name by which the route can be referenced
 *
 *
 * EXAMPLE ROUTE DEFINITIONS:
 *
 *	Router::connect('/login', array(
 *		'controller' => 'auth',
 *		'action' => 'login'
 *	));
 *
 *	Router::connect('/logout', array(
 *		'controller' => 'auth',
 *		'action' => 'logout'
 *	));
 *
 * // Define URL components with regular expressions
 *
 *	Router::connect('/profile/:username', array(
 *		'controller' => 'users',
 *		'action' => 'view',
 *		'username' => '([\w]{2,12})' // 2 to 12 letters, numbers, and underscores
 *	));
 *
 *	Router::connect('/store/products/:sku:format', array(
 *		'controller' => 'products',
 *		'action' => 'find_by_sku',
 *		'sku' => '([a-zA-Z]{3}\-[\d]{12})'
 *	));
 *
 * For regular expression help, see:
 *  - http://www.php.net/manual/en/reference.pcre.pattern.syntax.php
 *  - http://www.regular-expressions.info/reference.html
 *
 *
 * DEFAULT COMPONENTS:
 *
 * The framework will use generic patterns to match :controller, :action, :id, and :format. If no
 * regular expression pattern is specified, the default pattern will be used. The default pattern
 * matches any number of alphanumeric characters, @, $, (, ), +, -, =, ., or &.
 *
 * Unless set here, 'front_controller' will be empty. This can be set to index.php, default.php, or
 * otherwise for servers where mod_rewrite is not available.
 * For example:
 *	Router::front_controller('default.php');
 *
 * Unless set here, 'pages' will be the default controller.
 * For example:
 *	Router::default_controller('store');
 *
 * Unless set here, 'index' will be the default action.
 * For example:
 *	Router::default_action('default');
 *
 * Unless set here, 'html' will be the default format.
 * For example:
 *	Router::default_format('json');
 *
 *
 * DEFAULT ROUTES:
 *
 * If no routes defined here match a request, Sprout will attempt to match the following patterns:
 *	/:controller:format
 *	/:controller/:action:format
 *	/:controller/:action/:id:format
 */

// NOTE:
// Route matches will be attempted in the order they are defined here. More complex routes should be
// defined toward the bottom - simpler routes toward the top.

// The homepage of your application:
Router::connect('/', array(
	'action' => 'welcome'
));
