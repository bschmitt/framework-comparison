<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Event</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

		body {
			margin: 0;
			font-family: 'Lato', sans-serif;
			text-align: center;
			color: #999;
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

		input {
			padding: 3px;
		}

		textarea {
			width: 400px
		}

	</style>
</head>
<body>
<div class="welcome">

	{{ Form::model($event) }}

	<div>
		{{ Form::label('Title:') }}
		{{ Form::text('title') }}
	</div>

	<div>
		{{ Form::label('Description:') }}
		{{ Form::text('description') }}
	</div>

	<div>
		{{ Form::label('Date:') }}
		{{ Form::text('date') }}
	</div>

	<div>
		{{ Form::label('Time:') }}
		{{ Form::text('time') }}
	</div>

	<div>
		{{ Form::label('Location:') }}
		{{ Form::text('location') }}
	</div>

	<div>
		{{ Form::submit('Add') }}

	</div>

	 {{ Form::close() }}

</div>
</body>
</html>
