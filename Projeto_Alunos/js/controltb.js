const btn = document.querySelector('#adicionar-aluno');
btn.addEventListener('click',function(){
    event.preventDefault();

    let form = document.querySelector('#form-aluno');
    let aluno = novoAluno(form);
})


function novoAluno(f){
    if(f.querySelector('#nome').value == ""){
        alert('Nome não pode ser vazio!!!');
        f.querySelector('#nome').focus();
    }else if(f.querySelector('#n1').value == ""){
        alert('Numero 1 não pode ser vazio!!!');
        f.querySelector('#n1').focus();
    }else if(f.querySelector('#n2').value == ""){
        alert('Numero 2 não pode ser vazio!!!');
        f.querySelector('#n2').focus();
    }else if(f.querySelector('#n3').value == ""){
        alert('Numero 3 não pode ser vazio!!!');
        f.querySelector('#n3').focus();
    }else{
        f.querySelector('#nome').value = "";
        f.querySelector('#n1').value = "";
        f.querySelector('#n2').value = "";
        f.querySelector('#n3').value = "";
        alert("Criado com sucesso!");
    }
}