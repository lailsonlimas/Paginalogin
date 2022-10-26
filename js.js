function Cadastrar() {
    var nome = document.getElementById('IDname');
    var senha = document.getElementById('IDsenha');

    if(nome.value.length < 2) {
        nome.style.backgroundColor = "#ffffff";
        alert('Obrigatorio o preenchimento do campo nome!!');
        nome.focus();
        return false;
    } 

    else if(senha.value.length < 6) {
        senha.style.backgroundColor = "#fffff";
        alert('Obrigatorio senha de no minimo 6 digitos!!');
        senha.focus();
        return false;
    } 
    
}