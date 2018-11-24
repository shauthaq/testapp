<!DOCTYPE html>
<html>
<head>
	<title>Hello/Index</title>
	<style>
	body{font-size: 16px; color:#999;}
	h1{font-size: 100pt; text-align: right; color:#f6f6f6;
		margin:-50px 0px -100px 0px;}
	</style>
</head>
<body>
	<h1>Index</h1>
	<p>{{$msg}}</p>
	<form action="/hello" method="post" accept-charset="utf-8">
	{{csrf_field()}}		
	<input type="text" name="name" value="@isset($name){{$name}}@endisset">
	{{ Form::text('username') }}
	<input type="submit">
	</form>
</body>
</html>