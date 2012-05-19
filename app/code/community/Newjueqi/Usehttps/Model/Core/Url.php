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

        /*
         use https
         if url show in web browser start with https, all urls in the webpage must be start with https,
         for example: if main page is https, but ajax request send in this page is http, then ajax request will fail
                      if main page is http, but ajax request send in this page is https, then ajax request will fail also
            
        */
        if( isset($_SERVER['SERVER_PORT']) && 443==$_SERVER['SERVER_PORT'] ){
           //if it has set $routeParams,then add  '_secure' => true
           if( is_array($routeParams) && !isset($routeParams['_secure']) ){
             $routeParams['_secure']=true;
           }else{      
              //set $routeParams to use https
              $routeParams=array('_secure'=>true);
           }
        }     
        return parent::getUrl($routePath,$routeParams);
      
    }

 
}
