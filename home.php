<html>
	<head>
		<title>Careworks Foundation</title>
			<style>
				.dropbtn 
				{
					background-color: blue;
					color: white;
					padding: 12px;
					font-size: 16px;
					border: none;
					cursor: pointer;
					width:100%;
					height:60px;
					margin-left:30px;
					vertical-align: top;
				}
				.dropbtn1
				{
					background-color: black;
					padding: 12px;
					border: none;
					cursor: pointer;
					width:100%;
					height:60px;
					color: black;
					vertical-align: top;
				}
				.photos-btn
				{
					background-color: #B21589;
					cursor: pointer;
					color: white;
					font-size: 9px;
					font-weight: bold;
					padding: 4px;
					margin-top: 2px;
					vertical-align: top;
				}
				.photos-btn1 
				{
					background-color: #B21589;
					cursor: pointer;
					color: white;
					font-size: 9px;
					font-weight: bold;
					padding: 4px;
					margin-top: 2px;
					margin-right:400px;
					vertical-align: top;
					float:right;
				}
				.dropdown 
				{
					position: relative;
					display: inline-block;
				}
				.dropdown-content 
				{
					display: none;
					position: absolute;
					background-color: #f9f9f9;
					min-width: 160px;
				}
				.dropdown-content a 
				{
					color: black;
					padding: 12px 16px;
					text-decoration: none;
					display: block;
				}
				.dropdown-content a:hover {background-color: #f1f1f1;}

				.dropdown:hover .dropdown-content 
				{
					display: block;
				}
				.dropdown:hover .dropbtn 
				{
					background-color: solid blue;
				}

				.dropdown:hover .dropbtn1
				{
					background-color: none;
				}
				.l
				{
				float:left;
				padding:5px;
				border:1px;
				}
				.c
				{
				padding:7px;
				border:2px solid blue;
				}
				.center
				{
				padding:5px;
				float:left;
				}
				body
				{
					background-image: url('bg.jpg');	
				}
				h1{align:center;color:white;-webkit-text-stroke-width:1.5px;-webkit-text-stroke-color:gray;}
				#k
				{
	
					visibility:visible;
					text-align:center;
					font-size:18pt;
				}
				.cc{
           				 border-radius: 30px;
        			   }
				.myslides 
				{
				    display: none;
				    margin-left: 3%;
				    margin-right: 15px;
				    border-radius: 5px;
				    margin-top: -10px;
				}

			</style>
	</head>
	
<div id="k">
<h1 align="center">CAREWORKS FOUNDATION</a></h1>

<table>

<td>
<div class="dropdown"></div>
</td>
<td><a href="/login"><button class="dropbtn">LOGIN</button></a></td>
<td><div class="dropdown">
  <button class="dropbtn">CONTACT</button>
  <div class="dropdown-content">
    <a>9876543210</a>
    <a>careworksfoundation@gmail.com</a>
   </div></td>
<td><FORM method=GET action="http://www.google.com/search">
<A HREF=" http://www.google.com/"></A>
<INPUT TYPE=text name=q size=30 maxlength=255 value="" style="margin-left:40px">
<INPUT TYPE=hidden name=hl value="en">
<INPUT type=submit name=btnG VALUE="Search" style=" color: white;background-color: blue;border: none;cursor: pointer;padding:6px;">
</FORM></td>
</tr>
</table>
<br>
<div align="center">
    <div class="myslides"><img src="cwf1.jpg" width="1000" height="465" class = "cc"/></div>
    <div class="myslides"><img src="cwf2.jpg" width="1000" height="465" class = "cc"/></div>
    <div class="myslides"><img src="cwf3.jpg" width="1000" height="465" class = "cc"/></div>
	<div class="myslides"><img src="cwf5.jpg" width="1000" height="465" class = "cc"/></div>
	<div class="myslides"><img src="cwf6.jpg" width="1000" height="465" class = "cc"/></div>
	<div class="myslides"><img src="cwf7.jpg" width="1000" height="465" class = "cc"/></div>
	<div class="myslides"><img src="cwf8.jpg" width="1000" height="465" class = "cc"/></div>
	<div class="myslides"><img src="cwf9.jpg" width="1000" height="465" class = "cc"/></div>
	<div class="myslides"><img src="cwf10.jpg" width="1000" height="465" class = "cc"/></div>
	<div class="myslides"><img src="cwf11.jpg" width="1000" height="465" class = "cc"/></div>
</div>

    <script type="text/javascript">
        var slideIndex = 0;
        carousel();
        function carousel() {
            var i;
            var x = document.getElementsByClassName("myslides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length)
                slideIndex = 1;

            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 1500);
        }
    </script>
</body>
</html>