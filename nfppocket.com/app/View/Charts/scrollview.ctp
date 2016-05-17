<!-- File: /app/View/Charts/index.ctp -->
<!--JMJ-->

<!-- Header area with logout button and different views for Chart and list-->
<h1>Chart Entries for '<?php echo $username ?>' <span style="float:right;" id="logout"><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></span></h1>
<div style="text-align:center;font-size:100%;" class=""><?php echo $this->Html->link('Scroll', array('action' => 'index')); ?>|<?php echo $this->Html->link('Chart', array('action' => 'chartview')); ?>|<?php echo $this->Html->link('List', array('action' => 'listview')); ?></div>
<br />

<div style="border: 1px solid #999;border-radius:10px;background:pink;text-decoration:none;font-weight:bold;height:25px;padding:10px;text-align:center;"><?php echo $this->Html->link('Add Chart Entry', array('action' => 'add')); ?></div>
<p style="text-align:center;color:grey;"><small>Scroll View</small></p>
<div id="myDiv" style="width:100%;height:140px;overflow-x:scroll;white-space:nowrap;-webkit-overflow-scrolling: touch;">

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($charts as $chart): ?>
    <div style="width:112px;border:1px solid black;display:inline-block;text-align:center;font-size:80%;" class="discharge-<?php echo $chart['Chart']['kind_of_discharge']; ?> bleeding-<?php echo $chart['Chart']['any_bleeding']; ?>">
    	<?php echo date('m/d/Y', strtotime($chart['Chart']['created'])); ?><br />
		<?php echo $chart['Chart']['any_bleeding']; ?><br />
		<?php echo $chart['Chart']['kind_of_discharge']; ?>
		<?php echo $chart['Chart']['consistancy']; ?>
		<?php echo $chart['Chart']['how_often']; ?><br />
		<?php echo $chart['Chart']['intercourse']; ?><br />
		<?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $chart['Chart']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $chart['Chart']['id'])); ?>
	</div>
    <?php endforeach; ?>

</div>


<script type="text/javascript">
      window.onload = function () {
        document.getElementById("myDiv").scrollLeft = document.getElementById("myDiv").scrollWidth;
      }
    </script>