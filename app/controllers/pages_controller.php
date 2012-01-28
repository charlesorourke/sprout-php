<?php
/**
 * Copyright (c) <YEAR>, <YOU OR YOUR ORGANIZATION>
 * All rights reserved.
*/

class PagesController extends ApplicationController {

	/**
	 * The welcome page
	 *
	 * This action is the default homepage for new Sprout PHP applications. It should be replaced or
	 * removed entirely.
	 */
	public function welcome() {
		$config = \Sprout\Application::config();

		return compact('config');
	}
}
