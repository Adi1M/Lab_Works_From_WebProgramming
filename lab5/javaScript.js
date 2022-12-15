const animals = ['Worm', 'Eagle'];
const cars = ["Mercedes", "BMW", "Toyota", "Tesla"];
const fruits = ["Banana", "Apple"];


function btn_Animals(){
    for (let i = 0; i < animals.length; i++) {
        let animal = document.getElementById("block" + i);
        animal.innerText = animals[i];
    }
}


function btn_Cars(){
    for (let i = 0; i < cars.length; i++) {
        let car = document.getElementById("block" + i);
        car.innerText = cars[i];
    }
}

function btn_Fruits() {
    for (let i = 0; i < fruits.length; i++) {
        let fruit = document.getElementById("block" + i);
        fruit.innerText = fruits[i];
    }
}

function btn_All() {

}

