<?php 

class Cart 
{
     
     public function __construct(
        public int $quantity, 
        private float $totalPrice){
         
     }

       public function getTotalPrice():float{
            return $this->totalPrice;
       }

       public function setTotalPrice( float $totalPrice):void{
          $this->totalPrice = $totalPrice;

       }
          public function discount(float $remise):void {
                 $this->totalPrice -= ($this->totalPrice * $remise )/ 100;
          }


}