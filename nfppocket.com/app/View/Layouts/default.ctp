<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		NFP Pocket
	</title>
	
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<meta name="apple-mobile-web-app-status-bar-style"
    content="black-translucent" />

	
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		//added
		//echo $this->Html->css('stylesheet');
		echo $this->Html->meta(
    		'keywords',
    		'nfp, Creighton, charting, pocket, iPhone');
    	echo $this->Html->meta(
    		'description',
    		'NFP Pocket is used for charting the Creighton Model of natural family planning, for avoiding pregnancy or achieving.');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
	
	<!--added-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">	
<!--	<link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" />-->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<!--	<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>-->
	
	<style>
	
	html {
	height: 100%;
	bottom: 100px;
}
/** General Style Info **/
	body {
	background: #96AEE6;
	color: #fff;
	font-family: Georgia, 'lucida grande',verdana,helvetica,arial,sans-serif;
	font-size:100%;
	margin: 0;
}
	
	h1.welcome
	{
	margin: 0;
	height: 50px;
	padding: 0;
	}
	ul.welcome
	{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	text-align: center;
	}
	li.welcome
	{
	float: left;
	display: block;
	margin: 0px;
	height: 50px;
	width: 20%;
	text-align: center;
	}
	a.welcome:link,a.welcome:visited
	{
	display:block;
	font-weight:bold;
	border: 1px solid #999;
	border-top: 5px solid #999;
	color:#FFFFFF;
	background-color:DarkSlateBlue;
	text-align:center;
	padding:0px;
	margin: 0px;
	height: 50px;
	text-decoration:none;
	text-transform:uppercase;
	}
	a.welcome:hover,a.welcome:active
	{
	background-color:#7A991A;
	}
	#content{
	background: #fff;
	border-radius: 5px;
	clear: both;
	color: #333;
	height: 100%;
	bottom: 60px;
	padding: 15px 5px 40px 5px;
	box-shadow: 0px 3px 5px #333;
}
	#addbtn {
	background: #b84db8;
}
	a#addbtn:link, a#addbtn:visited {
	text-decoration: none;
	font-size: 400%;
}
	div#scroller {
	box-shadow: inset 0px 3px 5px #888;
	-moz-box-shadow: inset 0px 3px 5px #888;
	padding:0px 2px 0px 2px;
	height: 100%;
	overflow-x:scroll; !important;
	-moz-overflow-x:scroll; !important;
	-webkit-overflow-x:scroll; !important;
	white-space:nowrap; !important;
	overflow-scrolling: touch;
	-moz-overflow-scrolling: touch;
	-webkit-overflow-scrolling: touch;
	z-index: 2;
}
	#footer {
	clear: both;
	font-size: 75%;
	padding: 5px 0px 50px 0px;
	text-align: center;
	overflow: hidden;
}
	#footer div {
	position: fixed;
	padding: 0px 0px 0px 0px;
	text-align: center;
	width: 100%;
	z-index: 10;
	bottom: 0;
	left: 0;
}


.fifperc {
	width: 150%;
	font-size: 150%;
}
	</style>
</head>
<body>
	<div id="container">
		<div id="header">
			<!--
			removed the old cakephp header 20130814
			
			<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>-->
			
			<h1 class="welcome" style="line-height:75px;"><?php echo $this->Html->link('NFP Pocket: Creighton Model', 'http://nfppocket.com'); ?></h1>
		</div>
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
			
			
			<br />
			<?php echo $this->Html->link('About', array('controller' => 'charts', 'action' => 'about')); ?> | 
			<?php echo $this->Html->link('NFP Pocket 2013', 'http://nfppocket.com') ?>
			<br />
			<p>"Children are blessings from the Lord."<br />-Psalm 127:3</p>
			

		</div>
		
		<div id="footer">
			
			<div style="text-align:center; font-size:90%;">
			<ul class="welcome">
			<li class="welcome"><a class="welcome" href="http://www.nfppocket.com">Home</a></li>
			<li class="welcome"><a class="welcome" href="http://www.andrewmueller.co/category/nfp-pocket/" target="_blank">News</a></li>
			<li class="welcome" style="background:#b84db8;"><?php echo $this->Html->link('+', array('action' => 'add'), array('id' => 'addbtn', 'class' => 'welcome')); ?></li>
			<li class="welcome"><a class="welcome" href="mailto:andrew@andrewmueller.co">Contact</a></li>
			<li class="welcome"><a class="welcome" href="http://www.nfppocket.com/charts">Chart</a></li>
			</ul>
			</div>
			
			
			
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			 
			
			  ga('create', 'UA-40121639-2', 'nfppocket.com');
			  ga('send', 'pageview');
			 
			
			</script>
			
			
			
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<!--<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>
			<script src="js/jquery.anythingzoomer.min.js"></script> 
			<script> 
			  $(function(){ 
			    $("#zoom").anythingZoomer({
			    	// content areas 
  					smallArea   : 'small',    // class of small content area; the element with this class name must be inside of the wrapper 
  					largeArea   : 'large',    // class of large content area; this class must exist inside of the wrapper. When the clone option is true, it will add this automatically 
 					 clone       : true,      // Make a clone of the small content area, use css to modify the style 
 
					  // appearance 
					  overlay     : false,      // set to true to apply overlay class "az-overlay"; false to not apply it 
					  speed       : 100,        // fade animation speed (in milliseconds) 
					  edge        : 30,         // How far outside the wrapped edges the mouse can go; previously called "expansionSize" 
					  offsetX     : 0,          // adjust the horizontal position of the large content inside the zoom window as desired 
					  offsetY     : 0,          // adjust the vertical position of the large content inside the zoom window as desired 
 
					  // functionality 
					  switchEvent : 'dblclick', // event that allows toggling between small and large elements - default is double click 
					  delay       : 0,          // time to delay before revealing the zoom window 
 
					  // edit mode 
					  edit        : false,      // add x,y coordinates into zoom window to make it easier to find coordinates 
 
			    }); 
			  }); 
			</script> 
	-->
			
		</div>
		
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>


<!-- removed from title 20130814
		<?php // echo $cakeDescription ?>:
		<?php // echo $title_for_layout; ?>   -->
		
<!-- removed from footer 20130814
		<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);*/
			?>			-->