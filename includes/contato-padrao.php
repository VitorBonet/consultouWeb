<div>
    <h1 class="tituloEntreContato">entre em contato conosco</h1>
</div>
<div class="divNonoIndexPrincipal">
    <div class="divContatoConosco">
        <input class="inputContatoNome" id="inputContatoNome" placeholder="Nome">
        <input class="inputContatoTelefone" id="inputContatoTelefone" placeholder="Telefone">
        <input class="inputContatoEmail" id="inputContatoEmail" placeholder="E-mail">
        <textarea id="inputContatoMensagem" placeholder="Mensagem" class="inputContatoMensagem" ></textarea>
        <div class="buttonEnviar">
            <p class="textoButtonEnviar" id="enviar">ENVIAR</p>
        </div> 
    </div>
    <div class="divContatoConosco1">
        <img src="img/imagensIndex/contato/emailCompleto.png" class="imgEmail" alt="">
        <a href="https://www.facebook.com/easycredoficial/" target="_blank">
            <img src="img/imagensIndex/contato/facebookCompleto.png" class="imgFacebook" alt="">
        </a>
    </div>
    <div class="divContatoConosco2">
        <div class="contatoTelefone">
            <p>0800 750 5566</p>
            <p><strong style="color: #e0cc20;">(47)</strong>99623-7673</p>
        </div>
        <div>
            <div class="contatoLocalizacaoImg">
                <img src="img/imagensIndex/contato/localizacao.png" class="imgLocalizacao" alt="">
            </div>
            <div class="contatoLocalizacaoTexto">
                <p>Endereço: Rua Quintino Bocaiuva, 300.</p>
                <p>Bairro América - Joinville/SC</p>
            </div>
        </div>
    </div>
    <img src="img/imagensIndex/banner/SELO.png" class="imgSeloRodaPe">
</div>
<script>
    $('#enviar').click(function () {
        $.ajax({
            method: "POST",
            url: "contatoCadastro.php",
            data: {
                nome: $('#inputContatoNome').val(),
                email: $('#inputContatoEmail').val(),
                telefone: $('#inputContatoTelefone').val(),
                assunto: $('#inputContatoMensagem').val()
            }, success: function (msg) {
                msg = JSON.parse(msg);
                alert(msg.resposta);
            }});
    });
</script>