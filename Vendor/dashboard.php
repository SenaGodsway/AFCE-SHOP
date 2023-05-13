<?php
    $pageTitle="Dashboard";
    include 'header.php';
  
 ?>
 <?php include 'sidebar.php' ?>
<section id="main">
    <?php include 'nav.php'; ?> 
    <div class="stats">
      <div class="total-products">
        <h5>Total prodcts</h5>
        <h3>50</h3>
      </div>
    </div>
    <div class="new-order">
      <h3>Pending orders</h3>
      <div class="order-list">
        <div class="item-image">
          <img src="..\img\products\1.jpg" alt="">
        </div>
        <div class="item-name">
          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
        </div>
        <div class="item-number">
          <h3>product number</h3>
          <h5>#204928</h5>
        </div>
          <button type="button" name="button" class="approve-btn">Approve Order</button>
          <i class="#">:</i>
      </div>
      <div class="order-list">
        <div class="item-image">
          <img src="..\img\products\1.jpg" alt="">
        </div>
        <div class="item-name">
          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
        </div>
        <div class="item-number">
          <h3>product number</h3>
          <h5>#204928</h5>
        </div>
          <button type="button" name="button" class="approve-btn">Approve Order</button>
          <i class="#">:</i>
      </div>
    </div>
</section>

<?php include 'footer.php'; ?>
