<?php 
    if(isset($_POST["login"])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    require_once ('conexao.php');    
      
    $sql = conexao::getConn()->prepare("select * from USUARIO where username = :email and password = :senha");
    //echo $sql;
    $sql->bindValue(':email',$email);
    $sql->bindValue(':senha',$senha);



    $sql->execute();
				if ($sql->rowCount()>=1) {	
					//Usuario cadastrado com sucesso	
					alert('Email ou senha incorreto.');
				}
        
    }
      
?>
