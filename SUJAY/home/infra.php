<html>
	<head>
		<title>Careworks Foundation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
			<header id="header">
				<div class="inner">
					
					<a href="index.html" class="logo"><strong>A Non-profit Organisation</strong></a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="contactus.html">Contact Us</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

			<section id="banner">
				<div class="inner">
					<header>
						<img src="images/logo.png" alt="Pic 01" /><h1>Careworks Foundation</h1>
					</header>

					<div class="flex">

						<div>
							<span class="icon fa-car"></span>
							<h3><a href="http://localhost/CFG/infra.php">INFRASTRUCTURE</a></h3>
							<p>The basic establishment</p>
						</div>
					</div>

					<footer>
						<div class="button" class="button" onclick="openTab('b1')">Learn More</div>
					</footer>
				</div>
			</section>
			<div id="b1" class="containerTab" style="display:none;">
 		    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  			<h2>School Renovation</h2>
  			<p>

Strong Infrastructure Leads to Strong Foundation<br>

Careworks Foundation has recognized need for infrastructural development in Government schools as an important component to strengthen elementary education, providing child friendly environment.<br>

Infrastructure Support<br>

    Building Renovation – Water proofing, repairing of existing structure, flooring works, adding rooms, partition work, carpentry work, water storage facilities & maintenance of existing structure<br>
    Painting<br>
    Safety grills<br>
    Plumbing & Electrification<br>
    Construction & up gradation of sanitation units and hand wash area<br>
    Library & Computer room setup<br>

			</p>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
			</script>

	</body>
</html>