<?php

class DesignCollective_InfiniteScroll_AjaxController extends Mage_Core_Controller_Front_Action
{
   public function indexAction()
	{
		echo("Here");
	    $this->loadLayout(false);
	    $this->renderLayout();
	}

   public function mymethod ()
   {
     echo 'test mymethod';
    }
}