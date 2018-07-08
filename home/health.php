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
							<span class="icon fa-bug"></span>
							<h3>HEALTH</h3>
							<p>The most important attribute</p>
						</div>
					</div>

					<footer>
						<div class="button" class="button" onclick="openTab('b1')">Learn More</div>
					</footer>
				</div>
			</section>

			<div id="b1" class="containerTab" style="display:none;">
 		    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  			<h2>Health Camps</h2>
  			<p>
				In India more than two million children lose their lives every year to vaccine-preventable infectious diseases. Though health checkup camps, CWF identifies children who are either suffering from any such disease or haven’t been given basic vaccines and provides further treatment accordingly. CWF carries out screening of general health, common skin conditions, dental and eye check-ups among children of our adopted schools.
			</p>
			<h2>Water, Sanitation and Hygiene</h2>
  			<p>


According to the latest estimates of the Joint Monitoring Programme (JMP) by WHO/UNICEF for Water Supply and Sanitation, 32 per cent of the world’s population – 2.4 billion people – lack improved sanitation facilities and 663 million people still use drinking water from unimproved sources in 2015. Inadequate access to safe water and sanitation services, coupled with poor hygiene practices, kills and sickens thousands of children every day and leads to impoverishment and diminished opportunities for thousands more. Poor sanitation, water and hygiene have many other serious repercussions. Children – and particularly girls – are denied their right to education because their schools lack private and decent sanitation facilities. CWF believes that without WASH (water, sanitation and hygiene), sustainable school enhancement program is impossible.

    Water: CWF make sure every school has water purifiers, giving the children access to pure drinking water.
    Sanitation: Every school has clean toilets, separate for boys & girls and maintained by CWF.
    Hygiene: Hand washing is one of the most important factors in controlling the spread of micro-organisms and in preventing the development of infections. It is CWF’s endeavor to provide sufficient group-hand washing facilities allowing 10-12 students to wash their hands at the same time. The hand wash station is simple and sustainable, relying on usage of minimum water. Both the teachers and students are educated on proper hand washing techniques.

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