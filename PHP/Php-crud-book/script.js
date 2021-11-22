// dom element
const table = document.querySelector('tbody');
const formbox = document.querySelector('.modal1')
const form = document.getElementById('carform1');
const newentry = document.querySelector('.button');
const overlay = document.querySelector('.overlay');
const submit = document.querySelector('.submit');
const searchData = document.querySelector('.modal2');

//validation
const isbn = document.getElementById('isbv');
const author = document.getElementById('anamev');
const book = document.getElementById('bonamev');
const pricev = document.getElementById('pricev');





function formValidation(id)
{
    const error = document.getElementById(id);
    const checkval = error.value;
    //console.log(error.value);
    if(checkval == '')
    {
        error.nextElementSibling.innerText="Please Enter This Feild!";
    }
    else error.nextElementSibling.innerText="";

    
}

