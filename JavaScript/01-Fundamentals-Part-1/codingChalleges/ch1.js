// Mark and Jhon 
let markWeight = 78;
let markHeight = 1.69;
let jhonWeight = 92;
let jhonHeight = 1.95;

let bmiMark = markWeight/(markHeight**2);
let bmiJhon = jhonWeight/(jhonHeight**2);

let markHigherBmi = bmiMark > bmiJhon;
console.log(markHigherBmi);

//ch2

// if (bmiMark > bmiJhon)
// {
//     console.log("Mark's BMI is higher than Jhon's");
// }
// else{
//     console.log("Jhon's BMI is higher than Mark's");
// }

if (bmiMark > bmiJhon)
{
    console.log(`Mark's BMI${(bmiMark)} is higher than Jhon's${(bmiJhon)}`);
}
else{
    console.log(`Jhon's BMI${bmiJhon} is higher than Mark's${bmiMark}`);
}