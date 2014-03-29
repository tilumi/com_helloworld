<?php
defined ( '_JEXEC' ) or die ( 'Restricted Access' );

jimport ( 'joomla.application.component.modelitem' );
class HelloWorldModelHelloWorld extends JModelItem {
	protected $msgs;
	
	public function getTable($type= 'HelloWorld', $prefix = 'HelloWorldTable', $config=array()){
		return JTable::getInstance($type,$prefix, $config);
	}
	
	public function getMsg($id = 1) {
		if(!is_array($this->msgs)){
			$this->msgs = array();
		}
		if(!isset($this->msgs[$id])){
			$jinput = JFactory::getApplication()->input;
			$id = $jinput->get('id',1, 'INT');
			$table = $this->getTable();
			$table->load($id);
			$this->msgs[$id] = $table->greeting;
		}
		
		return $this->msgs[$id];
	}
}