<?php 
	defined('_JEXEC') or die('Restricted Access');
	
	jimport('joomla.application.component.view');
	
	class HelloWorldViewHelloWorld extends JViewLegacy{
		
		function display($tpl = null){
			$this->msg =  $this->get('Msg');
			
			if(count($errors = $this->get('Errors'))){
				JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
			}
			
			parent::display($tpl);
						
		}
		
	}
	
?>