<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>UNIPÚBLICA - CADASTRO</title>
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>
    <div class="topo">
        <div class="topoint">
            <div class="topoleft">
                <ul>
                    <li><a href=""class="ativo">Home</a></li>
                    <li><a href="">Quem Somos</a></li>
                    <li><a href="">Anuncie Aqui</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
                </div>

                <div class="toporight">
                    
                    
                    <a href=""><img src="assets/images/youtube.png" border="0" width="26" height="26"></a>
                    <a href=""><img src="assets/images/twitter.png" border="0" width="26" height="26"></a>
                    <a href=""><img src="assets/images/facebook.png" border="0" width="26" height="26"></a>
                    <a href=""><img src="assets/images/googleplus.png" border="0" width="26" height="26"></a>
                    <a href=""><img src="assets/images/rss.png" border="0" width="26" height="26"></a>
                </div>
            </div>
        </div>
    </div>
        <section id="banner">
    <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <form action="cad_msg.php" method="POST">
        
        <h1>Cadastro</h1>
       
        <input type="text" name="nome"  placeholder="Nome completo" required><br><br>

        <input type="email" name="email" placeholder="E-mail" required><br><br>

        <input type="text" name="nome" placeholder="Assunto"><br><br>

        <textarea name="mensagem" rows="3" cols="50"placeholder="Digite sua mensagem..." required></textarea><br><br>

        <div class = "btn">
        <input name="SendCad" type="submit" value="Cadastrar">
        </div>
    </form>

    <div class = "rodape">
        <p>Rafael de Carvalho Menezes.</p>
        <p>rafa.rcm@hotmail.com</p>
        <p>041 9 9911 5440<p>

  </body>
</html>