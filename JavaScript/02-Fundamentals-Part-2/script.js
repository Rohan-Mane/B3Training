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