<html>
    <head>
        <title>Haras Jacuma</title>
    </head>
   
    <body>
        <?php
                 
            
        require 'banco.php';
           
            session_start();
           
            $banco=new banco();
           
            //$banco->conectarBanco();
            /*
            $login = $_POST['login'];      
            $senha = $_POST['senha'];
           
            $_SESSION['nome']="";
            $_SESSION['email']="";
           
           
            if(($login==="admin")&&($senha==="123")){
                $_SESSION['nome']="Admistrador";
                $_SESSION['email']=$login;
                header('location: homeAdmin.php');
            }
           
            if( ($_SESSION['nome']==="")&&($_SESSION['email']==="")){
                //pessoa
                $tabela="pessoa";
                $pesquisa="*";

                $resultado=$banco->pesquisar($pesquisa, $tabela);

                if($resultado==NULL){
                    echo "Problema no comando SQL, erro ".  mysql_error();
                } else{
                      while($registro = mysql_fetch_array($resultado))
                      {
                          if(($registro['email']===$login)&&($registro['senha']===$senha)){
                              $_SESSION['nome']=$registro['nome'];
                              $_SESSION['email']=$registro['email'];
                              header('location: condHome.php');
                          }
                      }
                 }
            }
             //funcionario
            if( ($_SESSION['nome']==="")&&($_SESSION['email']==="")){
                $tabela="funcionario";
                $pesquisa="*";

                $resultado=$banco->pesquisar($pesquisa, $tabela);

                if($resultado==NULL){
                    echo "Problema no comando SQL, erro ".  mysql_error();
                } else{
                      while($registro = mysql_fetch_array($resultado))
                      {
                          if(($registro['email']===$login)&&($registro['senha']===$senha)){
                              $_SESSION['nome']=$registro['nome'];
                              $_SESSION['email']=$registro['email'];  
                              header('location: homeFunc.php');
                          }
                      }
                 }
            }
           
            if( ($_SESSION['nome']==="")&&($_SESSION['email']==="")){
                $_SESSION['nome']="erro";
                $_SESSION['senha']="erro";
                header('location: indexErro.php');
            }
           */
         ?>
    </body>
</html>


