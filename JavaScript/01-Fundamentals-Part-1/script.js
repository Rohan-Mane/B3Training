let js = 'Amezing';
// if(js=== 'Amezing') alert("JavaScript is Great");

 console.log(40+8+23-11);

 console.log("Rohan");
 console.log(44);

 let firstName = "Ronny";
 console.log(firstName);
 
 //==================================================================

 // Assignment1 - vslues & variables
 let country = "India";
 let continent = "Asia";
 let population = 1.38

 console.log(country);
 console.log(continent);
 console.log(population + " billion");

 //===============================================================
//Assignment2 - Data Type
let isIsland = false;
let language = "Hindi";

console.log(typeof isIsland);
console.log(typeof population);
console.log(typeof country);
console.log(typeof language);

//=================================================================
//Assignment3 - let, var, const 
language = "Marathi";
console.log(language);
const birthYear = 2000;
// birthYear = 2001;         gives error

//==================================================================
//Assignment4 - Basic Operators
oneHalf = population/2
console.log(`Each Half will contain ${oneHalf} Billion population`);

population+=1;
console.log(population);

let finPopulation = 6 ;
if(population > finPopulation){
    console.log(true);
}else console.log(false);

let avgPopulation = 33;
if(avgPopulation > population) console.log(true);

let description = `${country} is in ${continent}, and it's ${population} people speak ${language}`;
console.log(description);

//prompt("message");
//confirm("You");
//console.log(5+ +'5');
//======================================================================
//Assignment -  ifElse
if(population > 33)
{
    console.log("Portugal's population is above average");
}
else{
    console.log("Portugal's population is 22 below average");
}

//=======================================================================
//Assignment - Type conversion and coercion
console.log('9'-'5');
console.log('19'-'13'+'17');
console.log('19'-'13'+17);
console.log('123'<57)
console.log(5+6+'4'+9-4-2);

//========================================================================
//Assignment - Equality operators  - ==  vs ===

//const Neighbors = prompt("How many neighbor countries you have? ");
// const numNeighbors = Number(Neighbors);
// if(numNeighbors ===  1)
// {
//     console.log("Only one border");
// }else if(numNeighbors  > 1)
// {
//     console.log("More than 1 border");
// }else{
//     console.log("No border");
// }

//=========================================================================
//Assignment  - Logical operators
if(language === 'English' && population<50 && !isIsland){
    console.log(`You should live in ${country}`);
}else{
    console.log(`${country} does not match your criteria`);
}

//==========================================================================
//Assignment  - switch statement
language = 'spanish';
switch(language){
    case 'chinese':
    case 'mandarin':
        console.log("Most number of native speakers");
        break;
    
    case 'spanish':
        console.log("2nd place in number of native places");
        break;
    
    case 'english':
        console.log("3rd place");
        break;

    case 'hindi':
        console.log("number 4");
        break;

    case 'arabic':
        console.log("5th most spoken language");
        break;
    
    default:
        console.log("Great language too");
        break;
}

//======================================================================
//Assignment - ternary operator
population=  130;
const position = population > 33 ? 'above': 'below';
console.log(`Portugal's population is ${position} average`);

//======================================================================
//Part 1 completed