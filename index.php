<?php 
$message = "�������� ����� � ���������  �� 0 �� 100!"; //������������� ��������� ��-��������� 

if (isset($_POST["ugadat"])) { //���� ������ ���� ����������� �� ������ 
   //� ���������� $chislo ���������� ������ ���������� �� ���������� ���� � ������ chislo 
    $chislo = $_POST["chislo"];  
    //� ���������� $hidden_chislo ���������� ������ ����������  
    //�� �������� ���� � ������ $hidden_chislo 
    $hidden_chislo = $_POST["hidden_chislo"];  
     
   //���� ����� �� ���������� ���� ������ ����������� �����, �� ������� ��������� 
    if ($chislo < $_POST["hidden_chislo"]) {  
        $message = "��������� ����� �������� ������ $chislo";  
    }  
    //���� ����� �� ���������� ���� ������ ����������� �����, �� ������� ��������� 
    elseif ($chislo > $_POST["hidden_chislo"]) {  
        $message = "��������� ����� �������� ������ $chislo"; 
    } elseif ($chislo == $_POST["hidden_chislo"]) { //���� ����� �����, �� �� �������!! 
        $message = "���! �� ��������! <br/> �������� ����� �����!"; 
        $hidden_chislo = rand(0, 100); //���������� ����� �����! 
    } 
} else { //���� ������ �� ����� �� ���� ����������� 
    $chislo = 0; //������������� �������� ���������� ���� ��-���������  
    $hidden_chislo = rand(0, 100); //���������� ����� 
} 
?>
<html>
    <head>
        <title>������ ������ OX2.ru - ���� ������ �����</title>
    </head>
</html>
<body>
    <h2><?php echo $message; ?></h2>
    <form method="post">
        <input type="text" value="<?php echo $chislo ?>" name="chislo" /> 

        <input type="submit" name="ugadat" value="�������" /><br/>

        <input type="hidden" name="hidden_chislo" value="<?php echo $hidden_chislo ?>" />
    </form>
</body>
</html>