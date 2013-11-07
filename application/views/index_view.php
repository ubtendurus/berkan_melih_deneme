<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CodeIgniter'A Hoşgeldiniz</title>
<style type="text/css">
#container {
	width:800px;
	height: 1000px;
	background: #333;
	margin:auto;
}

.large #container {
	width:1000px;
}

#nav{
	width: 100%;
	height: 100px;
	border-bottom: 1px solid white;
	background: #999
	
}

.large #nav {
	float:left;
	width:200px;
	border-bottom: none;
	border-rigth: 1px solid white;
	height: 1000px;
}

#header{
	width:100%;
	height: 80px;
	background: #666 top center;
	text-align: center;

}

.temizle{
clear:both;
}

</style>
	
<script type="text/javascript">
function checkWindowSize() {  
      
    if ( $(window).width() > 1200 ) {  
        $('body').addClass('large');  
    }  
    else {  
        $('body').removeClass('large');  
    }  
      
}  
  
$(window).resize(checkWindowSize); 
</script>

	<script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript" charset="utf-8"></script>
	
</head>
<body>

<div id="container">
	<div id="nav">
		<ul>
			<li>Anasayfa</li>
			<li>Hakkımızda</li>
			<li>İletişim</li>
		</ul>
	</div>

	</div>
</body>
</html>