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
