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
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		//added
		//echo $this->Html->css('stylesheet');
		echo $this->Html->meta(
    		'keywords',
    		'nfp, charting, pocket, Creighton, iPhone');
    	echo $this->Html->meta(
    		'description',
    		'NFP Pocket is used for charting the Creighton Model of natural family planning, for avoiding pregnancy or achieving.');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
	
	<!--added -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<!--	<link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script> -->
	
	<style>
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
	width: 25%;
	text-align: center;
	}
	a.welcome:link,a.welcome:visited
	{
	display:block;
	font-weight:bold;
	height: 10%;
	font-size: 85%;
	border: 1px solid #999;
	color:#FFFFFF;
	background-color:#98bf21;
	text-align:center;
	padding:0px;
	margin: 0px;
	text-decoration:none;
	text-transform:uppercase;
	}
	a.welcome:hover,a.welcome:active
	{
	background-color:#7A991A;
	}
	
	</style>
</head>
<body>
	<div id="container">
		<div id="header">
			<!--
			removed the old cakephp header 20130814
			
			<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>-->
			
			<h1><?php echo $this->Html->link('NFP Pocket: Creighton Model', 'http://nfppocket.com'); ?></h1>
			<div style="text-align:center;">
			<ul class="welcome">
			<li class="welcome"><a class="welcome" href="http://www.nfppocket.com">Home</a></li>
			<li class="welcome"><a class="welcome" href="http://www.andrewmueller.co/category/nfp-pocket/" target="_blank">News</a></li>
			<li class="welcome"><a class="welcome" href="mailto:andrew@andrewmueller.co">Contact</a></li>
			<li class="welcome"><a class="welcome" href="http://www.nfppocket.com/charts">Chart</a></li>
			</ul>
			</div>
			
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		
		<div id="footer" style="text-align:center;">
			
			
			
			<?php echo $this->Html->link('About', array('controller' => 'charts', 'action' => 'about')); ?> | 
			<?php echo $this->Html->link('NFP Pocket 2013', 'http://nfppocket.com') ?>
			<br />
			<p>"Children are blessings from the Lord."<br />-Psalm 127:3</p>
			
			

			
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			 
			
			  ga('create', 'UA-40121639-2', 'nfppocket.com');
			  ga('send', 'pageview');
			 
			
			</script>
			
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script src="http://www.bonsaikazui.com/js/vendor/zoomooz/jquery.zoomooz.min.js"></script>
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