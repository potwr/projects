var ingredientsList = [
    {name: "cheese", key: "KeyC", keyNumber: 67},
    {name: "bun", key: "KeyB", keyNumber: 66},
    {name: "salad", key: "KeyS", keyNumber: 83},
    {name: "ketchup", key: "KeyK", keyNumber: 75},
    {name: "mayonnaise", key: "KeyM", keyNumber: 77},
    {name: "tomato", key: "KeyT", keyNumber: 84},
    {name: "pickle", key: "KeyP", keyNumber: 80},
    {name: "onion", key: "KeyO", keyNumber: 79},
    {name: "jalapeno", key: "KeyJ", keyNumber: 74},
    {name: "beef", key: "KeyG"},
    {name: "chicken", key: "KeyH"},
    {name: "becon", key: "KeyE"},
]

var beverageMenu = [
    {name: "Coke", key: "Digit1"},
    {name: "Coke Zero", key: "Digit2"},
    {name: "Fanta", key: "Digit3"},
    {name: "Sprite", key: "Digit4"}
]
// {name: , key: },

var burgerMenu = [
    {name: "Frisco", ingredients: [ingredientsList[4], ingredientsList[2], ingredientsList[7], ingredientsList[5], ingredientsList[9], ingredientsList[0], ingredientsList[11]]},
    {name: "Original", ingredients: [ingredientsList[4], ingredientsList[2], ingredientsList[6], ingredientsList[7], ingredientsList[5], ingredientsList[3], ingredientsList[9], ingredientsList[0]]},
    {name: "Crispy Chicken", ingredients: [ingredientsList[4], ingredientsList[2], ingredientsList[5], ingredientsList[10], ingredientsList[0], ingredientsList[11]]}
];

var numberOfCurrentOrders = 0;

//jeśli max==3, output: 0, 1, 2
function randomNumber(max) {
    return Math.floor(Math.random() * max);
}

function createOrder() {

    let orderSlot = numberOfCurrentOrders + 1;
    let menuNumber = randomNumber(burgerMenu.length);
    let ingredientsNumber = burgerMenu[menuNumber].ingredients.length;
    
    $(".order-"+orderSlot+" .order-content").append('<span class="order-name">'+burgerMenu[menuNumber].name+'</span><br>');

    for(a = 0; a < ingredientsNumber; a++) {
        $(".order-"+orderSlot+" .order-content").append('<span class="order-ingredient">'+burgerMenu[menuNumber].ingredients[a].name+'</span><br>');
    }

    let isBeverage = randomNumber(10);
    if(isBeverage < 6) {
        let beverageNumber = randomNumber(beverageMenu.length);
        $(".order-"+orderSlot+" .order-content").append('<span class="order-beverage">'+beverageMenu[beverageNumber].name+'</span><br>');
    }

    numberOfCurrentOrders++;
}

function createNewOrderSheet() {
    $(".orders").append('<div class="order order-'+(numberOfCurrentOrders+1)+'"><div class="order-header">Order #0001</div><div class="order-content"></div><div class="order-date">28/05/24 01:22</div></div>');
    
    if(numberOfCurrentOrders < 3) {
        $(".order-"+(numberOfCurrentOrders+1)).animate({right: "+="+(((4-(numberOfCurrentOrders+1))*185)+20)+"px"}, 100)
    }

    createOrder();
}

function isKeyInIngredientsList(e) {
    let ingredientsLength = ingredientsList.length;
    
    let a = 0;
    while(a < ingredientsLength) {
        if(e.code === ingredientsList[a].key) {
            $(".kitchen").prepend('<div class="ingredient ingredient-'+ingredientsList[a]['name']+'"><span>'+ingredientsList[a]['name']+'</span></div>');
            a = ingredientsLength+1;
            return true;
        }
        a++;
    }
    if(a == ingredientsLength) {
        return false;
    }
}

var lengthToDownAnimation = 470;

document.addEventListener("keydown", function (e) {
        if(isKeyInIngredientsList(e) == true) {
            $(".ingredient").first().animate({top: "+="+lengthToDownAnimation+"px"}, 100 );
            console.log(lengthToDownAnimation);
            lengthToDownAnimation -=40;
        }
    });