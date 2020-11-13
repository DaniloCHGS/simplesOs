function clearForm() {
    let limparIcone = document.querySelector("#limparIcone");
    limparIcone.className = 'glyphicon glyphicon-refresh';
    setTimeout(()=> {
        limparIcone.className = 'glyphicon glyphicon-repeat btnSpace';
    }, 1000);
    $('#nome, #cpf, #endereco, #telefone, #descricao, #executado, #valorTotal').val('');
}
function closeErroLogin(){
    setInterval(() => {
        $('#btnErroLogin').css('display', 'none');
    }, 3000);
}
function closeFimLogin(){
    setInterval(() => {
        $('#btnFimLogin').css('display', 'none');
    }, 3000);
}
function controleRegistro(){
    alert("teste");
}
function openPanel(){
    let panel = document.querySelector("#pesqUser");
    panel.style.display = 'block';
}