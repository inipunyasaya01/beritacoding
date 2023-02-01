<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<h1>Tidak ada artikel</h1>
	<ul>
		<?php foreach ($articles as $article) : ?>
			<li><?= $article['title'] ?></li>
            <p><?= $article['content'] ?></li>
		<?php endforeach ?>
	</ul>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>