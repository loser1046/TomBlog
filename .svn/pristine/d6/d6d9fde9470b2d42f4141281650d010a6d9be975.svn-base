<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/TomBlogs/Public . /TomBlogs/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/TomBlogs/Public . /TomBlogs/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/TomBlogs/Public . /TomBlogs/Css/style.css" />
    <script type="text/javascript" src="/TomBlogs/Public . /TomBlogs/Js/jquery.js"></script>
    <script type="text/javascript" src="/TomBlogs/Public . /TomBlogs/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="/TomBlogs/Public . /TomBlogs/Js/bootstrap.js"></script>
    <script type="text/javascript" src="/TomBlogs/Public . /TomBlogs/Js/ckform.js"></script>
    <script type="text/javascript" src="/TomBlogs/Public . /TomBlogs/Js/common.js"></script>
    <script type="text/javascript" src="/TomBlogs/Public . /TomBlogs/js/showdate.js"></script>
    <script src="http://www.w3school.com.cn/jquery/jquery-1.11.1.min.js"></script>
    <style type="text/css">
        body {font-size: 20px;
             padding-bottom: 40px;
             background-color:#e9e7ef;
             font-size:17px;
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
    <!--<?php echo U('admin/boss/afficheAdd');?>-->
</head>
<form action="" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-hover definewidth m10" style="margin-left:3%;margin-top:2%;">
    <tr>
        <td width="10%" class="tableleft">公告标题</td>
        <td><input type="text" name="bigTypeName" style="height: 41px; width: 546px"/></td>
     
    </tr>
    <tr>
        <td class="tableleft">内容</td>
        <td><input type="text" name="typeIntroduce" style="height: 93px; width: 546px"/></td>
    </tr> 
    <tr>
        <td class="tableleft">发布时间</td>
        <td style="height: 46px; "> <div style="margin:0 auto;">
	             <input name="published" type="text" id="time1" value="选择时间" onClick="return Calendar('time1');" class="text_time"/>
             </div> 
        </td>
    </tr> 
    <tr>
        <td class="tableleft">失效时间</td>
        <td> <div style="margin:0 auto;">
	             <input name="fatime" type="text" id="time2" value="选择时间" onClick="return Calendar('time2');" class="text_time"/>
             </div> 
        </td>
    </tr>  
    <tr>
    <tr>
        <td class="tableleft">缩略图</td>
        <td> <div style="margin:0 auto;">
	             <input name="thumb" type="file" />
             </div> 
        </td>
    </tr>  
    <tr>
        <td class="tableleft"></td>
        <td>
            <button style="margin-left:180px;"type="submit" class="btn btn-primary">发布</button>&nbsp;&nbsp;<a href="<?php echo U('admin/boss/afficheQuery');?>"><button type="button" >返回列表</button></a>
        </td>
    </tr>
</table>
</form>
</body>
</html>
<script>
function jump(){
 window.location.href="placardQuery.html";
}
</script>