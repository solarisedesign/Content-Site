<?php /* SVN FILE: $Id: form.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<?php 
$action = in_array($this->action, array('add', 'admin_add'))?'Add':'Edit'; 
$action = Inflector::humanize($action); 
echo $form->create(); 
echo $form->inputs(array( 
	'legend' => $action . ' CustomerAccount', 
	'id',
	'customer_id' => array('empty' => true),
	'balance',
	'pending',
)); 
echo $form->end('Submit'); 
?>