<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
<title>Form Tambah Lagu</title>
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
.img1{
position:absolute;
height:500px;
width:800px;
margin-left:250px;
margin-top:50px;
box-shadow:10px 10px 0px 0px #969696;
}
.txt1{
width:400px;
height:35px;
border:0;
background-color:#828282;
font-family:"tahoma";
font-size:13px;
color:#fff;
text-align:center;
position:absolute;
margin-top:200px;
margin-left:400px;
}
.txt2{
width:400px;
height:35px;
border:0;
background-color:#828282;
font-family:"tahoma";
font-size:13px;
color:#fff;
text-align:center;
position:absolute;
margin-top:240px;
margin-left:400px;
}
.txt3{
width:400px;
height:35px;
border:0;
background-color:#828282;
font-family:"tahoma";
font-size:13px;
color:#fff;
text-align:center;
position:absolute;
margin-top:280px;
margin-left:400px;
}
.txt4{
width:400px;
height:35px;
border:0;
background-color:#828282;
font-family:"tahoma";
font-size:13px;
color:#fff;
text-align:center;
position:absolute;
margin-top:320px;
margin-left:400px;
}
.txt5{
width:400px;
height:35px;
border:0;
background-color:#828282;
font-family:"tahoma";
font-size:13px;
color:#fff;
text-align:center;
position:absolute;
margin-top:360px;
margin-left:400px;
}
.btn1{
border:0;
width:190px;
height:35px;
background-color:#b81057;
font-family:"tahoma";
font-size:14px;
color:white;
margin-top:410px;
margin-left:400px;
position:absolute;
}
.btn1:hover{
background-color:#fff;
border:solid 1px #b81057;
transition:all 0.3s;
color:#b81057;
}
.btn2{
border:0;
width:190px;
height:35px;
background-color:#b81057;
font-family:"tahoma";
font-size:14px;
color:white;
margin-top:410px;
margin-left:610px;
position:absolute;
}
.btn2:hover{
background-color:#fff;
border:solid 1px #b81057;
transition:all 0.3s;
color:#b81057;
}

</style>
</head>
<body>
<header>
<div class="sub-header"></div>
</header>
<div class="container">
<div class="img1"></div>
<div class="container2">
<form action="proses.php" method="post">
<input type="text" class="txt1" name="id" placeholder="Id Music">
<input type="text" class="txt2" name="judul" placeholder="Musi Name">
<input type="text" class="txt3" name="artis" placeholder="Artist">
<input type="text" class="txt4" name="album" placeholder="Albums">
<input type="text" class="txt5" name="tahun" placeholder="Year">
<button type="submit" class="btn1">Submit Data</button>
<button type="reset" class="btn2">Reset Data</button>
</form></div>
</div>
</body>
</html>