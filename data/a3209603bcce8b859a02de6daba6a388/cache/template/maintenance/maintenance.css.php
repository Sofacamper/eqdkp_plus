<?php
if ($this->security()) {
echo 'body, html {
	padding:0;
  margin:0;
  font-family: \'Trebuchet MS\', Verdana, sans-serif;
  font-size: 13px;
}

a {
	color: #336c99;
  text-decoration:unterline;
  background: url(../templates/maintenance/images/icon_trace.gif);
 	background-repeat: no-repeat;
 	background-position: left;
 	padding-left:16px;
}

a:hover {
	color: #a90000;
  text-decoration:none;
}

a:visited {color:#49a2e7}


.borderless{
	border: 0px;
}

h1{
	font-size: 20px;
  padding: 0px;
  margin: 0px;
	text-decoration:underline;
}

.header {
  background:#336c99 url(\'../templates/maintenance/images/header_back.png\') left no-repeat;
  color: #ffffff;
 	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
  font-size: 24px;
  font-weight:bold;
  height:110px;
  width: 100%;
  border: 0px;
  border-bottom:1px solid #333;
  text-transform: uppercase;
}

.breadcrumb {
	background: #efefef url(\'../templates/maintenance/images/bg_breadcrumb.png\') left;
	width: 100%;
  border: 0px;
  border-bottom:1px solid #333;
  font-size: 14px;
}

.breadcrumb a {
	color: #336c99;
  text-decoration:unterline;
  background: transparent;
 	padding-left:0px;
}

.breadcrumb_shadow{
	border-bottom:1px solid #CCC;
}

.copy {
	padding-top: 5px;
  margin-top: 20px;
  width: 98%;
}

.task_table {
	border-collapse:collapse;
	border:1px solid #CCC;
	width: 98%;
}

th{
	background-color: #4d4d4d;
  color: #ffffff;
 	font-weight:bold;
}

.th_sub {
	background-color: #8f8f8f;
}
.th_sub a, .th_sub a:hover{
	color:#FFF;
}


.big_table{
	width:100%;
}

.row1,.colorswitch tr:nth-child(odd){
	background-color: #ffffff;
}
.row2,.colorswitch tr:nth-child(even) {
	background-color: #e8e8e8;
}

.rowHover, .hoverrows tr:hover {
	background-color: #dbdbdb;
}

input {
  padding:2px 5px;
  background-color:#FFF;
  border:1px solid #b2b2b2;
}

input:hover, input:focus {
  border:1px solid #666;
  background-color:#FFF;
}

.debug th {
	color: #666;
  background-color: #dbdbdb;
}

.mainoption {
	border:1px solid #999;
  background:#d9d9d9 url(\'../templates/maintenance/images/button_bg.png\') top repeat-x;
  font-weight:bold;
}
.mainoption:hover {
	border:1px solid #666;
	background:#efeded;
  font-weight:bold;
}

.positive{
	color: #008800;
}

.negative{
	color: #F80000;
}

.neutral{
	color: #000000;
}

.absmiddle{
	vertical-align: middle;
	margin-bottom: .25em;
}

 #layer {
  position: absolute;
  background: url(\'../templates/maintenance/images/bg_png.png\');
  left: 0px;
  top: 0px;
  height: 100%;
  width: 100%;
 }

 #inner_layer {
   height: 300px;
   padding: 30px;
   width: 500px;
   margin: auto;
   background-color: #ffffff;
   margin-top: 120px;
   border:1px solid #666;
 }
 
 #inner_layer input[type=button] {
	margin-bottom: 4px;
 }

.none {
border:0px;
background:none;
}

.bi_ok{
	background:url(../images/glyphs/ok.png) no-repeat 2px 2px;
	text-indent:20px;
}
.icon_info {
	background:transparent url(../images/global/info_big.png) center left no-repeat;
}
.icon_ok{
	background:transparent url(../images/global/ok.png) center left no-repeat;
}
.roundbox{
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
}
.errorbox{
	border: 1px solid red;
	background: #FFEFEF;
	padding: 5px;
	margin: 3px;
	color:red;
}
.errorbox div, .greenbox div, .bluebox div {
	padding: 7px 10px 7px 60px;
	background-position: 10px center;
	margin: 10px 0px;
	display:block;
	min-height: 32px;	
}
.errorbox div span, .greenbox div span, .bluebox div span{
	padding: 0px 0px 0px 0px;
	margin: 10px 0px;
	display:inline;
}
.greenbox{
	border: 1px solid green;
	background: #EEFFDF;
	padding: 5px;
	margin: 3px;
	color:black;
}
.bluebox{
	border: 1px solid blue;
	background: #BDD2FF;
	margin: 3px;
	color:black;
}
ul.tabnav { /* general settings */
text-align: left; /* set to left, right or center */
margin: 18px 0 5px 0; /* set margins as desired */
border-bottom: 1px solid #333; /* set border COLOR as desired */
list-style-type: none;
padding: 3px 10px 3px 10px; /* THIRD number must change with respect to padding-top (X) below */
}

ul.tabnav li { /* do not change */
display: inline;
background-color: #efefef; 
}

ul.tabnav li a { /* settings for all tab links */
	padding: 3px 6px; /* set padding (tab size) as desired; FIRST number must change with respect to padding-top (X) above */
	border: 1px solid #333; /* set border COLOR as desired; usually matches border color specified in #tabnav */
	background: #efefef url(\'../templates/maintenance/images/bg_breadcrumb.png\') left;
	margin-right: 1px; /* set additional spacing between tabs as desired */
	text-decoration: none;
	border-bottom: none;
	color: #333;
 	padding-left:5px;
	-webkit-border-top-left-radius: 3px;
-webkit-border-top-right-radius: 3px;
-moz-border-radius-topleft: 3px;
-moz-border-radius-topright: 3px;
border-top-left-radius: 3px;
border-top-right-radius: 3px;
}


ul.tabnav a:hover { /* settings for hover effect */
	background: #fff; /* set desired hover color */
}
ul.tabnav a.active { /* settings for hover effect */
	background: #fff; /* set desired hover color */
	border-bottom:1px solid #fff;
	font-weight:bold;
}

.contentWrapper {
	margin-left: 30px;
	margin-right: 30px;
}';
}
?>