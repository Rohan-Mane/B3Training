'use strict';

let hasDriversLicense = false;
const passTest = true;

if(passTest) hasDriversLicense = true;
if(hasDriversLicense) console.log("I can drive");

// const interface = 2;

//=====================================================================
//Assignment1 - functions
function describeCountry(country, population, capitalCity){
    return `${country} has ${population} Million and it's capital City is ${capitalCity}`;
}

console.log(describeCountry('Finland',6, 'Helsinki' ));
console.log(describeCountry('Nepal',1, 'Bhutan' ));
console.log(describeCountry('India',1.3, 'Dehli' ));

//======================================================================
//Assignment 2 - Function Declaration vs Expression

function percentageOfWorld1(population){
    return (population/7900)*100;
}

const percentageOfWorld2 = function(population){
    return (population/7900)*100;
}

const percentPortugal = percentageOfWorld1(10);
const percentChina = percentageOfWorld1(1441);
const percentUSA = percentageOfWorld1(332);

console.log(percentPortugal, percentChina, percentUSA);

//========================================================================
//Assignment 3 - Arrow function
const percentageOfWorld3 = population => (population/7900)*100;

const percentPortugal3 = percentageOfWorld3(10);
const percentChina3 = percentageOfWorld3(1441);
const percentUSA3 = percentageOfWorld3(332);

console.log(percentPortugal3,percentChina3,percentUSA3);

//========================================================================
//Assignment 4 - Functions calling other functions
function describePopulation(country, population){
    return `${country} has ${population} million people, which is about ${percentageOfWorld3(population)}% of the world `;
}

console.log(describePopulation('china', 1441));
console.log(describePopulation('India', 1300));
console.log(describePopulation('USA', 332));

//=========================================================================
//Assignment 5 - Introduction to Arrays

const populations = [10, 1441, 332, 135];
console.log(populations.length === 4);

const percentages = [percentageOfWorld3(populations[0]), percentageOfWorld3(populations[1]), percentageOfWorld3(populations[2]),percentageOfWorld3(populations[3])];
console.log(populations, percentages);

//==========================================================================
//Assignment 6 - Basic array operations
const neighbours = ['Bangladesh', 'China', 'Pakistan'];
neighbours.push('Utopia');
console.log(neighbours);
neighbours.pop();
console.log(neighbours);
if(!neighbours.includes('Germany')) console.log('Probably not a central Europian country :D');

neighbours[neighbours.indexOf('China')] = 'Fake china';
console.log(neighbours);
//===========================================================================
const rohan = {
    firstName: 'Rohan',
    lastName: 'Mane',
    birthYear: 2000,
    job: 'Web developer',
    friends: ['Minesh', 'Suraj', 'Honey'],
    hasDriversLicense: true,

    calcAge: function(birthYear){
        return 2030-birthYear;
    },

    getSummary: function(){
        return `${this.firstName} ${this.lastName} is ${this.calcAge(this.birthYear)} year old.He works as ${this.job} and his friends are ${this.friends}`;
    }
};

console.log(rohan.calcAge(rohan.birthYear));
console.log(rohan['calcAge'](2000));
console.log(rohan.getSummary());

//================================================================================
//Assignment 7 - Introduction to objects
// const myCountry = {
//     country: 'India',
//     capital: 'Dehli',
//     language: 'Hindi',
//     population: 1.30,
//     neighbours: ['Bangladesh', 'China', 'Pak']
// }
// console.log(myCountry);

//=================================================================================
//Assignment 8  - Dot vs bracket notation
// console.log(`${myCountry.country} has ${myCountry.population} million ${myCountry.language} speaking people, ${myCountry.neighbours.length} neighbouring countries and a capital called ${myCountry.capital}`);
// console.log(`${myCountry.country} has ${myCountry.population+=2} million ${myCountry.language} speaking people, ${myCountry.neighbours.length} neighbouring countries and a capital called ${myCountry.capital}`);
// console.log(`${myCountry.country} has ${myCountry['population']-=2} million ${myCountry.language} speaking people, ${myCountry.neighbours.length} neighbouring countries and a capital called ${myCountry.capital}`);

//==================================================================================
//Assignment 9 - Object methods
const myCountry = {
    country: 'India',
    capital: 'Dehli',
    language: 'Hindi',
    population: 1.30,
    neighbours: ['Bangladesh', 'China', 'Pak'],

    describe: function(){
        return `${this.country} has ${this.population} million ${this.language}  speaking people , ${this.neighbours.length} neibouring countries and a capital called ${this.capital}`;
    },

    checkIsland: function(){
        return this.neighbours.length === 0? true: false;
    }
}

console.log(myCountry.describe());
console.log(myCountry.checkIsland());

//==================================================================================
// Assignment 10 - Iteration- for loop
for (let i=1;i<=50;i++)
{
    console.log(`voter number ${i} is currently voting`);
}

//=====================================================================================
//Assignment 11 - Looping Arrays, Breaking and Cotinuing

//populations = [10, 1441, 332, 135];
const percentage2 = [];

for(let i=0;i<populations.length; i++){
    const perc = percentageOfWorld1(populations[i]);
    percentage2.push(perc);
}
console.log(percentage2);

//=======================================================================================
//Assignment 12 - Looping backwords and loops in loops
const listOfNeighbours = [
    ['Canada', 'Mexico'],
    ['Spain'],
    ['Norway', 'Sweden', 'Russia']
]

for(let i=0; i<listOfNeighbours.length;i++)
{
    for(let j=0;j<listOfNeighbours[i].length; j++){
        console.log(`Neighbour: ${listOfNeighbours[i][j]}`);
    }
}

//=========================================================================================
//Assignment 13- The while loop
const percentage3 = [];
let i=0;
while(i<populations.length){
    const perc = percentageOfWorld1(populations[i]);
    percentage3.push(perc);
    i++;

}
console.log(percentage3);

// End of the season...