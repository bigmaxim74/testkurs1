<?php 
$message = "Угадайте число в диапазоне  от 0 до 100!"; //Устанавливаем сообщение по-умолчанию 

if (isset($_POST["ugadat"])) { //Если данные были отправленны на сервер 
   //В переменную $chislo записываем данные полученные из текстового поля с именем chislo 
    $chislo = $_POST["chislo"];  
    //В переменную $hidden_chislo записываем данные полученные  
    //из скрытого поля с именем $hidden_chislo 
    $hidden_chislo = $_POST["hidden_chislo"];  
     
   //Если число из текстового поля меньше загаданного числа, то выводим сообщение 
    if ($chislo < $_POST["hidden_chislo"]) {  
        $message = "Загаданое число немножко больше $chislo";  
    }  
    //Если число из текстового поля больше загаданного числа, то выводим сообщение 
    elseif ($chislo > $_POST["hidden_chislo"]) {  
        $message = "Загаданое число немножко меньше $chislo"; 
    } elseif ($chislo == $_POST["hidden_chislo"]) { //Если числа равны, то мы угадали!! 
        $message = "Ура! Вы победили! <br/> Загадано новое число!"; 
        $hidden_chislo = rand(0, 100); //Загадываем новое число! 
    } 
} else { //Если данные из формы не были отправленны 
    $chislo = 0; //Устанавливаем значение текстового поля по-умолчанию  
    $hidden_chislo = rand(0, 100); //Загадываем число 
} 
?>
<html>
    <head>
        <title>Дизайн студия OX2.ru - игра Угадай число</title>
    </head>
</html>
<body>
    <h2><?php echo $message; ?></h2>
    <form method="post">
        <input type="text" value="<?php echo $chislo ?>" name="chislo" /> 

        <input type="submit" name="ugadat" value="Угадать" /><br/>

        <input type="hidden" name="hidden_chislo" value="<?php echo $hidden_chislo ?>" />
    </form>
</body>
</html>