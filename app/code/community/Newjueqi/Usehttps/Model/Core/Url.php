<?php
/**
 * main controller for generate giftcard
 * @copyright   Copyright(c) 2012
 * @author      jeff zeng(h6k65@126.com)
 * @version     1.0
 */

class Newjueqi_Usehttps_Model_Core_Url extends Mage_Core_Model_Url
{
 
    /**
     * Build url by requested path and parameters
     *
     * @param   string|null $routePath
     * @param   array|null $routeParams
     * @return  string
     */
    public function getUrl($routePath = null, $routeParams = null)
    {

        //if it has set $routeParams,then add  '_secure' => true
        if( is_array($routeParams) && !isset($routeParams['_secure']) ){
        	$routeParams['_secure']=true;
        }else{
        	
        	//set $routeParams to use https
        	$routeParams=array('_secure'=>true);
        }
        
        return parent::getUrl($routePath,$routeParams);
      
    }

 
}
