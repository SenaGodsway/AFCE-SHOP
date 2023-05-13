<?php include('./view/header.php')?>
<link rel="stylesheet" href="css/cart.css">
<section id="myCart">
    <div class="title-area">
        <h2>My cart</h2>
        <div>
            <h3>Total: &nbsp; $500.0</h3> 
            <button>Checkout</button>
        </div>
    </div>
    <div class="item-list">
        
            <div class="item-image">
                <img src="./img/products/9.jpg" alt="">
            </div>
            <div class="details">
               <div>
                <h3>Size</h3>
                <span class="selected">Small</span>
                <span>Medium</span>
                <span>Large</span>
               </div>
               <div>
                <h3>Quantity</h3>
                <!-- <span></span> -->
                <select name="" id="">
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                </select>
               </div>
                <div class="price">
                <h3>Price</h3>
                <h4>$200.00</h4>
            </div>
            </div>
           
            <div class="action">
                <a href="#">Remove</a>
            </div>
    </div>
</section>
<?php include('./view/footer.php') ?>

<script type="text/javascript" src="script/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="script/app.js"></script>