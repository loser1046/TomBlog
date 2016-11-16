<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>后台管理登录系统</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__ . /TomBlogs/css/styles.css">

</head>
<body>


<div class="wrapper">

	<div class="container">
		<h1>TomBlogs 后台管理</h1>
                <form class="form" action="{:U('admin/index/console')}" method="post">
			<input name="username" type="text" placeholder="Username">
			<input name="password" type="password" placeholder="Password"><br>
			<button type="submit" id="login-button" onclick="window.location.href='index.html';"><strong>登陆</strong></button>
			
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		
	</ul>
	
</div>



</body>
</html>