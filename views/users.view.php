<?php include('views/partials/head.view.php')?>
	<header>
		<h1>Users</h1>
	</header>
	<ul>
		<?php foreach($users as $user) : ?>
			<li>
				<?= $user->name ?>
			</li>
		<?php endforeach ?>
	</ul>
	<form method="POST" action="/users">
		<input type="text" name="name">
		<button type="submit">Submit</button>
	</form>
<?php include('views/partials/footer.view.php')?>