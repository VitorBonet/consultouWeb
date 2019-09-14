<div class="navBefore">
    <div class="navBar">
        <div class="navBarVerde">
            <img src="img/imagensIndex/inicio/bolaBrancaInicio.png" class="imgNavBar" alt="">
            <nav class="navbar navbar-inverse" id="navBarOriginal">
                <div class="navbar-header">
                    <img src="img/imagensIndex/inicio/logo-02.png" class="logo" alt="">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="position: relative;top: 3em;background: green;"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar" >
                    <ul class="nav masthead-nav" style="float: none;">
                        <li class="toolbarItem <?php echo (substr_count($_SERVER['REQUEST_URI'], 'index') || substr_count($_SERVER['REQUEST_URI'], 'easycred'))?'active':'';?>"><a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http").'://'.$_SERVER['HTTP_HOST']; ?>"><img src="img/imagensIndex/inicio/inicio.png" class="iconeNav" alt=""></a></li>
                        <li class="toolbarItem <?php echo (substr_count($_SERVER['REQUEST_URI'], 'quem-somos'))?'active':''; ?>"><a href="quem-somos.php"><img src="img/imagensIndex/inicio/quemSomos.png" class="iconeNav" alt=""></a></li>
                        <li class="toolbarItem <?php echo (substr_count($_SERVER['REQUEST_URI'], 'servicos') || substr_count($_SERVER['REQUEST_URI'], 'emprestimo-servidor-publico')
                                || substr_count($_SERVER['REQUEST_URI'], 'emprestimo-empresarial') || substr_count($_SERVER['REQUEST_URI'], 'emprestimo-pessoal') 
                                || substr_count($_SERVER['REQUEST_URI'], 'emprestimo-imovel') || substr_count($_SERVER['REQUEST_URI'], 'emprestimo-veiculo')
                                || substr_count($_SERVER['REQUEST_URI'], 'emprestimo-consorcio'))?'active':''; ?>">
                            <a href="servicos.php"><img src="img/imagensIndex/inicio/servicos.png" class="iconeNav" alt=""></a></li>
                        <li class="toolbarItem <?php echo (substr_count($_SERVER['REQUEST_URI'], 'parceiros') || substr_count($_SERVER['REQUEST_URI'], 'parceiros-bancos')
                                || substr_count($_SERVER['REQUEST_URI'], 'parceiros-empresa') || substr_count($_SERVER['REQUEST_URI'], 'parceiros-saude'))?'active':''; ?>"><a href="parceiros.php" id="aParceiros"><img src="img/imagensIndex/inicio/parceiros.png" class="iconeNav" alt=""></a></li>
                        <li class="toolbarItem <?php echo (substr_count($_SERVER['REQUEST_URI'], 'duvidas'))?'active':''; ?>"><a href="duvidas.php"><img src="img/imagensIndex/inicio/duvidas.png" class="iconeNav" alt=""></a></li>
                        <li class="toolbarItem <?php echo (substr_count($_SERVER['REQUEST_URI'], 'contato'))?'active':''; ?>"><a href="contato.php"><img src="img/imagensIndex/inicio/iconeContato.png" class="iconeNav" alt=""></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</div>
<div class="divContato" id="inicio">
    <div class="divContatoMenor">
        <div class="box-container">
            <img src="img/imagensIndex/inicio/telefoneAmarelo.png" class="imgContato3">
            <p class="textoContato3">0800 750 5566</p>
        </div>
        <div class="box-container">
            <img src="img/imagensIndex/inicio/whats.png" class="imgContato3">
            <p class="textoContato3">(47) 99623-7673</p>
        </div>
        <div class="box-container">
            <img src="img/imagensIndex/inicio/emailAmarelo.png" class="imgContato3">
            <p class="textoContato3">contato@easycred.net</p>
        </div>


    </div>
</div>