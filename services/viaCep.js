'use strict'

const pesquisaCep = async () => {
    clearForm();

    let cep = document.getElementById('cep').value;
    const url = `http://viacep.com.br/ws/${cep}/json/`;

    if(cepValido(cep)){
        const dados = await fetch(url);
        const address = await dados.json();
        
        if(address.hasOwnProperty('erro')){
            document.getElementById('cep').value = "CEP não encontrado!"
        }else{
            populateForm(address);
        }
    } else{
        document.getElementById('cep').value = "CEP inválido!"
    }
}

//expressão regular pra validar o cep
const cepValido = (cep) => /^[0-9]{5}-[0-9]{3}$/.test(cep);

const populateForm = (address) =>{
    document.getElementById('rua').value = address.logradouro;
    document.getElementById('bairro').value = address.bairro
    document.getElementById('estado').value = address.uf;
    document.getElementById('cidade').value = address.localidade;
    console.log(address)
}

const clearForm = () => {
    document.getElementById('rua').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('estado').value = '';
    document.getElementById('cidade').value = '';
}

document.getElementById('cep').addEventListener('focusout', pesquisaCep);
