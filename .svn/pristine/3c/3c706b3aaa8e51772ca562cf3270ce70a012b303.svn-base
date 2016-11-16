<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__ . /TomBlogs/Css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__ . /TomBlogs/Css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__ . /TomBlogs/Css/style.css" />
        <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/jquery.js"></script>
        <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/jquery.sorted.js"></script>
        <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/bootstrap.js"></script>
        <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/ckform.js"></script>
        <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/Js/common.js"></script>
        <script type="text/javascript" src="__PUBLIC__ . /TomBlogs/js/showdate.js"></script>
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
    </head>
    <form action="" method="post">
       
        <table class="table table-bordered table-hover definewidth m10" style="margin-left:3%;margin-top:2%;">
            <tr>
                <td width="10%" class="tableleft">公告标题</td>
                <td><input type="text" name="bigTypeName" value="{$aa[0]['公告标题']}" style="height: 41px; width: 546px"/></td>
            </tr>
            <tr>
                <td class="tableleft">内容</td>
                <td><input type="text" name="typeIntroduce" value="{$aa[0]['内容']}" style="height: 93px; width: 546px"/></td>
            </tr> 
            <tr>
                <td class="tableleft">发布时间</td>
                <td style="height: 46px; "> <div style="margin:0 auto;">
                        <input type="text" id="time1" name="published" value="{$aa[0]['发布时间']}" onClick="return Calendar('time1');" class="text_time"/>
                    </div> 
                </td>
            </tr> 
            <tr>
                <td class="tableleft">失效时间</td>
                <td> <div style="margin:0 auto;">
                        <input type="text" id="time2" name="fatime" value="{$aa[0]['失效时间']}" onClick="return Calendar('time2');" class="text_time"/>
                    </div> 
                </td>
            </tr>  
            <tr>
                <td class="tableleft"></td>
                <td>
                    <button style="margin-left:180px;" type="submit" class="btn btn-primary" type="button">确认修改</button>&nbsp;&nbsp;<a href="{:U('admin/boss/afficheQuery')}"><button type="button" class="btn btn-success" name="backid" id="backid" onclick=javascrtpt:jump();>返回列表</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<script>
    function jump() {
        window.location.href = "placardQuery";
    }
</script>