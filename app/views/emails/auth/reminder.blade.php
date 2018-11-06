<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			To reset your password, complete this form: {{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
  <h1>Password Reset</h1>
    To reset your password, complete this form:
    {{ URL::route("user/reset", compact("token")) }}
  </body>
</html>
 --}}