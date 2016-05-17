<!-- File: /app/View/Charts/index.ctp -->
<!--JMJ-->

<!-- Header area with logout button and different views for Chart and list-->
<h1>Chart Entries for '<?php echo $username ?>' <span id="logout"><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></span><br />
<span style="float:left;font-size:75%;" class=""><?php echo $this->Html->link('Scroll', array('action' => 'index')); ?>|<?php echo $this->Html->link('Chart', array('action' => 'chartview')); ?>|<?php echo $this->Html->link('List', array('action' => 'listview')); ?></span></h1>
<br />
<div style="border: 1px solid #999;border-radius:10px;background:pink;text-decoration:none;font-weight:bold;height:25px;padding:10px;text-align:center;"><?php echo $this->Html->link('Add Chart Entry', array('action' => 'add')); ?></div>
<p style="text-align:center;color:grey;"><small>List View</small></p>
<div id="myDiv" style="width:100%;overflow-x:scroll;white-space:nowrap;-webkit-overflow-scrolling: touch;font-size:50%;">
<table style="width:100%;">
    <tr>
    	<th>Date</th>
        <th>Intercourse</th>
        <th>Any Bleeding</th>
        <th>Kind of discharge</th>
        <th>Consistancy</th>
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($charts as $chart): ?>
    <tr>
        <td><?php echo date('m/d/Y', strtotime($chart['Chart']['created'])); ?></td>
        <td><?php echo $chart['Chart']['intercourse']; ?></td>
        <td class="bleeding-<?php echo $chart['Chart']['any_bleeding']; ?>">
        <?php echo $chart['Chart']['any_bleeding']; ?></td>
        <td class="discharge-<?php echo $chart['Chart']['kind_of_discharge']; ?>">
        <?php echo $chart['Chart']['kind_of_discharge']; ?></td>
        <td><?php echo $chart['Chart']['consistancy']; ?></td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $chart['Chart']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $chart['Chart']['id'])); ?>
        </td>
        
    </tr>
    <?php endforeach; ?>

</table>
</div>