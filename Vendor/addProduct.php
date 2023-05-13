<?php
    $pageTitle="Dashboard";
    include 'header.php';
 ?>
 <?php include 'sidebar.php' ?>
<section id="main">
    <?php include 'nav.php'; ?>
    <div id="new-product">

      <form class="" action="" method="post">
        <h3>Post new product</h3>
        <label for="">Upload image</label>
        <input type="file" name="" value="upload image">
        <label for="">Product Name</label>
        <input type="text" name="" value="">
        <label for="">Description</label>
        <textarea name="name"></textarea>
        <label for="">Item category</label>
        <select class="type" name="">
          <option value="">men</option>
          <option value="">women</option>
          <option value="">Kids</option>
        </select>
        <input type="submit" name="" value="Post Product">
      </form>
      <div class="rules">
        <div>
          <h3>Guidelines</h3>
          <li>Images size should be 400px by 400px</li>
          <li>Images should be clear and not have numbers in them</li>
          <li>Image size should be 400px by 400px</li>
        </div>
      </div>
    </div>
</section>

<?php include 'footer.php'; ?>
