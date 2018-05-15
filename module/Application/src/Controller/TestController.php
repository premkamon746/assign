<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Models\Calculator;

class TestController extends AbstractActionController
{
	
	private $cal;

	function __construct(){
		$this->cal = new Calculator();

	}

    public function indexAction()
    {
        return new ViewModel();
    }

    public function SeriesAction()
    {
    	$value = (int) $this->params()->fromRoute('value', 0);
    	$result = $this->cal->findingX($value);
 		return new ViewModel(["result"=>$result]);
    }


   
}
