<?php
    session_start();

    if( ( isset($_SESSION['nome']) == FALSE)||( isset($_SESSION['email']) == FALSE) ){
        header('location: desconectado.php');
    }
?>
    <div  style="border-radius:1em; width:20%; font-size:25px; background:#3399FF;float: left">  
        <center>
            <a href="homeAdmin.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Home         </b></a><br><hr>
            <a href="condominoAdmin.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Condômino    </b></a><br><hr>
            <a href="visitanteAdmin.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Visitantes      </b></a><br><hr>
            <a href="funcionarioAdmin.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Funcionário  </b></a><br><hr>
            <a href="financasAdmin.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Finanças     </b></a><br><hr>
            <a href="pautaAdmin.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Pauta        </b></a><br><hr>
            <a href="compromissosAdmin.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Compromissos        </b></a><br><hr>
            <a href="topicosPrincipal.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Forum        </b></a><br><hr>
            <a href="sair.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>  Sair         </b></a><br>
        </center>
    </div>
    <!-- logout!-->
    <div  style="border-radius:1em; width:25%; font-size:12px;background:#00BFFF; float: right; border-bottom: 5px">
        <center>
            <a href="sair.php" style="color:white; font-family:arial; text-decoration:none; padding:5px"><b>Olá <?php echo $_SESSION['nome'];?>, <i style="">Logout</i></b></a><br>
        </center>
    </div>
    <br>
