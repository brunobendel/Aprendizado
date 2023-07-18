//destructuring arrays
let arr = [1,2,3,4,5]
let [num1, num2, num3, num4, num5] = arr

console.log(num1);
console.log(num2);
console.log(num3);
console.log(num4);
console.log(num5);

//Objetos
const pessoa = {
    nome: "Bruno",
    profissao: "estagiario",
    sexo: 'M'
}

let {nome: NomeVar, profissao: ProfssicaoVar, sexo: SexoVAr} = pessoa;

console.log(NomeVar);
console.log(ProfssicaoVar);
console.log(SexoVAr);

//funções

function teste(){
    return ['teste', 45]
}

let [varA, varB] = teste();

console.log(varA);
console.log(varB);


