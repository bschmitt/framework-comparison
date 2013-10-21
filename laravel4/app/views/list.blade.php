<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Events</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

		body {
			margin: 0;
			font-family: 'Lato', sans-serif;
			text-align: center;
			color: #999;
		}

		.welcome {
			width: 500px;
			height: 300px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -250px;
			margin-top: -150px;
		}

		table td {
			padding: 3px;
		}

		a, a:visited {
			color: #FF5949;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		ul li {
			display: inline;
			margin: 0 1.2em;
		}

		p {
			margin: 2em 0;
			color: #555;
		}

		.button {
			padding:3px;
		}

	</style>
</head>
<body>
<div class="welcome">

	<a href="/add" class="button">Add</a>

	<table>

		<?php foreach ($events as $event): ?>

			<tr>
				<td> {{ $event->title }} </td>
				<td><?php echo $event->description ?></td>
				<td> {{ date("d.m.Y",strtotime($event->date)) }} </td>
				<td> {{ date("H:i:s",strtotime($event->time)) }} </td>
				<td><?php echo $event->location ?></td>
			</tr>

		<?php endforeach; ?>

	</table>

</div>
</body>
</html>
