// Q 1
function checkPalindrome(str){
    const arrayValues = string.split("");
    const reverseArrayValues = arrayValues.reverse("");
    const reverseString = reverseArrayValues.join("");
    if(string == reverseString){
        console.log('It is a palindrome');
    }else{
        console.log('It is not a palindrome');
    }
}
const string = prompt("Enter a string");
checkPalindrome(string);

// Q 2

function isAnagram(str1, str2){
    str1 = str1.toLowerCase().replace(/[^a-z0-9]/gi, '').split('').sort().join('');
    str2 = str2.toLowerCase().replace(/[^a-z0-9]/gi, '').split('').sort().join('');
    return str1 === str2;
  };
  console.log(isAnagram('iceman', 'cinema')); 

  // Q 3

let number = 5;
function sum(a){
    return function(b){
        return function(c){
            return function(d){
                return a + b + c + d + number;
            }
        }
    }
}
console.log(sum(5)(5)(5)(5));

// Q 4

function reverseString(str) {
    if (str === ""){ 
      return "";
    }else
      return reverseString(str.substr(1)) + str.charAt(0);
}
console.log(reverseString("hello"));

// Q 6

let num = Number(prompt("Enter a positive number"));
let isPrime = true;
if (num > 1){
    for (let i = 2; i < num; i++){
        if (num % i == 0){
            isPrime = false;
        }
    }
    if (isPrime){
        console.log(`${num} is a prime number`);
    }else{
        console.log(`${num} is not a prime number`);
    }
}

// Q 7

let fibNumber = Number(prompt('Enter Fibonacci Number'));
let n1 = 0, n2 = 1, nextTerm;
for (let i = 1; i <= fibNumber; i++) {
    console.log(n1);
    nextTerm = n1 + n2;
    n1 = n2;
    n2 = nextTerm;
}

// Q 8

function pow(base,power){
    var p = 1;
    for (var i=0; i<power; i++){
      p *= base;
    }
    return p;
  }
  console.log(pow(5 ,3));

// Q 9 (Reverse Pyramid)

let rows = 5; 
let revsPyramid = "";
for (let i = 1; i <= rows; i++){
  for (let j = 0; j < rows - i; j++){
    revsPyramid += " ";
  }
  for (let k = 0; k < i; k++){
    revsPyramid += "*";
  }
  revsPyramid += "\n";
}
console.log(revsPyramid);