<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__ . /TomBlogs/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__ . /TomBlogs/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__ . /TomBlogs/Css/style.css" />
    <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/jquery2.js"></script>
    <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/bootstrap.js"></script>
    <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/ckform.js"></script>
    <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/common.js"></script>

    <style type="text/css">
        body {font-size: 20px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="#" method="get">
     <font color="#777777"><strong>学生姓名：</strong></font>
    <input type="text" name="menuname" id="menuname"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">查询</button> 
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>学生昵称</th>
        <th>真实姓名</th>
        <th>Email</th>
        
       
        <th>创建时间</th>
		 <th>冻结账户</th>

     </tr>
    </thead>
        <tr>
                <td><a href="studentdetail.html">小强</a></td>
                <td>何方强</td>
                <td>154987@163.com</td>
                
                <td>2016-4-4 15:45</td>
				<td><button type="submit">注销</button></td>
          
        </tr>
           
       
       </table>

</body>
</html>