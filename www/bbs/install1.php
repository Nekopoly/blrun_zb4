<?
include"lib.php";
head();
if(file_exists("myZrCnf2019.php")) error("이미 myZrCnf2019.php가 생성되어 있습니다.<br><br>재설치하려면 해당 파일을 지우세요");
?>

<script>
 function check_submit()
 {
  if(!write.hostname.value)
  {
   alert("HostName을 입력하세요");
   write.hostname.focus();
   return false;
  }
  if(!write.user_id.value)
  {
   alert("USER ID 를 입력하세요");
   write.user_id.focus();
   return false;
  }
  if(!write.dbname.value)
  {
   alert("DB Name를 입력하세요");
   write.dbname.focus();
   return false;
  }
  return true;
 }
</script>
<body bgcolor=#000000 text=#ffffff>
<br><br><br>
<div align=center>
<table cellpadding=0 cellspacing=0 width=600 border=0>
<tr>
	<td height=30 colspan=3><img src=images/inst_top.gif></td>
</tr>
<tr>
	<td>
	<br>
    <img src=images/inst_step2.gif>
	</td>
</tr>
<tr>
	<td>
	<br>
	<form name=write method=post action=install_ok.php onsubmit="return check_submit();">
	<table border=0 cellpadding=2 cellspacing=0>
	<tr>
		<td width=90 align=right style=font-family:Tahoma;font-size:9pt;>Host Name</td>
		<td width=90><input type=text name=hostname value='localhost' style=font-family:Tahoma;font-size:9pt;></td>
		<td width=300>MySQL DB의 호스트네임을 입력하세요.</font></td>
	</tr>
	<tr>
		<td align=right style=font-family:Tahoma;font-size:9pt;>SQL User ID</td>
		<td><input type=text name=user_id style=font-family:Tahoma;font-size:9pt;></td>
		<td>MySQL계정의 ID를 입력하세요</font></td>
	</tr>
	<tr>
		<td align=right style=font-family:Tahoma;font-size:9pt;>Password</td>
		<td><input type=password name=password style=font-family:Tahoma;font-size:9pt;></td>
		<td>Mysql DB의 패스워드를 입력하세요</font></td>
	</tr>
	<tr>
		<td align=right style=font-family:Tahoma;font-size:9pt;>DB Name</td>
		<td><input type=text name=dbname style=font-family:Tahoma;font-size:9pt;></td>
		<td>Mysql DB의 Name을 입력하세요</font></td>
	</tr>
	<tr>
		<td align=right style=font-family:Tahoma;font-size:9pt;>보안서버 URL</td>
		<td><input type=text name=sslurl style=font-family:Tahoma;font-size:9pt;></td>
		<td>제로보드 SSL 보안서버 포트URL을 입력..<br>예) https://www.blrun.net:47006/bbs/ (끝에 / 붙음)</font></td>
	</tr>
	<tr>
		<td colspan=3 align=center><br><br><input type=image src=images/inst_b_2.gif border=0 align=absmiddle></td>
	</tr>
	</form>
	</table>
	<br>
	</td>
</tr>
</table>

<?
foot();
?>