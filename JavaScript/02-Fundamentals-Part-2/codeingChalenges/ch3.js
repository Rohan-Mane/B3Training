const mark = {
    firstName: 'Mark',
    lastName: 'Miller',
    mass: 78,
    height: 1.69,

    calcBMI: function(){
        this.bmi = this.mass/this.height**2;
        return this.bmi;
    }
}

const jhon = {
    firstName: 'Jhon',
    lastName: 'Smith',
    mass: 92,
    height: 1.95,

    calcBMI: function(){
        this.bmi = this.mass/this.height**2;
        return this.bmi;
    }
}

if(mark.bmi > jhon.bmi){
    console.log(`${mark.firstName} ${mark.lastName}'s BMI (${mark.calcBMI()}) is higher than Jhon's(${jhon.calcBMI()})`);
}else{
    console.log(`${jhon.firstName} ${jhon.lastName}'s BMI (${jhon.calcBMI()}) is higher than Mark's(${mark.calcBMI()})`);
}
console.log(mark.bmi);