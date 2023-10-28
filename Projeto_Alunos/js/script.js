const tituloPagina = document.querySelector('#titulo')
console.log(tituloPagina)
//textContent retorna ou define o conteúdo de texto
console.log(tituloPagina.textContent)
tituloPagina.textContent = 'ETEC Prof. Basilides de Godoy'

const linhaAluno = document.querySelectorAll('.aluno')
//console.log(linhaAluno.length)

for(let x = 0; x<linhaAluno.length; x++)
{
    let dadosAluno = linhaAluno[x]
    //console.log(dadosAluno)

    let nomeAluno = dadosAluno.querySelector('.td-nome').textContent
    let n1 = dadosAluno.querySelector('.td-n1').textContent
    let n2 = dadosAluno.querySelector('.td-n2').textContent
    let n3 = dadosAluno.querySelector('.td-n3').textContent
    let media = calcularMedia(n1, n2, n3)
    //console.log(media)

    let mediaAluno = dadosAluno.querySelector('.td-media')
    mediaAluno.textContent = media.toFixed(2)

    let situacao = dadosAluno.querySelector('.td-situacao')
    situacao.textContent = mostrarSi(media)[0];
    situacao.classList.add(mostrarSi(media)[1]);
    
    if(mediaAluno.textContent >= 7){
        mediaAluno.style.color = 'blue';
        mediaAluno.style.fontWeight = 'bold';
    }else{
        mediaAluno.style.color = 'red';
        mediaAluno.style.fontWeight = 'bold';
    }
}


function calcularMedia(x, y, z)
{
    return(parseFloat(x) + parseFloat(y) + parseFloat(z))/3
}

function mostrarSi(m){
    let res = [];

    if(m >= 7){
        res.push('Aprovado');
        res.push('aprovado');
    }else{
        res.push('Reprovado');
        res.push('reprovado');
    }

    return res;
}
