'use strict'

const pesquisaContato = async (id)=> {

    const url = `http://localhost/web-agenda/visualizar-contato/get-contato.php?id=${id}`

    const dados = await fetch(url);
    const contato = await dados.json();
        
    populateForm(contato);

    console.log(contato)
}

const populateForm = (contato) =>{
    document.getElementById('name').value = contato.nome;
    document.getElementById('tel').value = contato.telefone;
    document.getElementById('email').value = contato.email;
    document.getElementById('cep').value = contato.cep;

    document.getElementById('rua').value = contato.rua;
    document.getElementById('bairro').value = contato.bairro
    document.getElementById('estado').value = contato.estado;
    document.getElementById('cidade').value = contato.cidade;
}
