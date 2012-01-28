<!DOCTYPE html>
<html lang="<?= $this->response->language ?>">
<head>
	<meta charset="<?= $this->response->charset ?>">
	<title>Sprout Application</title>
	<link rel="stylesheet" href="/styles/application.css">
	<? $this->stylesheets() ?>
	<? $this->scripts() ?>
</head>
<body>
	<? echo $this->content; ?>
</body>
</html>
