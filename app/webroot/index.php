<?php
/**
 * Copyright (c) <YEAR>, <YOU OR YOUR ORGANIZATION>
 * All rights reserved.
*/

// This shoud be the path to your application config file. Your application should be located
// somewhere inaccessible by the public.
require_once realpath('../config/application.php');

// This dispatches the current request to the Sprout PHP framework.
\Sprout\Dispatcher::dispatch();
