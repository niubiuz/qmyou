<title>�Խ�QQ����һ�Ⱥ���� V1.0</title>
<style>
p{
    text-align:center;
}
a{
    text-decoration: none;
    color:red;
}
</style>
<center><h1>�Խ�QQ����һ�Ⱥ����</h1></center>
<form method="GET" action="send.php">
<table align="center">
<tr>
<td>������Ҫ��ʼ���͵�QQ��</td>
<td><input name="start" value="335638002" /></td>

</tr>

<tr>
<td>��������ʼ����������ţ�</td>
<td><input name="i" value="0" /></td>

</tr>

<tr>
<td>��������ʼ����������ţ�</td>

<td><input name="j" value="1" /></td>
</tr>

<tr>
<td>������Ҫ��ʼ���͵ı��⣺</td>
<td><input name="titles" value="�Խ�һ·�����硣" /></td>
<td><input type="submit" value="��ʼȺ��" /></td>
</tr>
</table>
<center>
������Ҫ��ʼ���͵����ݣ�<br/>
<textarea name="texts" cols=100 rows=30>�������������ݣ�֧��html���룡</textarea>

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
<td><b>�����õ��ʼ�����:</b></td><td><?php echo $titles;?></td>
</tr>
<tr>
<td><b>�����õ��ʼ�����:</b></td><td><?php echo $texts;?></td>
</tr-->




</table>

<div align="right">
����������: <a href="http://taojinbao168.cn" target="_blank">�Խ�һ·�����硣</a>

</div>