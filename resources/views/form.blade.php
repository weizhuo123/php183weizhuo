<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>POST</h1>
	<hr>
	<form action="/test" method="post">
	 	
	 	{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>

	<h1>PUT</h1>
	<hr>
	<form action="/myput" method="post">
	 	{{ method_field('PUT') }}
	 	{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>
	<hr>
	<h1>DELETE</h1>
	<form action="/mydelete" method="post">
	 	{{ method_field('DELETE') }}
	 	{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>
</body>
</html>