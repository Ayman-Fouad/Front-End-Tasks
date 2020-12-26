/*
1) 5
2) undefined bec, (let)
3) white_rabbit
*/
// 4)
let n = Number(prompt("Enter a number here"));
let sum = 1;
for(let i = 1 ; i <= n ; i++){
    sum *= i;
}
console.log(sum); 

// 5)
let num = Number(prompt("Enter Number"));
const isPrime = num %1 === 0 && num %num === 1? "Prime Number" : "Not Prime Number";
console.log(isPrime);