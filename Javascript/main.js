'use strict';
// print Hello World
/*
console.log("Hello World");
*/ 

/*
function MyName(){
    let name = "Mukibul Minhaz";
    console.log(name);
}
MyName();
*/


/*
function MyName(){
    let name = "Mukibul Minhaz";
}

MyName();
*/ 

// spread operator is more better from push

/* 
let poorCountry=[
    "Bangladesh",
    "Pakistan"];
let richCountry=[...poorCountry,
    "USA",
    "UK", "UAE"];

console.log(richCountry);

*/ 
// push
/*
let poorCountry=[
    "Bangladesh",
    "Pakistan"];
let richCountry=["USA",
    "UK", "UAE"];

richCountry.push(poorCountry);
console.log(richCountry);
*/ 
// Rest parameter
/*
function Calculation(...num){
    let sum=0;
    for(let i of num){
        sum+=i;
}
console.log(sum);
}
Calculation(10,20,30,40,50)
*/ 

// dynamic function

/*
var N= function(name){
    return name; 
}; 
console.log(N("Mukibul Minhaz")); 

*/

// variable scope
/*
function MyFun(){
    var name="Mukibul Minhaz";
    console.log(name);
}

MyFun();
*/ 

// variable Hoisting

/* 
name="Mukibul";
console.log(name);
var name; 
*/ 

// simple for loop 
/*
var i=0;
for(i=0;i<=50;i++){
    console.log("Allah");
}
    */ 

// for of loop

/* 
var cities=["Dhaka","Chittagong","Sylhet","Khulna","Rajshahi","Barishal","Rangpur","Mymensingh"];
for(let oneName of cities){
    console.log(oneName);
}
*/ 

// object

// simple object
/*
var billGates={shirt:true,shirtColor:"offwhite", smile:true, sweater:true,sweatercolor:"grey", chosma:true};

console.log(billGates['shirtColor']);
*/ 
// Nested object
/*
var billGatesPro={
    shirt:{
        color:"offwhite",
        quality:"good",
        price:"200USD"
    },
    sweater:{
        color:"grey",
        quality:"good",
        price:"230USD",
        warm:"best"
    },
    face:{
        smiling:"yes",
        chosma:"yes",
        teeth:"white,big"
    }
}

console.log(billGatesPro['sweater']['color']);
*/ 

// for in loop for object

/*
var billGates={shirt:true,shirtColor:"offwhite", smile:true, sweater:true,sweatercolor:"grey", chosma:true};

for(let props in billGates){
    console.log(props+" : "+billGates[props]);
}
*/ 

// decision making if else
/*
var billGates={shirt:true,shirtColor:"offwhite", smile:true, sweater:true,sweatercolor:"grey", chosma:true};

if(billGates['sweatercolor']=="red"){
    console.log("sweater is red");
}
else if(billGates['sweatercolor']=="grey"){
    console.log("sweater is grey");
}
else{
    console.log("sweater color is not found");
}
*/ 

// ES6 functions: Simple, Parameterized, Rest Parameters, Returning functions, Anonymous functions, Parameterized Anonymous functions, Arrow Functions, the function constructor 

// simple function
/*
function myFun(){
    var x=20;
    var y=30;
    var z=x+y;
    console.log(z);
}

myFun(); 
*/ 

// parameterized function
/* 
function myFun(x,y){
    var z=x+y;
    console.log(z);
}

myFun(10,20);
*/ 

// rest parameter

function something(...x){
    console.log(x[6]);
}

something(10,20,30,40,50,60,"A","B","C");