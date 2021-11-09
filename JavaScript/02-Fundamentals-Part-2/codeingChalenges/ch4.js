const calcTips = function(bill){
    return bill>=50 && bill <=300 ? bill*0.15 : bill*0.2;
}

const billss = [22, 295, 176, 440, 37, 105, 10, 1100, 86, 52];
const tipss = [];
const totals = [];

for(let i=0; i<billss.length;i++)
{
    tipss.push(calcTips(i));
    totals.push(billss[i]+calcTips[i]);
}
console.log(tipss, billss);