<html>
<head>
<title>Report - Need Assessment</title> 
<style>
    
.wrapper{
  width:100%;
  max-width:400px;
  margin: 100px auto;
}

.main{
  background:#fff;
  width:100%;
  box-shadow:0px 5px 15px rgba(0,0,0,0.2);
  border-radius:2px;
}

.explanation{
  position:absolute;
  top:0px;
  left:50%;
  width:100%;
  max-width:400px;
  -ms-transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}

/*HEADER*/
.main .header{
  width:100%;
  height:200px;
  background-image: url(https://unsplash.it/400/250?image=1043);
  background-position:top left;
  border-radius:2px 2px 0 0;
  overflow:hidden;
  position:relative;
}

.main .header h1{
  margin:0;
  color:#fff;
  vertical-align:bottom;
  display:inline-block;
  position:absolute;
  bottom:0px;
  left:0px;
  padding:25px;
  text-shadow:0px 0px 5px rgba(0,0,0,0.8);
}

.main .header h1 span{
  font-size:16px;
  display:block;
  font-weight:normal;
  margin-top:5px;
}

/*ITEMS*/
.main ul{
  padding:0;
  margin:0;
  list-style-type: none;
  padding-top:5px;
  position:relative;
}

.main ul li{
  position:relative;  
  padding:0 25px;
}


.main ul li .dragger{
  position:absolute;
    top: -1px;
    left: -21px;
    color: #ccc;
    font-size: 11px;
    display: none; 
    padding: 23px;
  cursor:move;
}

.main ul li.dragger span:first-child{
  position:relative;
  left:5px;
}

.main ul li:hover .dragger{
  display:block;
}

.main div.add .add-txt div span{
  color:#fff;
  font-size:12px;
  position:relative;
  top:1px;
}

.main div.add .add-txt span.txt{
  display: inline-block;
    margin-left: 10px;
    vertical-align: top;
    position: relative;
    top: 3px;
}

.main ul li.ui-sortable-helper{
  background:white;
  border-radius:2px;
  box-shadow:0px 5px 15px rgba(0,0,0,0.1);
  cursor:move;
}

.main ul li.ui-sortable-helper label{
    border:none;
}

.main ul li.ui-sortable-helper .priority-indicator{
  left:-7px;
}

.main ul li:nth-child(2) label{
  border-top:0;
}

.main ul li label{
  display:inline-block;
  height:100%;
  width:100%;
  padding:20px 0;
  position:relative;
   border-top:1px solid #eaeaea;
}

.main ul li label:hover .checkbox{
  border-color:#999;
}

/*CHECKED*/
.main ul li input[type=checkbox]:checked + label span:before{
  width:100%;
}

.main ul li input[type=checkbox]:checked + label .checkbox, 
.main ul li input[type=checkbox]:focus + label .checkbox{
  background:#3bc562;
  border-color:#3bc562;
}

.main ul li input[type=checkbox]:checked + label{
  color:#CCC;
}

.main ul li input[type=checkbox]:checked + .icon-pencil{
  color:green;
}

.main ul li input[type=checkbox]:checked + label .checkbox .fa{
  display:block;
}

.main ul li label .checkbox{
  display:inline-block;
  width:20px;
  height:20px;
  border:2px solid #CCC;
  position:relative;
  top:2px;
  border-radius:4px;
  cursor:pointer;
  z-index:10;
}

.main ul li label .checkbox .fa{
  text-align:center;
  position:absolute;
  top:3px;
  left:3px;
  font-size:14px;
  display:none;
  color:white;
}



.main ul li label span.item-name{
  display:inline-block; 
  margin-left:10px;
  vertical-align: top;
  position:relative;
  top:5px;
}

.main ul li label span.item-name:before{
  content:'';
  height:1px;
  background:#999;
  width:0;
  position:absolute;
  top:8px;
  left:0;
  
  -webkit-transition: all 0.2s ease;
	-moz-transition:    all 0.2s ease;
	-o-transition:      all 0.2s ease;
	-ms-transition:     all 0.2s ease;
	transition:         all 0.2s ease;
}

.add input,
.main ul li input[type=text]{
   position: absolute;
    border: none;
    color: #333;
    font-size: 16px;
    background: white;
    padding: 25px 0;
  padding-left:39px;
    width:0;  
    top: 0px;
  left:0;
    display: none;
    font-family: Arial;
  border-bottom:2px solid #34a1fd;
  
     -webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
  z-index:1;
  
  -webkit-transition: width 0.2s ease;
	-moz-transition:    width 0.2s ease;
	-o-transition:      width 0.2s ease;
	-ms-transition:     width 0.2s ease;
	transition:         width 0.2s ease;
}



.add input,
.main ul li input[type=text]:focus{
  outline:none;
  width:100%;
}

.main ul li input[type=checkbox]{
  display:none;
}

.main ul .actions{
  position:absolute;
  top:0;
  right:20px;
  overflow:hidden;
  z-index:10;
}

.main ul li:hover .actions{
  display:block;
}

.main ul li:hover .actions span{
   opacity:1;
  -moz-transform: translateX(0);
  -webkit-transform: translateX(0);
  -o-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0);
  
  -webkit-transition: all 0.2s ease;
	-moz-transition:    all 0.2s ease;
	-o-transition:      all 0.2s ease;
	-ms-transition:     all 0.2s ease;
	transition:         all 0.2s ease;
}

.main ul .actions span{
  vertical-align: middle;
   display: inline-block;
  padding:25px 6px;
  cursor:pointer;
  color:#999;
  
  opacity:0;
  -moz-transform: translateX(100px);
  -webkit-transform: translateX(100px);
  -o-transform: translateX(100px);
  -ms-transform: translateX(100px);
  transform: translateX(100px);
  
  
}


.main ul .actions span.fa-pencil:hover{
  color:#34a1fd;
}

.main ul .actions span.fa-trash:hover{
  color:#fe4444;
}


/*priority*/
.main ul .actions span.prio-btn:hover,
.main ul li.priority1 .actions span.prio-btn{
  color:#fbaa0f;
}
.main ul li.priority1 .priority-indicator{
  background: #fbaa0f;
}

/*1*/
.main ul li.priority1 .actions span.prio-btn{
   color:#fbaa0f;
}

.main ul li.priority1 .priority-indicator{
  background: #fbaa0f;
}


/*2*/
.main ul li.priority2 .actions span.prio-btn{
   color:#fe4444;
}

.main ul li.priority2 .priority-indicator{
  background: #fe4444;
}

.priority-indicator{
        width: 8px;
    height: 8px;
    position: absolute;
    top: 29px;
    left: -5px;
    display: none;
    border-radius: 50%;
    border: 2px solid #fff;
}
.main ul li.priority .priority-indicator{
  display:block;
}

.main ul li.checked .priority-indicator,
.main ul li.checked .fa-pencil,
.main ul li.checked .prio-btn{
  display:none;
}


/*ADD NEW*/
.main div.add{
  padding:0 20px;
  cursor:pointer;
  position:relative;
}

.main div.add .add-txt{
  border-top:1px solid #eaeaea;
  padding:22px 0 23px;;
  position:relative;
}

.main div.add .add-txt div {
  border-radius:50%;
  width:20px;
  height:20px;
  background:#3bc562;
  border: 2px solid #3bc562;
  display:inline-block;
  text-align:center;
  position:relative;
  z-index:10;
}

.add input{
  border-bottom:0;
}



/*UNDO*/
.undo{
  left:50%;
  -ms-transform: translate(-50%, 300px) ;
  -webkit-transform: translate(-50%, 300px);
  transform: translate(-50%, 300px);
  
  -webkit-transition: all 0.2s ease;
	-moz-transition:    all 0.2s ease;
	-o-transition:      all 0.2s ease;
	-ms-transition:     all 0.2s ease;
	transition:         all 0.2s ease;
  
  padding:15px;
  position:fixed;
  bottom:20px;
  font-size:14px;
  background:#fff;
  box-shadow:0px 3px 10px rgba(0,0,0,0.2);
  border-radius:2px;
  
  z-index:100;
}

.undo.active{
  -ms-transform: translate(-50%, 0px) ;
  -webkit-transform: translate(-50%, 0px);
  transform: translate(-50%, 0px);
}

.undo div{
  display:inline-block;
  margin-left:10px;
  border-left:1px solid #eaeaea;
  padding-left:10px;
  color:#999;
}

.undo div:hover{
  color:#3bc562;
  cursor:pointer;
}

.undo span{
  display:inline-block;
  margin-right:2px;
}



/*TOOLTIP*/
.ui-tooltip {
    width: 200px;
    text-align: center;
    box-shadow: none;
    padding: 0;
}
.ui-tooltip-content {
    position: relative;
    padding: 0.5em;
}
    
    
    body {
  color: #333;
  font: 16px/1 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.list-numbered {
  list-style: none;
  margin-left: 1em;
  counter-reset: line;
}

.list-numbered > li {
  position: relative;
  margin-bottom: 1.5em;
}

.list-numbered > li:before {
	position: absolute;
	left: -2.25em;
	display: inline-block;
  width: 22px;
	height: 22px;
	margin-right: 0.5em;
  background-color: #B53C2C;
	border-radius: 50%;
	color: #fff;
	text-align:center;
  line-height: 1.25em;
	counter-increment: line;
	content: counter(line);
}
    </style>
</head>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Resource Report Generation"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc  
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
    
    
    <div>
        
        
        <script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title: {
		text: "Money Allocation on SIX Frameworks"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 49.45, label: "Infrastructure"},
			{y: 7.31, label: "Classroom Environment"},
			{y: 3.06, label: "Stakeholder Engagement"},
			{y: 4.00, label: "Academic Support"},
			{y: 4.91, label: "Teacher Mentorship"},
			{y: 31.26, label: "Health"}
		]
	}]
});
chart.render();

}
</script>
        
        <div id="chartContainer1" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
    <ol class="list-numbered">
  <li>Total Amount left - 20000/-</li>
  <li>Resources Available - 10</li>
  <li>Total number of projects - 40</li>
  <li>No of completed projects - 25</li>
  <li>No of ongoing projects - 10</li>

</ol>
    
    
    </div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>     