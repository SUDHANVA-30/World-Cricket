<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>World_Cricket</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&display=swap" rel="stylesheet">
	<style type="text/css">
		.C1{
			text-align: left;	
			font-weight: bold;
			font-family: 'Big Shoulders Inline Text', cursive;
			color: #3c3c3c;
			font-size: 70px;
		}
		.navbar {
			overflow: hidden;
			background-color: #333;
			font-family: Arial, Helvetica, sans-serif;
		}
		.navbar a{
			float: left;
			font-size: 16px;
			color: white;
			padding: 14px 16px;
			text-decoration: none;
			text-align: center;
		}
		.dropdown{
			float: left;
			overflow: hidden;
		}
		.dropdown .dropbtn{
			cursor: pointer;
			font-size: 16px;
			border:none;
			outline: none;
			color: white;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
		}
		.navbar a:hover, .dropdown:hover ,.dropbtn:focus{
			background-color: red;
		}
		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}
		.logout{
			font-size: 18px;
			font-weight: bold;
			margin-top: 20px;
			background-color:red;
			padding: 5px;
			color: white;
			width: 8%;
		}
		.dropdown-content a{
			float: none;
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}
		.dropdown-content a:hover{
			background-color: #ddd;

		}
		body{
			background-color: black;
			color: white;
		}
		.show {
			display: block;
		}
		.world{
			background-color: #3c3c3c;
			overflow: hidden;
			z-index: 1;
			box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2); 
			border:none;
			outline: none;
			margin: 0;
			text-decoration: none;
		}
		.dom_league{
			background-color: #3c3c3c;
			overflow: hidden;
			z-index: 1;
			box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2); 
			border:none;
			outline: none;
			margin: 0;
			text-decoration: none;
		}
		.book_tickets{
				background-color: #3c3c3c;
			overflow: hidden;
			z-index: 1;
			box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2); 
			border:none;
			outline: none;
			margin: 0;
			text-decoration: none;
		
		}
		
	</style>
</head>
<body>
	<section>
		<div class="C1" style="color: white;">WORLD CRICKET <ins style="margin: right; text-decoration: none;font-size: 20px; font-family: verdana;">[A DBMS mini project]..</ins> </div>
	<div class="navbar">
	
			<a href="worldcric.php">Home</a>
			<div class="dropdown">
				<button class="dropbtn" onclick="myfunction()">Batsmen Ranking</button>
					<i class="fa fa-caret-down"></i>
				<div class="dropdown-content" id="myDropdown">
					<a href="batsmen_ranking_odi.html" >ODI</a>
					<a href="batsmen_ranking_test.html" >TEST</a>
					<a href="batsmen_ranking_t20.html" >T20</a>
				</div>
			</div>
			<div class="dropdown">
			<button class="dropbtn" onclick="myfunction1()">Bowlers Ranking</button>
			<i class="fa fa-caret-down"></i>
			<div class="dropdown-content" id="myDropdown1">
				<a href="bowlers_ranking_odi.html" >ODI</a>
				<a href="bowlers_ranking_test.html" >TEST</a>
				<a href="bowlers_ranking_t20.html">T20</a>
			</div>
		</div> 
			<div class="dropdown">
			<button class="dropbtn" onclick="myfunction2()">All-rounders Ranking</button>
			<i class="fa fa-caret-down"></i>
			<div class="dropdown-content" id="myDropdown2">
				<a href="allrounders_ranking_odi.html">ODI</a>
				<a href="allrounders_ranking_test.html">TEST</a>
				<a href="allrounders_ranking_t20.html">T20</a>
			</div>
		</div> 
		<button class="world"><a href="world_cup_info.html">World Cup Info</a></button>
		<button class="dom_league"><a href="domestic_league.html">Domestic League</a></button>
		<script type="text/javascript">
			function myfunction(){
				document.getElementById("myDropdown").classList.toggle("show");
			}
			window.onclick=function(e){
				if (!e.target.matches('.dropbtn')){
					var myDropdown = document.getElementById("myDropdown");
					if(myDropdown.classList.contains('show')){
						myDropdown.classList.remove('show');
					}
				}
			}
			function myfunction1(){
				
				document.getElementById("myDropdown1").classList.toggle("show");
			}
			window.onclick=function(e){
				if (!e.target.matches('.dropbtn')){
					var myDropdown = document.getElementById("myDropdown1");
					if(myDropdown.classList.contains('show')){
						myDropdown.classList.remove('show');
					}
				}
			}
			function myfunction2(){
				document.getElementById("myDropdown2").classList.toggle("show");
			}
			window.onclick=function(e){
				if (!e.target.matches('.dropbtn')){
					var myDropdown = document.getElementById("myDropdown2");
					if(myDropdown.classList.contains('show')){
						myDropdown.classList.remove('show');
					}
				}
			}
		</script>
</div>
	</section>
	
		<img src="https://i.pinimg.com/originals/f4/0c/fe/f40cfef2ef26c8f87ea65894d0ba41d7.jpg" align="left" style="padding: 10px">
		<p style="text-align: right; "><ul><strong>DID YOU KNOW?</strong></ul>
			<li>PAKISTAN HAS NEVER WON A WORLD CUP MATCH AGAINST INDIA!</li>
			<li style="padding-top: 20px">MAHENDRA SINGH DHONI IS THE ONLY CAPTAIN TO WIN ALL THE THREE ICC TOURNAMENTS </li>
			<li style="padding-top: 20px">OFTEN REGARDED AS Mr. 360 <sup>o</sup>, AB DE VILLIERS HOLDS THE RECORD OF HITTING THE FASTEST EVER CENTURY IN JUST 31 DELIVERIES </li>
			<li style="padding-top: 20px">INDIA HAS A TOTAL OF 52 INTERNATIONAL CRICKET STADIUMS WHICH IS THE MOST IN ANY COUNTRY  </li>
			<li style="padding-top: 20px">MUTTAIAH MURALITHARAN IS THE HIGHEST WICKET TAKER IN THE INTERNATIONAL CRICKET[1347]</li>
			<li style="padding-top: 20px">RCB IS THE MOST CONSISTENT IPL TEAM!</li>
			<li style="padding-top: 20px">GLENN MCGRATH HAS DISMISSED SACHIN TENDULKAR 13 TIMES IN INTERNATIONAL CRIKET</li>
			<li style="padding-top: 20px">VIRAT KOHLI IS THE ONLY PLAYER WITH MORE THAN 15000 INTERNATIONAL RUNS AT AN AVERAGE OF OVER 50!
			<li style="padding-top: 20px">SHAHID AFRIDI HAS BEEN DISMISSED FOR A DUCK 30 TIMES IN HIS CAREER!</li></p>
</body>
<footer><button class="logout" style="float: right;"><a  style="text-decoration: none;color: white;" href="index.php">Log Out</a></button></footer>
</html>