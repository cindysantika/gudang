,<html>
<head>
<style type="text/css"> 
.dropmenu {    
	background: #616161;     
	height: 30px;    
	list-style-type: none;     
	margin: 0;     
	padding: 0px; 
} 
.dropmenu li {     
	border-right: solid 1px white;    
	float: left;     
	height: 30px; 
} 
.dropmenu li a { 
    color: #fff;    
	display: block;    
	font: 12px arial, verdana, sans-serif; 
    font-weight: bold;    
	padding: 9px 20px;   
	text-decoration: none;
} 
.dropmenu li:hover { background: #778899; position: relative; } 
.dropmenu li:hover a { text-decoration: underline; } 
.dropmenu li:hover ul {  
   background-color: #3f4a54;  
   border: 1px solid grey;    
   left: 0px;     
   padding: 3px;    
   top: 30px;    
   width: 160px;
 } 
 .dropmenu li:hover ul li { border: none; height: 18px; } 
 .dropmenu li:hover ul li a {    
	background-color: #778899;     
	border: 1px solid transparent;  
	color: #fff;     
	display: block; 
    font-size: 11px;    
	height: 18px;  
	line-height: 18px;  
	padding: 0px;   
	text-decoration: none; 
    text-indent: 5px;   
	width: 158px;   
	padding: 3px; 
}
 .dropmenu li:hover ul li a:hover {  
	background: silver;     
	border: solid 1px #444;     
	color: #000;     
	height: 18px;    
	padding: 3px; 
} 
.dropmenu ul {   
		left: -9999px;    
		list-style-type: none;    
		position: absolute;    
		top: -9999px;
} </style> 
</head>
<ul class="dropmenu"> 
<li><a href="#1">Menu 1</a>    
	<ul>     
	<li><a href="#11">Sub Menu 1</a></li>    
	<li><a href="#22">Sub Menu 2</a></li>    
	</ul>
</li> 
	<li><a href="#2">Menu 2</a>    
	<ul>     
	<li><a href="#21">Sub Menu 1</a></li>    
	<li><a href="#22">Sub Menu 2</a></li>     
	<li><a href="#23">Sub Menu 3</a></li>   
	<li><a href="#24">Sub Menu 4</a></li>     
	</ul> 
</li> 
	<li><a href="#3">Menu 3</a>     
	<ul>     
	<li><a href="#31">Sub Menu 1</a></li>     
	<li><a href="#32">Sub Menu 2</a></li>     
	<li><a href="#33">Sub Menu 3</a></li>    
	<li><a href="#34">Sub Menu 4</a></li>     
	</ul> 
</li> 
</ul>
</html>