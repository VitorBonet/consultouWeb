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
            <div id="divUser" style="display: none;width: 80%;left: 2%;">
                <div id="formContent" style="max-width: 70%;position: relative;left: 14%;">
                    <!-- Icon -->
                    <div class="fadeIn first">
                    <h1 class="title-choice-register">CRIE UMA CONTA</h1>
                    <p class="subTitle-register">E marque sua primeira consulta!</p>
                    </div>
                    <!-- Login Form -->
                    <div class="row row-register">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">E-mail *</label>
                            <input type="text" id="email" class="fadeIn input-register" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Confirmação de E-mail *</label>
                            <input type="text" id="confirmEmail" class="fadeIn input-register" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Nome Completo*</label>
                            <input type="text" id="name" class="fadeIn input-register" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Data de Nascimento *</label>
                            <input type="date" id="dateBirth" class="fadeIn input-register" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Senha *</label>
                            <input type="password" id="password" class="fadeIn input-register" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Confirme sua senha *</label>
                            <input type="password" id="password" class="fadeIn input-register" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12" style="margin: 20px 0px 10px 0px;">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="fadeIn btn btn-secondary radio-register active">
                                    <input type="radio" name="options" id="male" autocomplete="off" checked> Masculino
                                </label>
                                <label class="fadeIn btn btn-secondary  radio-register">
                                    <input type="radio" name="options" id="female" autocomplete="off"> Feminino
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input style="margin: 30px 0px 30px 0px;" type="button" id="submitAvancar" class="fadeIn fourth" value="Registrar">
                        </div>
                        
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
