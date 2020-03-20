<!--<div class="order-div">-->
<!--    --><?php //$curr = $this->getData() ;?>
<!---->
<!--    --><?php //foreach ($_SESSION['basket'] as $item): ?>
<!--        <div class="order-each-div">-->
<!--            <div id="order-first-div">-->
<!--                <a href="../product/--><?php //echo $item['alias'] ;?><!--">-->
<!--                    <img  src="../public/images/mobile/--><?php //echo $item['img'];?><!--" alt="сервер недоступен">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div id="order-center-div">-->
<!--                <p>-->
<!--                    <a href="../product/--><?php //echo $item['alias'];?><!--">--><?php //echo $item['title']; ?><!--</a>-->
<!--                <p>--><?php //echo $item['complect']; ?><!--</p>-->
<!--                <p>--><?php //echo $item['color']; ?><!--</p>-->
<!--                </p>-->
<!--            </div>-->
<!---->
<!--            <div id="order-end-first-div">-->
<!--                <label for="qty">Количество</label>-->
<!--                <input type="number" value="--><?php //echo $item['qty'] ;?><!--" min="0" max="999" size="50px" name="qty" class="order-qty" data-orderprice="--><?php //echo $item['price'];?><!--">-->
<!--            </div>-->
<!--            <div id="order-end-second-div">-->
<!--                <p>Цена: --><?php //echo $curr['Symbol_left']; echo $item['price'] * $curr['value']; echo $curr['Symbol_right'];?><!--</p>-->
<!--                <p data-thisFullPrice="--><?php //echo $item['qty'] * $item['price'] * $curr['value'] ;?><!--" data-symbolLeft="--><?php //echo $curr['Symbol_left'];?><!--" data-symbolRight="--><?php //echo $curr['Symbol_right'];?><!--">Общая цена: --><?php //echo $curr['Symbol_left']; echo $item['qty'] * $item['price'] * $curr['value']; echo $curr['Symbol_right']?><!--</p>-->
<!--            </div>-->
<!--            <div id="order-end-div">-->
<!--                <div class="cl-btn-4"></div>-->
<!--                <div class="cl-btn-5"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //endforeach ;?>
<!--    <p class="order-full-price">Товаров на сумму:  </p>-->
<!--    <button class="order-button-order" type="button">Купить</button>-->
<!--    <button class="order-button-cancel" type="button" name="close">Отменить</button>-->
<!---->
<!--</div>-->
<!---->
<!---->
<!--<script>-->
<!---->
<!--    let symboleLeftOrder = '--><?//=$curr['Symbol_left'];?>//',
//        symboleRightOrder = '<?//=$curr['Symbol_right'];?>//';
//
//    let orderQty = document.querySelectorAll('.order-qty');
//    let orderEachDiv = document.querySelectorAll('.order-each-div');
//    let orderFullPrice = document.querySelector('.order-full-price');
//
//    let orderArrayPrice = [];
//    let orderStaticFullPrice = 0;
//    let orderData = [];
//
//    for (let i = 0; i < orderEachDiv.length; ++i)
//    {
//        if(orderQty[i].value < 2)
//            orderEachDiv[i].childNodes[7].childNodes[3].style.display = 'none';
//
//        orderArrayPrice[i] = Number(orderEachDiv[i].childNodes[7].childNodes[3].dataset.thisfullprice);
//        orderStaticFullPrice += orderArrayPrice[i];
//        orderData[i] = orderQty[i].value;
//    }
//
//    orderFullPrice.textContent = "Товаров на сумму: " + symboleLeftOrder + orderStaticFullPrice + symboleRightOrder;
//
//    for(let i = 0; i < orderQty.length; ++i) {
//        orderQty[i].addEventListener('change', () =>
//        {
//            let orderPrice = orderQty[i].dataset.orderprice;
//            let thisorderPrice =  orderQty[i].parentNode.nextElementSibling.childNodes[3];
//            thisorderPrice.intValue = orderPrice * orderQty[i].value * course;
//            thisorderPrice.textContent = "Общая цена: " + symboleLeftOrder + thisorderPrice.intValue + symboleRightOrder;
//
//            if (orderQty[i].value < 2)
//                thisorderPrice.style.display = "none";
//            if (orderQty[i].value > 1)
//                thisorderPrice.style.display = "block";
//
//            orderArrayPrice[i] = thisorderPrice.intValue;
//            let sumorderArrayPrice = 0;
//            for (let a = 0; a < orderArrayPrice.length; ++a)
//            {
//                sumorderArrayPrice +=orderArrayPrice[a];
//            }
//
//            orderFullPrice.textContent = "Товаров на сумму: " + symboleLeftOrder + sumorderArrayPrice + symboleRightOrder;
//
//            orderData[i] = orderQty[i].value
//
//        })
//    }
//
//
//    let orderDelPosition = document.querySelectorAll('.cl-btn-4');
//
//    for(let i = 0; i < orderDelPosition.length; ++i)
//    {
//        orderDelPosition[i].addEventListener('click', () =>
//        {
//            orderQty[i].disabled = "true";
//            orderEachDiv[i].classList.add('disabledDiv');
//            orderDelPosition[i].style.display = "none";
//            orderDelPosition[i].nextElementSibling.style.display = "block";
//            orderStaticFullPrice -= orderArrayPrice[i];
//            orderFullPrice.textContent = "Товаров на сумму: " + symboleLeftOrder + orderStaticFullPrice + symboleRightOrder;
//
//            orderData[i] = 0
//
//        })
//    }
//
//    let orderAddPosition = document.querySelectorAll('.cl-btn-5');
//
//    for(let i = 0; i < orderAddPosition.length; ++i)
//    {
//        orderAddPosition[i].addEventListener('click', () =>
//        {
//            orderQty[i].disabled = "";
//            orderEachDiv[i].classList.remove('disabledDiv');
//            orderAddPosition[i].style.display = "none";
//            orderAddPosition[i].previousElementSibling.style.display = "block";
//            orderStaticFullPrice += orderArrayPrice[i];
//            orderFullPrice.textContent = "Товаров на сумму: " + symboleLeftOrder + orderStaticFullPrice + symboleRightOrder;
//
//            orderData[i] = orderQty[i].value
//        })
//    }
//
//    let orderButtonClose = document.querySelector('.order-button-cancel');
//
//    orderButtonClose.addEventListener('click', () => {
//        location.replace ('/');
//
//
//    });
//
//    let orderButtonOrder = document.querySelector('.order-button-order');
//
//    orderButtonOrder.addEventListener('click', () => {
//        console.log(orderData)
//        fetchQueryPost('/cart/bought', orderData, (response) => {
//            console.log(response)
//            location.replace ('../cart/bought');
//        });
//
//    })
//
//
//</script>
//
//<style>
//    /*Модальное окно корзины*/
//    .modalWindoworder {
//        position: fixed;
//        top: 0;
//        left: 0;
//        background: rgba(0, 0, 0, 0.65);
//        display: none;
//        width: 100%;
//        height: 100%;
//        z-index: 1000;
//    }
//
//    .order-div{
//
//        background-color: white;
//        width: 60%;
//        height: auto;
//        margin: 0 auto;
//        padding: 10px;
//        font-size: 0.8rem;
//        left: 17vw;
//        top: 15%;
//        overflow: auto;
//        opacity: 0.9;
//
//
//    }
//
//    .order-each-div{
//        display: grid;
//        grid-template-columns: 10% 1fr 30% 20% 5%;
//    }
//
//    .order-div img{
//        height: auto;
//        width: 40%;
//    }
//
//    #order-first-div{
//        grid-column: 1;
//        align-self: center;
//        text-align: center;
//    }
//
//    #order-center-div{
//        grid-column: 2;
//        align-self: center;
//    }
//
//    #order-end-first-div{
//        grid-column: 3;
//        align-self: center;
//    }
//
//    #order-end-second-div{
//        grid-column: 4;
//        align-self: center;
//    }
//
//    #border-end-div>button{
//        display: none;
//    }
//
//    #order-end-div{
//        grid-column: 5;
//        align-self: center;
//        text-align: center;
//    }
//
//    .cl-btn-4 {
//        width: 20px;
//        height: 20px;
//        border-radius: 6px;
//        background: #337AB7;
//        margin: 20px auto;
//        position: relative;
//        display: block;
//        z-index: 200;
//        text-indent: -9999px;
//        cursor: pointer;
//    }
//    .cl-btn-4:before,
//    .cl-btn-4:after {
//        content: '';
//        width: 80%;
//        height: 4px;
//        background: #BFE2FF;
//        position: absolute;
//        top: 40%;
//        left: 10%;
//        transform: rotate(45deg);
//        transition: all 0.3s ease-out;
//    }
//    .cl-btn-4:after {
//        transform: rotate(-45deg);
//        transition: all 0.3s ease-out;
//    }
//    .cl-btn-4:hover:before,
//    .cl-btn-4:hover:after {
//        transform: rotate(180deg);
//        background: #FFF;
//    }
//
//    .cl-btn-5 {
//        width: 20px;
//        height: 20px;
//        border-radius: 6px;
//        background: #337AB7;
//        margin: 20px auto;
//        position: relative;
//        display: none;
//        z-index: 200;
//        text-indent: -9999px;
//        cursor: pointer;
//    }
//    .cl-btn-5:before,
//    .cl-btn-5:after {
//        content: '';
//        width: 80%;
//        height: 4px;
//        background: #BFE2FF;
//        position: absolute;
//        top: 40%;
//        left: 10%;
//        transition: all 0.3s ease-out;
//    }
//    .cl-btn-5:after {
//        transform: rotate(-90deg);
//        transition: all 0.3s ease-out;
//    }
//    .cl-btn-5:hover:before,
//    .cl-btn-5:hover:after {
//        background: #FFF;
//    }
//
//    .disabledDiv{
//        background-color: darkgrey;
//        opacity: 0.6;
//    }
//</style>