<?php require_once('..\kresources\config.php'); ?>
<?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
     include(TEMPLATE_FRONT_USER . DS . 'header_user.php');
} else {
    include(TEMPLATE_FRONT . DS . 'header.php');
} ?>

<!-- Page Content -->
<div class="container">
</br />
  <br />
  <div class="row">
    <header>
    </br />
    <h1 class="text-center ">Giỏ hàng</h1>
    </header>
  </br />
    <h4 class="text-center bg-danger">
      <?php display_message(); ?>
    </h4>
    <form action="" method="post">

      <table class="table table-striped">
        <tbody>
          <?php cart(); ?>
        </tbody>
      </table>
      
        <form action="" method="post">
            <?php buy(); ?>
            <div class="form-group text-left">
              <input type="submit" name="buy" class="btn btn-primary pull-left" value="MUA HÀNG" ></br>
            </div>
        </form>
    </form>

    <!--  ***********CART TOTALS*************-->

    <div class="col-xs-4 pull-right ">
      <h2>Tổng cộng</h2>

      <table class="table table-bordered" cellspacing="0">

        <tr class="cart-subtotal">
          <th>Số lượng:</th>
          <td><span class="amount">
              <?php
              echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?>
            </span></td>
        </tr>
        <tr class="shipping">
          <th>Phí ship</th>
          <td>Miễn phí</td>
        </tr>
        <tr class="order-total">
          <th>Tổng giá trị :</th>
          <td><strong><span class="amount"> 
                <?php
                echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?> VND
              </span></strong> </td>
        </tr>
        </tbody>
      </table>
      
      
    </div>
    
  </div>
      
</div>




<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>