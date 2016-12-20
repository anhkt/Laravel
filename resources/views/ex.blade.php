<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<style>
		.flex-container{
			display: -webkit-flex;
			display: flex;
			-webkit-flex-flow: row wrap;
			flex-flow: row wrap;
			text-align: center;
		}

		.flex-container > * {
			padding: 15px;
			-webkit-flex: 1 100%;
			flex: 1 100%;
		}

		.article {
			text-align: left;
		}

		header{
			background: black;
			color: white;
		}

		footer{
			background: #aaa;
			color: white;
		}

		.nav {background:#eee;
			float: left;}

		.nav ul {
			list-style-type: none;
			padding: 0;
		}

		.nav ul li a {
			text-decoration: none;
		}

		@media all and (min-width: 768px){
			.nav {
				text-align:left;
				-webkit-flex: 1 auto;
				flex:1 auto;
				-webkit-order:1;order:1;
			}
    	.article {
    		-webkit-flex:5 0px;
    		flex:5 0px;
    		-webkit-order:2;
    		order:2;
    	}
    	footer {
    		-webkit-order:3;
    		order:3;
    	}
		}
	</style>
</head>
<body>
<div class="flex-container">
	<header>
		<h1>Booking Tour Gallery</h1>
	</header>
	<nav class="nav">
		<ul>
			<li><a href="#"> Đà Nẵng</a></li>
			<li><a href="#"> Nha Trang</a></li>
			<li><a href="#"> Đà Lạt</a> </li>
		</ul>
	</nav>
	<article class="article">
		<h1>Đà Nẵng</h1>
		<p>Thành phố Đà Nẵng nằm ở miền Trung Việt Nam với khoảng cách gần như chia đều giữa thủ đô Hà Nội và thành phố Hồ Chí Minh. Đà Nẵng còn là trung tâm của 3 di sản văn hóa thế giới là Cố đô Huế, phố cổ Hội An và thánh địa Mỹ Sơn. Bắc giáp tỉnh Thừa Thiên – Huế, Tây và Nam giáp tỉnh Quảng Nam, Đông giáp Biển Đông. Đà Nẵng nằm ở trung độ đất nước, trên trục giao thông Bắc – Nam về đường bộ, đường sắt, đường biển, đường hàng không và điểm cuối của Hành lang Kinh tế Đông Tây trải dài từ Việt Nam, Lào, Thái Lan và Burma (Myanmar)</p>
	</article>
	<footer>
		Copyright &copy; W3Schools.com
	</footer>
</div>
</body>
</html>