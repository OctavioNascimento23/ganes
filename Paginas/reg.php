<?php
include 'connect.php';
// include'checkLogin.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['street'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "../imagensUsers/".$_FILES['f1']['name']);
    $img="../imagensUsers/".$_FILES['f1']['name'];
    }
    $i="insert into reg(name,username,password,image,street,gender)value('$t','$u','$p','$c','$img','$g')";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome
                        <input type="text" name="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nome de Usuário
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        Senha
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        Endereço
                        <select name="city">
                            <option value="">Selecione</option>
                            <?php 
                                $sqlCity = mysqli_query($con, "select * from city");

                                while($item = mysqli_fetch_assoc($sqlCity))
                                {
                                    $nomeItem = $item['nameCity'];
                                    $idCity = $item['idCity'];
                                    echo"  <option value=$nomeItem> $nomeItem </option>";
                                }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                        <input type="radio"name="gen" id="gen" value="male">Masculino
                        <input type="radio" name="gen" id="gen" value="female">Feminino
                    </td>
                </tr>
                <tr>
                    <td>
                        Imagem
                        <input type="file" name="f1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                    
                    <td>
                        <a href="login1.php"> Login</a>
                    </td>
                </tr>
            </table>
    </body>
</html>
