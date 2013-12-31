<html>
    <head>
        <title>GuaraGas</title>
    </head>
   
    <body>
        <?php
            
     include("conexao.class.php");
echo "1 ";
#instanciando o objeto
$minhaConexao = new Conexao();
echo "2 ";
#chamada ao metodo open que abra a conexao
$minhaConexao->open();
echo "3 ";
#verificando o status da conexao
$minhaConexao->statusCon();
echo "4 ";
#encerrando a conexao
$minhaConexao->close();
echo "5 ";
#verificando a conexao apos close();
$minhaConexao->statusCon();
    echo "6 ";
            
            //require 'banco.php';
           
            //session_start();
           
            //$banco=new banco();
           
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


