<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ((isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '') ?></title>
	<link rel="stylesheet" href="./styles/style.css" type="text/css">
	<link rel="shortcut icon" href="pics/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
	<?php if (file_exists('./styles/' . $keres['fajl'] . '.css')) { ?>
		<link rel="stylesheet" href="./styles/<?= $keres['fajl'] ?>.css" type="text/css"><?php } ?>
</head>

<body>
	<div id="content" class="col-md-9 wrapper">
		<header class="container-fluid">
			<header>
				<img src="pics/logo.png" alt="csacskamacska logo">
			</header>
			<div class="container-fluid">
				<aside id="nav">
					<nav class="d-flex justify-content-end">
						<ul class="nav flex-row">
							<?php foreach ($oldalak as $url => $oldal) { ?>
								<li<?= (($oldal == $keres) ? ' class="active"' : '') ?> class="nav-item">
									<a id="nav-link" class="nav-link" href="index.php<?= ($url == '/') ? '' : ('?oldal=' . $url) ?>">
										<?= $oldal['szoveg'] ?>
									</a>
									</li>
								<?php } ?>
						</ul>
					</nav>
				</aside>
				<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
			</div>
		</header>
	</div>
	<footer class="container-fluid">
		<?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?>
	<?php } ?>
	&nbsp;
	<?php if (isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>

</html>