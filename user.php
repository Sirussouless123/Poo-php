<?php 

namespace Class\Users {

    

    Class User{
           
        private int $id;
       public function __construct()
       {
             $this->id = rand();
       }
    }

};
       