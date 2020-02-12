<?php 
    require_once ('conexao.php');   
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data_nascimento = $_POST["data_nascimento"];
    $partesData= explode("/",$data_nascimento);
    $dataFormat=$partesData[2]."-".$partesData[1]."-".$partesData[0];

 
      
    $sql = conexao::getConn()->prepare("insert into usuario(nome,email,senha,sexo,data_nascimento) values(:nome,:email,:senha,:sexo;:data_nascimento);");
    //echo $sql;
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':sexo',$sexo);
    $sql->bindValue(':data_nascimento',$dataFormat);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':senha',$senha);
    $sql->execute();
				if ($sql->rowCount()>=1) {	
                    //Usuario cadastrado com sucesso	
                    
					header("Location:index.html");
				}
        
    
    
?>
