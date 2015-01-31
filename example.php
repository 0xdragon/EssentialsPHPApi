<?php
  
    // ENTER (ONCE JOINED) PLAYER'S USERNAME
  
    $username = 'pascalgerrist';
  
  
    // INCLUDE CLASS  
    include 'EssentialsPHPApi.php';
    
    //WRITE VALUES
    echo $EssentialsPHPApi->writeArg($username, 'money', 34543434);
    
    //READ VALUED
    echo $EssentialsPHPApi->readArg($username, 'money');
    
?>
