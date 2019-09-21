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
    <link href="../css/creative.css" rel="stylesheet">
	
    <script type="text/javascript" src="../js/jquery.min.js"></script>	
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/toastr.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap4.0.min.js"></script>

</head>

<body> 

    <div class="background-register" >
        <div class="wrapper fadeInDown">
            <div id="divChoise">
                <div id="formContent">
                    <div class="fadeIn first">
                        <h1 class="title-choice-register">Selecione uma opção</h1>
                    </div>
                    <div class="row" style="padding: 0px 0px 17px 0px;">
                        <div class="col-lg-12">
                            <button type="button" id="use" onClick="choiceUser()" class="buttonChoiceRegister">Sou Usuário</button>
                        </div>
                        <div class="col-lg-12">
                            <button type="button" id="med" class="buttonChoiceRegister">Sou Médico</button>
                        </div>
                        <div class="col-lg-12">
                            <button type="button" id="cons" class="buttonChoiceRegister">Sou Consultório</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cadastro usuário -->
            <div id="divUser" style="display: none;">
                <div id="formContent" style="max-width: 650px;">
                    <!-- Icon -->
                    <div class="fadeIn first">
                    <!-- <a class="navbar-brand js-scroll-trigger title-logo" style="font-family: BwSeidoRoundDEMO-Medium;" href="#page-top"><img class="img-logo" src="../img/logo-verde-sem-fundo.png" style="padding: 8rem 0;" alt=""> consultou</a> -->
                    <!-- <img src="../img/logo-verde-sem-fundo.png" style="height: 100px;width: 140px;margin: 5%;" id="icon" alt="User Icon" /> -->
                    <h1>Cadastro</h1>
                    </div>
                    <!-- Login Form -->
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="button" id="submitAvancar" class="fadeIn fourth" value="Sou Usuário">
                        <div>
                        <div class="col-lg-12">
                            <input type="button" id="submitAvancar" class="fadeIn fourth" value="Sou Médico">
                        <div>
                        <div class="col-lg-12">
                            <input type="button" id="submitAvancar" class="fadeIn fourth" value="Sou Consultório">
                        <div>
                    <div>
                </div>
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
      
    function choiceUser() {
        document.getElementById('divChoise').style.display = 'none';
        document.getElementById('divUser').style.display = 'block';
    }

    //funcoes que mudam para area de logado
    function loginsucessfully() {
        setTimeout("window.location='home'", 1000);
    }
    function loginfailed() {
        setTimeout("window.location='login'", 2000);
    }
    //click do botao manda as informacoes para autenticacao do usuario
    // $('#submitAvancar').click(function () {
    //     $.ajax({
    //         method: "POST",
    //         url: "../Controller/userController",
    //         data: {
    //             <?php //echo USER_EMAIL; ?>: $('#user').val(),
    //             <?php //echo USER_PASSWORD; ?>: $('#password').val(),
    //         },
    //         success: function (msg) {
    //             msg = JSON.parse(msg);
    //             if (msg.resposta === 'true') {
    //                 loginsucessfully();
    //             } else {
    //                 switch(msg.resposta){
    //                     case 'false':
    //                         toastr.error("email invalido","erro!"); 
    //                         break
    //                     case 'waiting':
    //                         toastr.error("","erro!");
    //                         break
    //                 }
    //                 loginfailed();
    //             }
    //         }
    //     });
    // });
</script>



</body>

</html>
