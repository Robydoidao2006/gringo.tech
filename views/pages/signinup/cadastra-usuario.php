<?php
   require_once '../../../db/conection.php';
   
   $nome=$_POST['name'];
   $nickName=$_POST['nickName'];
   $email=$_POST['email'];
   $senha=$_POST['senha'];
   $dataCadastro = date("Y-m-d");
   
    try{
        $conection = new Conection();
        $conection->conectar();
        $sql="insert into users values(default,'$nome','$nickName','$email','$senha','https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1','$dataCadastro')";
        $conection->executarSql($sql);
        print("<script>alert('$nickName cadastrado com sucesso.');</script>");
        
    } catch (Exception $ex) {
        print("<script>alert('Não foi cadastrado houve erro.');</script>");
        print("Erro: ".$ex->getMessage());
    } finally {
        $conection=null;
        print("<meta http-equiv='refresh' content=1;url='signinup.php'>");
    }    
   
   