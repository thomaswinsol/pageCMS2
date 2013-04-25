<?php

class Application_Model_Producten
{

 
/**
 * Add product
 * @param string $titel
 * @param string $omschijving
 * @param float $prijs
 * @return object $product
 */
        public function addProducts($titel,$omschijving,$prijs)
        {
            var_dump(func_get_args);
            return func_get_args();
            //$product = stdClass();
            //return $product;
            
        }   
        
        /**
         * Delete the product by id
         * @param int $id 
         * @return boolean
         * 
         */
        public function deleteProducts($id)
        {
            return true;
        }
        
        /**
         * 
         * @param int $id
         * @param string $titel
         * @param string $omschrijving
         * @param float $prijs
         * @return object
         */
        public function modProducts($id, $titel, $omschrijving, $prijs)                 
        {
            $product  = stClass();
            return $product;
        }

}

