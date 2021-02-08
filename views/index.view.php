<!DOCTYPE html>
<html>
<head>
	<title>
		Practice Php
	</title>
	<style type="text/css">
		header {
			background-color: gray;
			text-align: center;
			padding: 5px;
		} 
	</style>
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="/views/about.view.php">About Us</a>
			</li>
			<li>
				<a href="/views/contact.view.php">Contact Us</a>
			</li>
		</ul>
	</nav>
	<header>
		<h1>Tasks for the day</h1>
	</header>
	<ul>
		<?php foreach($tasks as $task) : ?>
			<li>
				<?php if($task->completed) : ?>
					<strike>
						<?= $task->description ?>
					</strike>
				<?php else : ?>
					<?= $task->description ?>
				<?php endif ?>
			</li>
		<?php endforeach?>
	</ul>
</body>
</html>