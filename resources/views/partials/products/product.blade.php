<div class="product-item">
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="{{$productId}}">
        <input type="hidden" name="currency_code" value="USD">
        
        <div class="product-img">
            <img class="display-img" src="../images/products/{{$img}}" alt="{{$product}}">
        </div>
        
        <p class="product-name">{{$name}}</p>
        <p class="product-price">{{$amount}}</p>
        
        <div class="pp-buy-button">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/src/pixel.gif" width="1" height="1">
        </div>
    </form>
</div>
