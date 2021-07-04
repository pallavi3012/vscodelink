<?php

class custom extends Exception {
    public function errorMessage() {
    
      $errorMessage = 'E-Mail address';
      return $errorMessage;
    }
  }
  
  $name = 'My name is';
  
  try {
    
    if(strpos($name, 'name') !== FALSE) {
        throw new Exception('$email is an example e-mail');
      }
  }
  
  catch (custom $e) {
    echo $e->errorMessage();
  }

  
  ?>

