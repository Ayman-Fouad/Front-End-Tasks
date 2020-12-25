// Assignment 1

function reverseString(str) {
    // Step 1. Use the split() method to return a new array
    var splitString = str.split(""); // var splitString = "hello".split("");
    // ["h", "e", "l", "l", "o"]
 
    // Step 2. Use the reverse() method to reverse the new created array
    var reverseArray = splitString.reverse(); // var reverseArray = ["h", "e", "l", "l", "o"].reverse();
    // ["o", "l", "l", "e", "h"]
 
    // Step 3. Use the join() method to join all elements of the array into a string
    var joinArray = reverseArray.join(""); // var joinArray = ["o", "l", "l", "e", "h"].join("");
    // "olleh"
    
    //Step 4. Return the reversed string
    return joinArray; // "olleh"
}
let string = prompt("Enter a string here");
let result = reverseString(string);
console.log(result);

// Assignment 2 (using for loop)

let n = Number(prompt("Enter a number here"));
let sum = 0;
for(let i = 1 ; i <= n ; i++){
    sum += i;
}
console.log(sum);

// Assignment 3

var rows=5;
for(var i=1;i<=rows;i++)
{
for(var j=1;j<=i;j++)
{
document.write(" * ");
}
document.write("<br/>");
}