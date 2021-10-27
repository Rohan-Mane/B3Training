// Mark and Jhon
let markWeight = 78;
let markHeight = 1.69;
let jhonWeight = 92;
let jhonHeight = 1.95;

let bmiMark = markWeight/(markHeight**2);
let bmiJhon = jhonWeight/(jhonHeight**2);

let markHigherBmi = bmiMark > bmiJhon;
console.log(markHigherBmi);