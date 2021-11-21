<?php 
$message = "Divine a number in range from 0 .. 100!"; 

if (isset($_POST["ugadat"])) { 
 
    $fuckednumber = $_POST["fuckednumber"];  
 
    $hidden_fuckednumber = $_POST["hidden_fuckednumber"];  
     

    if ($fuckednumber < $_POST["hidden_fuckednumber"]) {  
        $message = "The number is greater  $fuckednumber";  
    }  
 
    elseif ($fuckednumber > $_POST["hidden_fuckednumber"]) {  
        $message = "The number is less $fuckednumber"; 
    } elseif ($fuckednumber == $_POST["hidden_fuckednumber"]) { 
        $message = "Cool - victory! <br/> I came up with a new number!"; 
        $hidden_fuckednumber = rand(0, 100); 
    } 
} else { 
    $fuckednumber = 0; 
    $hidden_fuckednumber = rand(0, 100); 
} 
?>
<html>
    <head>Find the number</title>
    </head>
</html>
<body>
    <h2><?php echo $message; ?></h2>
    <form method="post">
        <input type="text" value="<?php echo $fuckednumber ?>" name="fuckednumber" /> 

        <input type="submit" name="ugadat" value="Divine" /><br/>

        <input type="hidden" name="hidden_fuckednumber" value="<?php echo $hidden_fuckednumber ?>" />
    </form>
</body>
</html>