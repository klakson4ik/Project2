<div class="priceAndQty">
    <p><?php echo $this->currency->currency['Symbol_left']; echo $this->viewPriceAndQty['price'] *  $this->currency->currency['value']; echo $this->currency->currency['Symbol_right'] ;?>
        <span><?php echo $this->viewPriceAndQty['qty'] ;?>шт</span>
    </p>
</div>
