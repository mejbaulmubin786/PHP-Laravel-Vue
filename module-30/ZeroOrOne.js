/*
Zero or One
Problem Statement: A number from 0 to 9 will be presented as an word in lower case english letter. For example- three. The program will take it as input. Print 0 if the remainder is 0 while the number is divided by 2, otherwise print 1 if the remainder is 1.
Input: The program will take a string SS as input.
Output: The output will print either 0 0r 1.
Constraints: 0 ≤ |S| ≤ 9
Example: Enter string
Input: three
Output: 1
Notes: No number greater than 9 will be given as input

function main (input) {
    /**
     * Write JavaScript code from here
     */
   
    function main (input) {
        /**
         * Write JavaScript code from here
         */
        function remainderNum(num){
           let remainder = num%2;
           console.log(remainder); 
        }
        if(input == "zero"){
            remainderNum(0)
        } 
        else if(input == "one"){
            remainderNum(1);
        }
        else if(input == "two"){
            remainderNum(2);
        }
        else if(input == "three"){
           remainderNum(3);
        }
        else if(input == "four"){
            remainderNum(4);
        }
        else if(input == "five"){
            remainderNum(5);
        }
        else if(input == "six"){
            remainderNum(6);
        }
         else if(input == "seven"){
            remainderNum(7);
        }
    
     else if(input == "eight"){
            remainderNum(8);
        }
    
     else if(input == "nine"){
            remainderNum(9);
        }
    }
    
    let input = "";
    process.stdin.on('data', (chunk) => {
        input += chunk;
    });
    
    process.stdin.on('end', () => {
        main(input.trim());
    });