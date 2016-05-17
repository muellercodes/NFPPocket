<!-- File: /app/View/Charts/index.ctp -->
<!--JMJ-->
<!-- Header area with logout button and different views for Chart and list-->
<h1>Chart Entries for '<?php echo $username ?>' <span id="logout" onclick="logout()"><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></span><br />
<p style="text-align:center;color:grey; margin:5px;"><small>Chart View</small></p><br />

<button>Change Size</button>

<div class="change" id="scroller" style="
	box-shadow: inset 0px 3px 5px #888;
	-moz-box-shadow: inset 0px 3px 5px #888;
	padding:0px 3px 0px 3px;
	width: 99%;
	overflow-x:scroll; !important;
	-moz-overflow-x:scroll; !important;
	-webkit-overflow-x:scroll; !important;
	white-space:nowrap; !important;
	overflow-scrolling: touch;
	-moz-overflow-scrolling: touch;
	-webkit-overflow-scrolling: touch;
	z-index: 2;">

<!-- Here's where we loop through our $posts array, printing out post info -->
	<?php $count = 1; ?>
    <?php foreach ($charts as $chart):
    	if ($chart['Chart']['any_bleeding']!=='') {
		$count = $count + 1;
		} else if ($chart['Chart']['any_bleeding']=='') {
		$count = 0;
		$count = $count + 1;
		};
		if ($count == 2) {
			echo '<br />';
		};
     ?>
    
   

    <div style="-webkit-text-size-adjust:none; margin:0;padding:0;width:7em; border:1px solid black;display:inline-block;text-align:center;font-size:.5em;" class="discharge-<?php echo $chart['Chart']['kind_of_discharge']; ?> bleeding-<?php echo $chart['Chart']['any_bleeding']; ?> change">
    	<?php echo date('m/d/Y', strtotime($chart['Chart']['created'])); ?><br />
		<div style="font-size:1.5em; margin:0; padding:0;">
		<span class="countspan"><?php echo $chart['Chart']['count']; ?></span>
		<?php echo $chart['Chart']['any_bleeding']; ?><br />
		<?php echo $chart['Chart']['kind_of_discharge']; ?>
		<?php echo $chart['Chart']['consistancy']; ?>
		<?php echo $chart['Chart']['how_often']; ?></div>
		<?php echo $chart['Chart']['intercourse']; ?><br />
		<?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $chart['Chart']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $chart['Chart']['id'])); ?>
	</div>
	<?php  ?>
    <?php endforeach; ?>
	<!--count of 35 -->
	<br />
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">1</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">2</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">3</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">4</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">5</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">6</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">7</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">8</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">9</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">10</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">11</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">12</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">13</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">14</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">15</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">16</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">17</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">18</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">19</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">20</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">21</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">22</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">23</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">24</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">25</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">26</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">27</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">28</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">29</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">30</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">31</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">32</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">33</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">34</div>
	<div class="count35" style="-webkit-text-size-adjust:none; margin:0;padding:0;width:3.5em;border:1px solid black;display:inline-block;text-align:center;font-size: 1em;">35</div>
</div>
<br />
<button>Change Size</button>
<br />
<script>
$(document).ready(function() {
	$("button").click(function() {
		$("div.change").toggleClass("fifperc");
	});
});

function logout() {
	localStorage.removeItem('password');
}

</script>