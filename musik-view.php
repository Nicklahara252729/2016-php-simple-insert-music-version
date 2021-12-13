<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Music View Data</title>
<style>
*{
margin:0;
padding:0;
}
body{
margin:0 auto;
background:#fff; 	
}
header{
background-color:#fff;
width:100%;
height:80px;
}
.sub-header{
width:100%;
height:40px;
background-color:#969696;
margin-top:40px;
position:absolute;
}
.container{
width:1000px;
height:550px;
overflow:auto;
background-color:#D3D3D3;
margin-left:200px;
margin-top:20px;
font-family:"calibri";
font-size:14px;
text-align:center;
}
table{
margin-top:20px;
}
</style>
</head>
<body>
<header>
<div class="sub-header"></div>
</header>
<div class="container">
<table>
<tr>
<td width="172">Id Music</td>
<td width="189">Music Name</td>
<td width="195">Artist</td>
<td width="198">Album</td>
<td width="179">Year</td>
</tr>
<?php
mysql_connect('localhost','root','');
mysql_select_db('baru');
$sql=mysql_query("select * from musik");
while ($r = mysql_fetch_array($sql))
{
echo "<tr><td>".$r['id']."</td><td>".$r['judul']."</td><td>".$r['artis']."</td><td>".$r['album']."</td><td>".$r['tahun']."</td></tr>";
}
?></table>
</div>
</body>
</html>
