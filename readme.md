# Sprout PHP framework #

**SPROUT PHP IS IN THE BEGINNING STAGES OF DEVELOPMENT.**
_If you're looking for a fun development project, you're in luck. If you're looking for a robust platform to start building web applications with, you'll probably be better off using something more established._

## About Sprout PHP ##
The goal of this framework is for it to be fast, efficient, lightweight, full-featured, easily extensible, well documented and easy to learn and use.

The Sprout PHP project is inspired by frameworks like [Ruby on Rails](http://rubyonrails.org/) however, it is _not_ a direct port of Rails. Sprout PHP is being built from scratch using PHP 5.3 and wherever possible, other great open source projects such as [PHP ActiveRecord](http://www.phpactiverecord.org/).

Sprout PHP is opinionated software adhering to [convention over configuration](http://en.wikipedia.org/wiki/Convention_over_configuration "Wikipedia: Convention over configuration") with sensible defaults and [DRY](http://en.wikipedia.org/wiki/Don't_repeat_yourself "Wikipedia: Don't Repeat Yourself") coding principles. Though Sprout PHP is built with PHP, which doesn't really have strict guidelines for how to do anything, with Sprout PHP, there is a preferred way to do just about everything and established [coding standards](https://github.com/dmingos/sprout-php-framework/wiki/Standards).

## Features in development ##
* Built on PHP 5.3
* Fully namespaced with namespace-based autoloading
* Regular expression-based URL routing
* Built-in support for ajax requests of JSON and XML data, and bare template markup
* Active Record ORM with migration-based schema management
* Before and after callback methods for models and controllers
* Plain PHP templating engine for views
	- Alternate PHP syntax for control structures
	- Automatic escaping with support for PHP's short open tags
* Robust HTML helpers for building forms, etc.
* Support for (optional) automatic minifying of markup, style sheets, and javascripts
* Caching support for view markup and UI assets
* Authentication framework with support for custom authentication, OpenID, Basic HTTP, etc.
* RESTful API support
* Support for plugins/extensions
* Command-line utility for code generation and executing application tasks
* Application documentation generator
* Unit testing framework
* Default .htaccess and .gitignore

For more information on what's been done and what's coming, check out the [development roadmap](https://github.com/dmingos/sprout-php-framework/wiki/Roadmap).

## Getting started ##
To get Sprout PHP up and running on your computer:

**Step 1.** Clone a copy and update the submodules:

	$ git clone git://github.com/dmingos/sprout-php.git
	$ cd sprout-php
	$ git submodule init
	$ git submodule update

**Step 2.** Point a new virtual host or your webserver's webroot to `/path/to/sprout-php/app/webroot`.

**Step 3.** Open http://localhost/ in your favorite browser.
