<?php

class ProductenController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function clientAction()
    {       
        //$client= new Zend_Soap_Client('http://192.168.33.95/producten/server?wsdl');
        $client= new Zend_Soap_Client('http://adv1302.mediacampus.be/producten/server?wsdl');
        $client->setSoapVersion(SOAP_1_1); // normaal is het 1.2  voor Zend
        $client->addProducts('titel','omschrijving', 15);        
    }

    public function serverAction()
    {
        $this->_helper->layout()->disableLayout();        
        $this->_helper->viewRenderer->setNoRender(true);
        
        $wsdl = $this->_getParam('wsdl');
        if (isset($wsdl)) {
            $server = new Zend_Soap_AutoDiscover();
            $server->setClass('Application_Model_Producten');
            $server->handle();       
            
        }
        else {
            $server = new Zend_Soap_Server();
            $server->setClass('Application_Model_Producten');
            $server->setObject(new Application_Model_Producten());
            $server->handle();
        }
        
    }


}





