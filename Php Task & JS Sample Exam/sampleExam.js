/**
 Question 1:

 Q1)

 A closure gives you access to an outer function’s scope 
 from an inner function.
 
 Example:

 function init() {
  var name = 'Mozilla';
  function displayName(){
    alert(name);
  }
  displayName();
}
init();
========================================================================
Q2)

A function that is passed to another function is a callback function,
and calling it inside the outer function.
Callbacks make sure that a function is not going to run before 
a task is completed but will run right after the task has completed,
It helps us develop asynchronous JavaScript code and keeps us safe from problems and errors
========================================================================
Q3)

The process in which a function calls itself directly or indirectly,
using recursion certain problems can be solved quite easily.
Example:

function countDown(number){
    console.log(number);
    const newNumber = number - 1;
    if (newNumber > 0){
        countDown(newNumber);
    }
}
countDown(5);
======================================================================
Q4)

Array destruct is a simplified method of extracting multiple properties
from an array by taking the structure and deconstructing it down into 
its own parts through assignments by using a syntax that looks similar 
to array literals.
======================================================================
Q5)

"use strict" is to indicate that the code should be executed in 
"strict mode". With strict mode, you can not, for example,
use undeclared variables.
=====================================================================
Question 2:

Q1) 2 , 12 after 3 seconds.

=====================================================================
Q2) True
    False

======================================================================
Q3) John doe

=======================================================================
Q4) Nothing. it saves the value bec, it's not called.

=======================================================================
Q5) 

 */
