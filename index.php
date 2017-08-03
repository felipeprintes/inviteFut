<?php include("cabecalho.php"); ?>


<div class="hero-image">
    <div class="hero-text">
        <h1 >InviteFut</h1>
        <p>A maneira mais fácil de marcar seu futebol</p>
        <?php mostraAlerta("success"); ?>
        <?php mostraAlerta("danger"); ?>
    </div>
    <div class="hero-text2">
        <form action="autentica_usuario.php" method="post">
            <input type="text" name="email" placeholder="Email"><br>
            <input type="password" name="senha" placeholder="************"><br>
    </div>   
        <button class="btn btn-danger" type="submit" >Entrar</button>   
        </form>
    
</div>

<a href="cadastro.php"><h3 class="sem-cadastro">Não tenho conta</h3></a>


<?include("rodape.php");?>