<title>淘金宝QQ邮箱挂机群发器 V1.0</title>
<style>
p{
    text-align:center;
}
a{
    text-decoration: none;
    color:red;
}
</style>
<center><h1>淘金宝QQ邮箱挂机群发器</h1></center>
<form method="GET" action="send.php">
<table align="center">
<tr>
<td>请输入要开始发送的QQ号</td>
<td><input name="start" value="335638002" /></td>

</tr>

<tr>
<td>请输入起始发件邮箱代号：</td>
<td><input name="i" value="0" /></td>

</tr>

<tr>
<td>请输入起始发件密码代号：</td>

<td><input name="j" value="1" /></td>
</tr>

<tr>
<td>请输入要开始发送的标题：</td>
<td><input name="titles" value="淘金宝一路发网络。" /></td>
<td><input type="submit" value="开始群发" /></td>
</tr>
</table>
<center>
请输入要开始发送的内容：<br/>
<textarea name="texts" cols=100 rows=30>这里请输入内容，支持html代码！</textarea>

</center>
</form>


<?php
/*require_once("config.ini");*/
error_reporting(0);
$f = fopen("titles.txt","w");
fwrite($f,$titles);
fclose($f);
$f = fopen("texts.txt","w");
fwrite($f,$texts);
fclose($f);

?>
<!--table align="center">
<tr>
<td><b>您设置的邮件标题:</b></td><td><?php echo $titles;?></td>
</tr>
<tr>
<td><b>您设置的邮件内容:</b></td><td><?php echo $texts;?></td>
</tr-->




</table>

<div align="right">
技术开发商: <a href="http://taojinbao168.cn" target="_blank">淘金宝一路发网络。</a>

</div>