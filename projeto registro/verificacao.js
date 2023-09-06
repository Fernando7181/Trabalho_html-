// verificacao.js

function validarSenha() {
    const senha = document.getElementById('senha').value;
    const conf_senha = document.getElementById('conf_senha').value;

    if (senha !== conf_senha) {
       
        alert("As senhas não coincidem!");
        return false; // Impede o envio do formulário
    }

    return true; // Permite o envio do formulário se as senhas coincidirem
}
