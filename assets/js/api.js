function getUrl() {
    var url = document.getElementById("urlInput").value;

    fetch("https://whatcms.org/APIEndpoint/Detect?key=3270ef043ff53e86c3f7123ab4d2b9177d0bbe2d80a485167db6a1f4a1bbeab581efab&url=" + url)
        .then(response => response.jsonp())
        .then(jsonp => {
            if (jsonp.result.code === 200) {
                console.log(jsonp);
            } else {
                console.log(jsonp);
            }
        });
}

function submitResult() {
    document.getElementById("urlInput").style.backgroundColor = '#B4EAD5';
    document.getElementById("scanfigr-button").innerHTML = '<i class="fas fa-check"></i>';

    var validado = document.createElement("h3");
    validado.textContent = 'Excelente! Detectamos que o seu site está rodando o Wordpress 4.72';
    document.getElementById('form-elements').appendChild(validado);

    var validadoDiv = document.createElement("div");
    validadoDiv.className = 'validado-div';

    var validadoDivh2 = document.createElement("h2");
    validadoDivh2.textContent = "Ótimo! Falta pouco..."
    validadoDiv.appendChild(validadoDivh2);

    var validadoDivP = document.createElement("p");
    validadoDivP.textContent = "Agora, só precisamos de mais alguns dados para enviarmos o relatório. Não enviamos qualquer tipo de  spam, somente solucões, e em até 48 horas o seu relatório está pronto!"
    validadoDiv.appendChild(validadoDivP);

    var validadoDivForm = document.createElement("div");
    validadoDivForm.className = "form-group";
    validadoDivForm.id = "validadoDivForm";
    validadoDiv.appendChild(validadoDivForm);

    document.getElementById('validado-texto').appendChild(validadoDiv);
    document.getElementById('validadoDivForm').innerHTML = "<label for='validadoDivFormNome'>Qual seu nome?</label><input type='text' class='form-control' id='validadoDivFormNome' aria-describedby='validadoNomeInput' placeholder='Fulano da Silva Sauro'> <label for='validadoDivFormEmail'>Qual email podemos enviar o relatório?</label><input type='email' class='form-control' id='validadoDivFormEmail' aria-describedby='validadoEmailInput' placeholder='fulano@provedor.com.br'> <button type='button' class='btn scanfigr-btn-scan' id='scanfigr-button-scan' >Scaneie o meu site <i class='fas fa-chevron-right'></i></button>";


}