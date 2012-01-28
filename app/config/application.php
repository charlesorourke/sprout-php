<?php
/**
 * Copyright (c) <YEAR>, <YOU OR YOUR ORGANIZATION>
 * All rights reserved.
*/

use \Sprout\Application;

// Bootstrap the Sprout PHP framework. By default, the Sprout PHP libraries, including are located
// at the same level as your app but Sprout PHP, your application, and your application's webroot
// can be stored anywhere on the disk. Just make sure that webroot is accessible by the web server.
// Wherever you store the framework, application, and webroot, make sure the the front controller
// (index.php in your app's webroot) has the correct path to your application's configuration (this
// file) and that the path to Sprout PHP's bootstrap file is correct on the following line.
require_once realpath('../../lib/sprout/bootstrap.php');


// Sprout can handle a variety of setups with minimal configuration. Sprout's Application::config
// allows you to override the default configuration and/or add your own configuration settings.
Application::config(array(
	// You can set up any number of custom configuration settings. For example, here we set the name
	// of our application for use throughout our app via Application::get('name').
	// 'name' => 'My Application',

	// Setting the environment is technically optional but it is good practice. By configuring
	// separate operation environments for your application, it can behave differently depending on
	// where it is being used. Environment configuration options override Application configuration
	// options if they exist in both places.
	//
	// In your development environment for example, you will likely use a different database
	// connection than in your production environment. You might also keep your webroot within the
	// application directory for better SCM management but in your production environment, you will
	// likely keep your application files separate from the publicly accesible webroot.
	//
	// You can also bootstrap debugging tools such as FirePHP or ChromePHP for your development
	// environment, testing suites for your test environment, and so on. You can set up as many
	// environments as necessary for your workflow.
	'environment' => 'development',

	// Another common configuration option is the location of the webroot. The Sprout default is to
	// keep it inside the application directory but in production or staging environments, it is a
	// good idea to keep your application code in a more secure location on the diek and the webroot
	// somewhere accessible to the web server.
	// 'webroot' => '/www/my_app'
));


// Load your application's routes. Sprout was built with support for some basic MVC functionality
// out of the box but you can set up custom routes to make your application's URLs more easily
// understood by humans as well as search engines.
require_once 'routes.php';


// Sprout correctly handles some of the more common irregular plurals (person to people, child to
// children, etc.) and uncountable words (fish, sheep, etc.) but you can extend the lists of words
// that are uncountable or have irregular plural forms in inflections.php.
require_once 'inflections.php';
