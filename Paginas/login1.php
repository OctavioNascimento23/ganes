<?php

include'../connect.php';

if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "select * from reg where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:index.php');
   }
   else{
       echo 'Nome de usuário ou senha não existem';
   }
  
}
?>
<html>
      
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="POST" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td>
                        Nome de usuário
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
                        <input type="submit" name="sub" value="Login">                      
                        <button><a href="reg.php">Registrar-se</a> </button>                      
                    </td>                        
                </tr>
            </table>
    </body>
</html>
