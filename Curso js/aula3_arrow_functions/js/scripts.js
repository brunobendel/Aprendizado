// arrow function

let a = 5;
let b = 10;

let c = (num1, num2) => num1 + num2;

// console.log(c(a,b));

// com if

let d = (x, y) => {

  let op;

  if (x >= 5) {
    op = x * y;
  } else {
    op = x / y;
  }
  return op;
};

console.log(d(a, b));
