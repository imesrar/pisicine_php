<?php
   abstract class Fighter{
       public $arr;
       public abstract function fight($target);
       function __construct($type){
           $this->arr = $type;
       }
   }
?>