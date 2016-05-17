<!-- File: /app/View/Charts/index.ctp -->
<!--JMJ-->
<h1>Chart Entries for '<?php echo $user_id ?>'</h1>

<div id="logout"><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></div>
<p><?php echo $this->Html->link('Add Chart Entry', array('action' => 'add')); ?></p>
<table>
    <tr>
    	<th>Date</th>
        <th>Intercourse</th>
        <th>Any Bleeding</th>
        <th>Kind of discharge</th>
        <th>Consistancy</th>
        <th>Date of discharge</th>
        <th>Time of discharge</th>
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($charts as $chart): ?>
    <tr>
        <td><?php echo $chart['Chart']['created']; ?></td>
        <td><?php echo $chart['Chart']['intercourse']; ?></td>
        <td class="bleeding-<?php echo $chart['Chart']['any_bleeding']; ?>">
        <?php echo $chart['Chart']['any_bleeding']; ?></td>
        <td class="discharge-<?php echo $chart['Chart']['kind_of_discharge']; ?>">
        <?php echo $chart['Chart']['kind_of_discharge']; ?></td>
        <td><?php echo $chart['Chart']['consistancy']; ?></td>
        <td><?php echo $chart['Chart']['date_of_discharge']; ?></td>
        <td><?php echo $chart['Chart']['time_of_discharge']; ?></td>
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