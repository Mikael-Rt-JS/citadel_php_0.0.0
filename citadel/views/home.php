<?php require_once __DIR__.'/global/doctype_open.php'; ?>
	  
	<!-- FONTS -->
  
	<!-- Inter&Rubik Moonrocks -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
  
	<link href="./static/css/globals/reset.css" rel="stylesheet" text="text/css"/>
	<style>
.rubik-moonrocks-regular {
  font-family: "Rubik Moonrocks", serif;
  font-weight: 400;
  font-style: normal;
}


.inter-100 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 100;
  font-style: normal;
}
.inter-200 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 200;
  font-style: normal;
}
.inter-300 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 300;
  font-style: normal;
}
.inter-400 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}
.inter-500 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
}
.inter-600 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
}
.inter-700 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;
}
.inter-800 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 800;
  font-style: normal;
}
.inter-900 {
  font-family: "Inter", serif;
  font-optical-sizing: auto;
  font-weight: 900;
  font-style: normal;
}
	.header{
		width: 100%;
		height: 100vh;
		background: url('./static/images/azariel-titan-wallpaper-3840px.jpg') center/cover no-repeat;
		
		display: grid;
		grid-template-columns: minmax(100px,180px) 3fr minmax(100px,180px);
		align-items: center;
	}
	.header-hero{
		grid-column: 2/3;
		color: #FFC377;
		background: #2D1B0870;
		border-radius: 6px;
		padding: 120px 0px; 
		display: grid;
		grid-template-columns: 1fr;
		justify-content: center;
		align-items: center;
		text-align: center;
		gap: 20px;
		
	}
	.header-hero h1{
		font-size: 96px;
	}
	.header-hero h2{
		font-size: 40px;
	}
	</style>
	<!--
	<link href="./static/css/globals/reset.css" rel="stylesheet" text="text/css"/>
	<link href="./static/css/globals/root.css" rel="stylesheet" text="text/css"/>
	<link href="./static/css/globals/globals.css" rel="stylesheet" text="text/css"/>
	-->
	
	<!-- CSS 
	<link href="./css/global.css" rel="stylesheet" type="text/css"/>
	<link href="./static/css/global.css" rel="stylesheet" type="text/css"/>
	-->

</head>
<body>

	<header class="header">
		<div class="header-hero">
			<h1 class="rubik-moonrocks-regular"><?= $this->title;?></h1>
			<h2 class="inter-600">Start building your TITAN</h2>
		</div>
	</header>
	
	<div><?= $this->test(); ?></div>
	<!-- <img src="./static/images/azariel-titan-wallpaper-3840px.jpg"  alt="azariel-titan-wallpaper-3840px" title="azariel-titan-wallpaper-3840px"/> -->
	
	<script src="./static/js/index.js"></script>
	
<?php require_once __DIR__.'/global/doctype_close.php'; ?>