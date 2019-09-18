<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" x-undefined="" />
    <meta http-equiv="X-UA-Compatible" content="IE=10" />
    <meta http-equiv="refresh" content="1000">

    <title>Login</title>
    <!-- <link rel="icon" 
        type="image/png" 
        href="../img/logo/weg.png" /> -->
        
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap4.0.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/layout3.0.css"/>
    <link rel="stylesheet" type="text/css" href="../package/fontawesome/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="../css/toastr.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/index.css"/>
	
    <script type="text/javascript" src="../js/jquery.min.js"></script>	
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/toastr.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap4.0.min.js"></script>

</head>

<body> 


    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Icon -->
            <div class="fadeIn first">
                <a class="navbar-brand js-scroll-trigger title-logo" style="font-family: BwSeidoRoundDEMO-Medium;font-size: 2rem;color: #ffffff;" href="#page-top">
                    <img class="img-logo" style="height: 80px;position: relative;left: 12px;" src="../img/logo-branco-sem-fundo.png" alt=""> consultou
                </a>
            </div>

            <!-- Login Form -->
            <form>
                <input type="text" id="user" class="fadeIn second" name="user" placeholder="Usuário">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
                <input type="button" id="submitAvancar" class="fadeIn fourth" value="Login">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <div><a class="underlineHover" href="forgotPassword">Esqueci minha senha</a></div>
                <div><a class="underlineHover" href="register">Registrar</a></div>
            </div>

        </div>
    </div>

<script>
    // tecla enter apertada
    document.addEventListener('keypress', function(e){
        if(e.which == 13){
            document.getElementById("submitAvancar").click();
        }
    }, false);


    toastr.options = {
		"closeButton": true,
		"debug": false,
		"progressBar": false,
		"positionClass": "toast-bottom-right",
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	  }

    //funcoes que mudam para area de logado
    function loginsucessfully() {
        setTimeout("window.location='home'", 1000);
    }
    function loginfailed() {
        setTimeout("window.location='login'", 2000);
    }
    //click do botao manda as informacoes para autenticacao do usuario
    $('#submitAvancar').click(function () {
        $.ajax({
            method: "POST",
            url: "../Controller/userController",
            data: {
                <?php echo USER_EMAIL; ?>: $('#user').val(),
                <?php echo USER_PASSWORD; ?>: $('#password').val(),
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                if (msg.resposta === 'true') {
                    loginsucessfully();
                } else {
                    switch(msg.resposta){
                        case 'false':
                            toastr.error("email invalido","erro!"); 
                            break
                        case 'waiting':
                            toastr.error("","erro!");
                            break
                    }
                    loginfailed();
                }
            }
        });
    });
</script>



</body>

</html>
