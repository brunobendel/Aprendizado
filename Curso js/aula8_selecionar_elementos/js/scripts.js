// selecionar elemento por id

var titulosacao = document.getElementById("titulo-secao");

console.log(titulosacao);

// selecionar Elemento por classe

var paragrafordescricao = document.getElementsByClassName("descripiton");

console.log(paragrafordescricao);

// Selecionar por tag

var paragrafos = document.getElementsByTagName("p");

console.log(paragrafos);

// seletores por css- query selector

var itensLista = document.querySelectorAll("#lista .item");

console.log(itensLista);

var itensLista = document.querySelectorAll(".item");

console.log(itensLista);

var titulo = document.querySelector("#lista .item");

console.log(titulo);

document.body.style.color = 'blue';
document.body.style.background = 'black';

// Obtendo a referência para a div pelo seu ID.
var minhaDiv = document.getElementById('minhaDiv');

// Criando um elemento parágrafo.
var novoParagrafo = document.createElement('p');

// Adicionando texto ao parágrafo.
novoParagrafo.textContent = 'Este é um parágrafo adicionado dinamicamente dentro da div.';

// Adicionando o parágrafo como filho da div.
minhaDiv.appendChild(novoParagrafo);

$("#minhaDiv").remove();