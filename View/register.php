<?php
ini_set('display_errors', true);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
date_default_timezone_set("America/Sao_Paulo");

include_once '../Model/User.Class.php';

$ObjUser = new User();

?>
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
    <script type="text/javascript" src="../js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap4.0.min.js"></script>
    <script type="text/javascript" src="../js/consultou-tools.js"></script>

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
                            <button type="button" id="use" onClick="choice('user')" class="buttonChoiceRegister">Sou Usuário</button>
                        </div>
                        <div class="col-lg-12">
                            <button type="button" id="doct" onClick="choice('doctor')" class="buttonChoiceRegister">Sou Médico</button>
                        </div>
                        <div class="col-lg-12">
                            <button type="button" id="clinic" onClick="choice('clinic')" class="buttonChoiceRegister">Sou Consultório</button>
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
                            <input type="text" id="emailUser" class="form-control fadeIn input-register" onBlur="validFields(this, 'email')" >
                            <div class="invalid-feedback" id="invalidEmail">
                                Por favor, escolha um email válido
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Confirmação de E-mail *</label>
                            <input type="text" id="confirmEmailUser" class="form-control fadeIn input-register" onBlur="validFields(this, 'confirmEmail')">
                            <div class="invalid-feedback">
                                Por favor, os dois emails devem ser iguais.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Nome Completo*</label>
                            <input type="text" id="nameUser" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha um nome de usuário.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Data de Nascimento *</label>
                            <input type="date" id="dateBirthUser" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha uma data de nascimento.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Senha *</label>
                            <input type="password" id="passwordUser" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha uma senha.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Confirme sua senha *</label>
                            <input type="password" id="confirmPasswordUser" class="form-control fadeIn input-register"  onBlur="validFields(this, 'confirmPassword')">
                            <div class="invalid-feedback">
                                Por favor,as duas senhas devem ser iguais.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12" style="margin: 20px 0px 10px 0px;">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="fadeIn btn btn-secondary radio-register active">
                                    <input type="radio" name="optionsUser" id="male" autocomplete="off" checked> Masculino
                                </label>
                                <label class="fadeIn btn btn-secondary  radio-register">
                                    <input type="radio" name="optionsUser" id="female" autocomplete="off"> Feminino
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input style="margin: 30px 0px 30px 0px;" type="button" id="submitAvancar" class="fadeIn fourth" value="Registrar">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cadastro Médico -->
            <div id="divDoctor" style="display: none;width: 80%;left: 2%;">
                <div id="formContent" style="max-width: 70%;position: relative;left: 14%;">
                    <!-- Icon -->
                    <div class="fadeIn first">
                    <h1 class="title-choice-register">CRIE UMA CONTA</h1>
                    <p class="subTitle-register">E obtenha seu primeiro paciente!</p>
                    </div>
                    <!-- Login Form -->
                    <div class="row row-register">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">E-mail *</label>
                            <input type="text" id="emailDoctor" class="form-control fadeIn input-register" onBlur="validFields(this, 'email')" >
                            <div class="invalid-feedback" id="invalidEmail">
                                Por favor, escolha um email válido
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Confirmação de E-mail *</label>
                            <input type="text" id="confirmEmailDoctor" class="form-control fadeIn input-register" onBlur="validFields(this, 'confirmEmail')">
                            <div class="invalid-feedback">
                                Por favor, os dois emails devem ser iguais.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Nome Completo*</label>
                            <input type="text" id="nameDoctor" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha um nome de usuário.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Número de celular *</label>
                            <input type="text" id="celDoctor" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha uma número de celular.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Senha *</label>
                            <input type="password" id="passwordDoctor" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha uma senha.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Confirme sua senha *</label>
                            <input type="password" id="confirmPasswordDoctor" class="form-control fadeIn input-register"  onBlur="validFields(this, 'confirmPassword')">
                            <div class="invalid-feedback">
                                Por favor,as duas senhas devem ser iguais.
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input style="margin: 30px 0px 30px 0px;" type="button" id="submitAvancar" class="fadeIn fourth" value="Registrar">
                        </div>
                    </div> 
                </div>
            </div>

            <!-- Cadastro Consultorio -->
            <div id="divClinic" style="display: none;width: 80%;left: 2%;">
                <div id="formContent" style="max-width: 70%;position: relative;left: 14%;">
                    <!-- Icon -->
                    <div class="fadeIn first">
                    <h1 class="title-choice-register">CRIE UMA CONTA</h1>
                    <p class="subTitle-register">E receba seu primeiro paciente!</p>
                    </div>
                    <!-- Login Form -->
                    <div class="row row-register">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">E-mail *</label>
                            <input type="text" id="emailClinic" class="form-control fadeIn input-register" onBlur="validFields(this, 'email')" >
                            <div class="invalid-feedback" id="invalidEmail">
                                Por favor, escolha um email válido
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Confirmação de E-mail *</label>
                            <input type="text" id="confirmEmailClinic" class="form-control fadeIn input-register" onBlur="validFields(this, 'confirmEmail')">
                            <div class="invalid-feedback">
                                Por favor, os dois emails devem ser iguais.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Nome Completo*</label>
                            <input type="text" id="nameClinic" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha um nome de usuário.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Número de celular *</label>
                            <input type="text" id="celClinic" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha uma número de celular.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Senha *</label>
                            <input type="password" id="passwordClinic" class="form-control fadeIn input-register" onBlur="validFields(this)">
                            <div class="invalid-feedback">
                                Por favor, escolha uma senha.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="fadeIn label-register">Confirme sua senha *</label>
                            <input type="password" id="confirmPasswordClinic" class="form-control fadeIn input-register"  onBlur="validFields(this, 'confirmPassword')">
                            <div class="invalid-feedback">
                                Por favor,as duas senhas devem ser iguais.
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input style="margin: 30px 0px 30px 0px;" type="button" id="submitAvancar" class="fadeIn fourth" value="Registrar">
                        </div>
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

    $('#celDoctor').mask("(00) 0000-00009");
      
    function choice(type) {
        switch (type) {
            case 'user':
                document.getElementById('divChoise').style.display = 'none';
                document.getElementById('divUser').style.display = 'block';
                document.getElementById('divDoctor').style.display = 'none';
                document.getElementById('divClinic').style.display = 'none';
                break;
            case 'doctor':
                document.getElementById('divChoise').style.display = 'none';
                document.getElementById('divUser').style.display = 'none';
                document.getElementById('divDoctor').style.display = 'block';
                document.getElementById('divClinic').style.display = 'none';
                break;
            case 'clinic':
                document.getElementById('divChoise').style.display = 'none';
                document.getElementById('divUser').style.display = 'none';
                document.getElementById('divDoctor').style.display = 'none';
                document.getElementById('divClinic').style.display = 'block';
                break;
        }
        
    }

    function validFields(e, field) {
        switch (field) {
            case 'email':
                if( $(e).val() == "" || !validEmail($(e).val())) {
                    $(e).addClass("is-invalid");
                }else{
                    $(e).removeClass("is-invalid");
                }
                break;
            case 'confirmEmail':
                if( $(e).val().trim() != $('#email').val().trim()) {
                    $(e).addClass("is-invalid");
                }else{
                    $(e).removeClass("is-invalid");
                }
                break;
            case 'confirmPassword':
                if( $(e).val().trim() != $('#password').val().trim()) {
                    $(e).addClass("is-invalid");
                }else{
                    $(e).removeClass("is-invalid");
                }
                break;
                
            default:
                if( $(e).val() == "") {
                    $(e).addClass("is-invalid");
                } else{
                    $(e).removeClass("is-invalid");
                }
                break;
        }
    }
    
    $('#submitAvancar').click(function () {
        $.ajax({
            method: "POST",
            url: "../Controller/userController",
            data: {
                <?php echo USER_EMAIL; ?>: $('#email').val(),
                confirmEmail: $('#confirmEmail').val(),
                <?php echo USER_NAME; ?>: $('#name').val(),
                <?php echo USER_DATE_BIRTH; ?>: $('#dateBirth').val(),
                <?php echo USER_PASSWORD; ?>: $('#password').val(),
                confirmPassword: $('#confirmPassword').val(),
                //<?php //echo USER_EMAIL; ?>: $('#options').val(), usar função getradio weg
            },
            success: function (msg) {
                try {
                    msg = JSON.parse(msg);
                } catch (error) {
                    msg = "false";
                }
                
                switch (msg) {
                    case 'true':
                        toastr.success("Registro efetuado com sucesso!","sucesso!"); 
                        break;
                
                    default:
                        toastr.error("Ocorreu um erro, entre em contato com o administrador do sistema!","erro!"); 
                        break;
                }
            }
        });
    });
</script>



</body>

</html>
