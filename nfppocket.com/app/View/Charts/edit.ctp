<!-- File: /app/View/Charts/edit.ctp -->

<h1 id="chartadd">Edit Chart Entry</h1>
<?php
echo $this->Form->create('Chart');
echo $this->Form->input('intercourse', array(
	'options' => array('' => 'None', 'I' => 'Yes!'/*'Yesterday' => 'Yesterday', 'Last Night' => 'Last Night', 'Today' => 'Today', 'Tonight' => 'Tonight'*/)));
echo $this->Form->input('any_bleeding', array(
	'options' => array(
	'' => 'None', 
	'H' => 'Heavy Flow', 
	'M' => 'Moderate Flow', 
	'L' => 'Light Flow', 
	'VL' => 'Very Light Flow (spotting)', 
	'B' => 'Brown (or black) Bleeding')));
echo $this->Form->input('kind_of_discharge', array(
	'options' => array(
	'0' => 'Dry', 
	'2' => 'Damp Without Lubrication', 
	'2W' => 'Wet Without Lubrication', 
	'4' => 'Shiny Without Lubrication', 
	'6' => 'Sticky (1/4 in|0.5cm)', 
	'8' => 'Tacky (1/2-3/4 in|1.0-2.0cm)', 
	'10' => 'Strechy(1in+|2.5cm or more)', 
	'10DL' => 'Damp With Lubrication', 
	'10SL' => 'Shiny With Lubrication', 
	'10WL' => 'Wet With Lubrication')));
echo $this->Form->input('consistancy', array(
	'options' => array(
	'' => 'None', 
	'B' => 'Brown (or black) bleeding', 
	'C' => 'Cloudy (white)', 
	'C/K' => 'Cloudy/clear', 
	'G' => 'Gummy (gluey)', 
	'K' => 'Clear', 
	'L' => 'Lubricative', 
	'P' => 'Pasty (creamy)', 
	'Y' => 'Yellow (even pale yellow)')));
echo $this->Form->input('how_often', array(
	'options' => array(
	'' => 'None',
	'1x' => 'Once',
	'2x' => 'Twice',
	'3x' => 'Three Times',
	'AD' => 'All Day')));
echo $this->Form->input('count', array(
	'options' => array(
	'' => 'Not Peak',
	'P' => 'Peak Day',
	'1' => 'Count 1',
	'2' => 'Count 2',
	'3' => 'Count 3')));
echo $this->Form->input('note', array('type' => 'textarea'));
echo 'If you need to log for a previous day, use the date and time below:';
//echo $this->Form->input('date_of_discharge');
//echo $this->Form->input('time_of_discharge');
echo $this->Form->input('created');
echo $this->Form->input('user_id', array('type' => 'hidden'));
echo '<br /><br />';
echo $this->Form->end('Update this Sign');
?>