<?php 
include_once('../path.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
<link type="text/css" rel="stylesheet" media="all" href="../styles/common.css" />
<script type="text/javascript" src="../scripts/common.js"></script>
</head>
<body>
<div id="container">
<h1 class="subject">添加酒店</h1>
<form name="form1" id="form1" action="doAction.php?action=addHotel" method="post" onsubmit="return validateForm();">
<table cellpadding="0" cellspacing="0">
<tr>
<td width="100">名称:</td>
<td><input type="text" name="h_name" id="h_name" class="input"/></td>
</tr>
<tr>
<td>编号:</td>
<td><input type="text" name="identifier" id="identifier" class="input"/></td>
</tr>
<tr>
<td>集团编号:</td>
<td><input type="text" name="h_id" id="h_id" class="input"/></td>
</tr>
<tr>
<td>地址:</td>
<td><input type="text" name="address" id="address"  class="input"/></td>
</tr>
<tr>
<td>密码:</td>
<td><input type="text" name="password" id="password"  class="input"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="image" src="../images/submit.gif" alt=""/>&nbsp;<img src="../images/reset.gif" alt="" style="cursor:pointer;" onclick="resetForm('form1')"/></td>
</tr>
</table>
</form>
</div>
</body>
</html>