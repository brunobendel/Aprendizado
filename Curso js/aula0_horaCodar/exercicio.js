// Converter tipos
var num = "1234"

var num = String(num);

console.log(typeof(num));


// Manupulação de strings

const palavra = "aprendendo jd no hora de codar"
const contaCarcteres = palavra.length
const contaPalavra = palavra.split(" ").length //split separa usando um parametro e length conta os caracteres

console.log(`numero de carc é ${contaCarcteres} e de palavras são ${contaPalavra}`);

// Exercício 4: Loops e Arrays
// Crie um array com cinco nomes. Use um loop for para imprimir cada nome no console.

const nomes = ["Ana", "João", "Carlos", "Maria", "Beatriz"];
for (let i = 0; i < nomes.length; i++) {
  console.log(nomes[i]);
}

// Exercício 5: Funções, Strings e Math
// Crie uma função que aceita uma string representando um horário no formato de 24 horas (por exemplo, "14:30"). A função deve retornar uma string que converta o horário para o formato de 12 horas (por exemplo, "2:30 PM"). Use o objeto Math para auxiliar nesta conversão. Certifique-se de que sua função lida corretamente com horários na meia-noite e no meio-dia.

function converterHorario(horario24) {
  const [hora, minuto] = horario24.split(":");
  let hora12 = hora % 12 || 12;
  const periodo = hora < 12 ? "AM" : "PM";
  return `${hora12}:${minuto} ${periodo}`;
}

console.log(converterHorario("14:30")); // "2:30 PM"
console.log(converterHorario("00:00")); // "12:00 AM"
console.log(converterHorario("13:00")); // "12:00 PM"