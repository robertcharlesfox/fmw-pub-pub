<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Contact Form Submission from FileMaker Website - Public</h2>

		<div>
            <div>E-mail: {{ Input::get('email') }}</div>
            <div>Name: {{ Input::get('name') }}</div>
            <div>Phone: {{ Input::get('phone') }}</div>
            <div>Message: {{ Input::get('body') }}</div>
		</div>
	</body>
</html>
