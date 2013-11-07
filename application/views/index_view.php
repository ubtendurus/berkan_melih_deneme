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

/* #nav{
	width: 100%;
	height: 100px;
	border-bottom: 1px solid white;
	background: #999
} */

#nav{
	float:right;
	width: 200px;
	height: 1000px;
	border-left: 1px solid white;
	background: #999
}

.large #nav {
	float:left;
	width:200px;
	border-bottom: none;
	border-rigth: 1px solid white;
	height: 1000px;
}



</style>
	



	
</head>

<body>
	<script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
function checkWindowSize() {  
      
    if ( $(window).width() > 1000 ) {  
        $('body').addClass('large');  
    }  
    else {  
        $('body').removeClass('large');  
    }  
      
}  
  
$(window).resize(checkWindowSize); 
</script>
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