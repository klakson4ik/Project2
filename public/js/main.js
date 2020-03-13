function fetchQuery(query, callback){
    fetch(query)
        .then(response => {
            if (response.status !== 4 && response.status !== 200) {
                console.log(`Неудачно: ${response.status} : ${response.statusText}.`);
                return "Сервер недоступен"
            } else {
                return response.text()
            }
        })
        .then( response => callback(response))
}

function fetchQueryPost(query, data, callback){
    fetch(query, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {'Content-Type': 'application/json; charset=UTF-8'}
    })
        .then(response => {
            if(response.status !== 4 && response.status !== 200){
                console.log(`Неудачно: ${response.status} : ${response.statusText}.`);
                return "Сервер недоступен"
            }else{
                return response.text()
            }
        })
        .then( response => callback(response))

}


// Button Bay-----------------------------------------------------------------------------------------------------------
let body = document.querySelector('body');

body.addEventListener('click', (event) => {

    if(event.target.className === "add-to-cart"){
        let colorCart = 1;
        let complectCart = 1;
        let id = event.target.dataset.id
        let qty = (document.querySelector('.qty') != null) ? document.querySelector('.qty').value : 1;



        if(document.querySelector('#color') != null){
            let color = document.querySelector('#color');
            colorCart = color.options[color.selectedIndex].dataset.colorid;
        }
        if(document.querySelector('#complect') != null){
            let complect = document.querySelector('#complect');
            complectCart = complect.options[complect.selectedIndex].dataset.complectid;
        }

        fetchQuery(`/cart/add?id=${id}&qty=${qty}&color=${colorCart}&complect=${complectCart}`,  (response) => {
            let basket = document.querySelector('.basket>div');
            basket.innerHTML = response;
            // location.reload();
        })

    }

    if(event.target.className === "bay-all")
    {
        location.replace ('../cart/bay');
    }
});


// Basket show--------------------------------------------------------------------------
let basket = document.querySelector('.basket>img');

basket.addEventListener('click', () =>
{
    fetchQuery('/cart/show',  (response) =>
    {
        let modalWindowBasket = document.querySelector('.modalWindowBasket');
        modalWindowBasket.innerHTML = response;
        modalWindowBasket.style.display = 'block';

        let basketQty = document.querySelectorAll('.basketQty');
        let basketEachDiv = document.querySelectorAll('.basketEachDiv');
        let basketFullPrice = document.querySelector('.basketFullPrice');


        let basketArrayPrice = [];
        let BasketStaticFullPrice = 0;
        let basketData = [];



        for (let i = 0; i < basketEachDiv.length; ++i)
        {
            if(basketQty[i].value < 2)
                basketEachDiv[i].childNodes[7].childNodes[3].style.display = 'none';

            basketArrayPrice[i] = Number(basketEachDiv[i].childNodes[7].childNodes[3].dataset.thisfullprice);
            BasketStaticFullPrice += basketArrayPrice[i];
            basketData[i] = basketQty[i].value;
        }


        basketFullPrice.textContent = "Товаров на сумму: " + symboleLeft + BasketStaticFullPrice + symboleRight;

        for(let i = 0; i < basketQty.length; ++i) {
            basketQty[i].addEventListener('change', () =>
            {
                let basketPrice = basketQty[i].dataset.basketprice;
                let thisBasketPrice =  basketQty[i].parentNode.nextElementSibling.childNodes[3];
                thisBasketPrice.intValue = basketPrice * basketQty[i].value * course;
                thisBasketPrice.textContent = "Общая цена: " + symboleLeft + thisBasketPrice.intValue + symboleRight;

                if (basketQty[i].value < 2)
                    thisBasketPrice.style.display = "none";
                if (basketQty[i].value > 1)
                    thisBasketPrice.style.display = "block";

                basketArrayPrice[i] = thisBasketPrice.intValue;
                let sumBasketArrayPrice = 0;
                for (let a = 0; a < basketArrayPrice.length; ++a)
                {
                    sumBasketArrayPrice +=basketArrayPrice[a];
                }

                basketFullPrice.textContent = "Товаров на сумму: " + symboleLeft + sumBasketArrayPrice + symboleRight;

                basketData[i] = basketQty[i].value

            })
        }


        let basketDelPosition = document.querySelectorAll('.cl-btn-4');

        for(let i = 0; i < basketDelPosition.length; ++i)
        {
            basketDelPosition[i].addEventListener('click', () =>
            {
                basketQty[i].disabled = "true";
                basketEachDiv[i].classList.add('disabledDiv');
                basketDelPosition[i].style.display = "none"
                basketDelPosition[i].nextElementSibling.style.display = "block"
                BasketStaticFullPrice -= basketArrayPrice[i]
                basketFullPrice.textContent = "Товаров на сумму: " + symboleLeft + BasketStaticFullPrice + symboleRight;

                basketData[i] = 0

            })
        }

        let basketAddPosition = document.querySelectorAll('.cl-btn-5');

        for(let i = 0; i < basketAddPosition.length; ++i)
        {
            basketAddPosition[i].addEventListener('click', () =>
            {
                basketQty[i].disabled = "";
                basketEachDiv[i].classList.remove('disabledDiv');
                basketAddPosition[i].style.display = "none"
                basketAddPosition[i].previousElementSibling.style.display = "block"
                BasketStaticFullPrice += basketArrayPrice[i]
                basketFullPrice.textContent = "Товаров на сумму: " + symboleLeft + BasketStaticFullPrice + symboleRight;

                basketData[i] = basketQty[i].value
            })
        }

        let basketButtonClose = document.querySelector('.basket-button-close');

        basketButtonClose.addEventListener('click', () => {
            fetchQueryPost('/cart/modal', basketData,(response) => {
                let basket = document.querySelector('.basket>div');
                basket.innerHTML = response;
            });
            modalWindowBasket.style.display = "";
        })

        let basketButtonBay = document.querySelector('.basket-button-order');

        basketButtonBay.addEventListener('click', () => {
            fetchQueryPost('/cart/order', basketData,(response) => {
                modalWindowBasket.style.display = "";
                location.replace ('../cart/order');
            });

        })

    })
});



//Mods -------------------------------------------------------------------------------------
let color = document.querySelector('#color');
let complect = document.querySelector('#complect');
let price = document. querySelector('.price');

if(color != null){
    color.addEventListener("change", () => {
        let colorCoef = color.options[color.selectedIndex].dataset.coefficient;
        price.textContent = symboleLeft + price.dataset.price * colorCoef + symboleRight;
    });
}

if(complect != null) {
    complect.addEventListener("change", () => {
        let complectCoef = complect.options[complect.selectedIndex].dataset.coefficient;
        price.textContent = symboleLeft + price.dataset.price * complectCoef + symboleRight;
    });
}












