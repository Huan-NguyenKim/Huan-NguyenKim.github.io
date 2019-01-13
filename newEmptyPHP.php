<!DOCTYPE html>
<html>
    <head>
       <title>Test</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="site.css">

</head>
<body>
 
<?php

    function setDefault($default=10)  //the default value is 10
    {
        // First, we want to make the code as clear as possible. So we create a string named "message"
        // This "message" string contains what we want to show in the output, which is "Hello World!"
        $message = " Hello World! ";
          
        //The given question is clearly involed in some kind of loops. I chose For loop because it is clear and easy to test.
        for( $a = 1; $a<=$default; $a++)
        {
           echo $message . "</br>";
        }
    }
    
    // The default value is 10. However, we are not necessarily limited by the default value.
    //Therefore, we can create a string to help us to have more choices for output.
    $returnSpecial = setDefault();
       
?>