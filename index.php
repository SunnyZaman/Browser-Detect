<!DOCTYPE html> 
<head>      
     <title>How to detect browser using PHP</title>        
    </head>  
    <body>        
        <h1> Display Cross Browsers Compatibility Issues</h1>
                 <?php
                           echo " Trying to detect Browser name... <br/>";
                                     function brdetect(){
                                                         $res = $_SERVER['HTTP_USER_AGENT'];
                                                         echo $res . "<br/><br/>";
                                                        if ( strpos ($res, "Chrome") == true)
                                                            echo "Browser: Google Chrome";
                                                         else if ( strpos ($res, "Firefox") == true)        
                                                               echo "Browser: Firefox";           
                                                         else if ( strpos ($res, "Trident") == true)    
                                                              echo "Browser: Internet Explorer";                      
                                                         else  echo "Browser: unknown"; 
                                                  } 
                      brdetect( );   
                      ?> 
            </body> 
</html>