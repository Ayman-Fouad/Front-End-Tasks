// Quiz Answers:
/*
1) white_rabbit
2) Error
3) foo
4) bar foo
6) True
   True
   False 
7) Divisible by 10
*/

// Find max num of an array:
const array1 = (1 , 2 , 3);
console.log(Math.max(array1));

// Convert hours to minutes and seconds:

function convertHourstoMinute(hours) {
    return Math.floor(hours * 60);
   }
let hours = Number (prompt("Enter number of hours here"));
console.log(convertHourstoMinute(hours) + " Minutes ");

function convertMinutestoSeconds(minutes){
  return Math.floor(minutes * 60);
}
let minutes = Number (prompt("Enter number of minutes here"));
console.log(convertMinutestoSeconds(minutes) + " Seconds ");

// Create function to sum multiple numbers :
function sum (num1 , num2 , num3){
    return num1 + num2 + num3;
}
console.log(sum(2 , 3 , 5));