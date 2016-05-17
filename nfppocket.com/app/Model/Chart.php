<?php
class Chart extends AppModel {
	public $actAs = array('Containable');
    public $validate = array(
    //    'intercourse' => array(
    //        'rule' => 'notEmpty'
    //    ),
    //    'any_bleeding' => array(
    //        'rule' => 'notEmpty'
   //     ),
        'kind_of_discharge' => array(
            'rule' => 'notEmpty')
//add rule here for consistancy requirement
       // 'consistancy' => array(
        	//'rule' => array('multiple', array(
            	//'min' => 1
       // )))
    );
}