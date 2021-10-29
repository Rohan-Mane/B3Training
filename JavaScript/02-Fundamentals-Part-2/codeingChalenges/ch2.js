const calcTip = function(bill){
    return bill>=50 && bill <=300 ? bill*0.15 : bill*0.2;
}
const bills = [125,44,550];
const tips = [calcTip(bills[0]), calcTip(bills[1]), calcTip(bills[2])];
console.log(bills, tips);