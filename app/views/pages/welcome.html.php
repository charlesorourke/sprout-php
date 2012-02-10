<h1>Welcome</h1>

<p>Congratulations! You’re up and running with Sprout PHP.</p>

<h3>About this page</h3>

<ul>
	<li><strong>Controller</strong>: PagesController</li>
	<li><strong>Action</strong>: PagesController::welcome()</li>
	<li><strong>View template</strong>: views/pages/welcome.html.php</li>
	<li><strong>Layout template</strong>: views/layouts/application.html.php</li>
</ul>

<h3>Your application configuration</h3>

<ul>
	<? foreach ($config as $setting => $value): ?>
		<li><strong><?= \Sprout\Inflector::humanize($setting) ?></strong>: <?= $value ?></li>
	<? endforeach ?>
</ul>
