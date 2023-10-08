<?php require_once('config.php'); ?>

<?php

if (isset($_GET['add'])) {

  $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");
  confirm($query);

  while ($row = fetch_array($query)) {

    if ($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

      $_SESSION['product_' . $_GET['add']] += 1;
      redirect("..\public_user\checkout.php");

    } else {

      set_message("Chúng tôi chỉ còn  " . $row['product_quantity'] . " " . "{$row['product_title']}" . " có sẵn");
      redirect("..\public_user\checkout.php");
    }

  }
}



if (isset($_GET['remove'])) {
  if ($_SESSION['product_' . $_GET['remove']] <= 1) {
    set_message("Không thể xóa khi còn 1 sản phẩm");
    redirect("..\public\checkout.php");
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
  } else {
    $_SESSION['product_' . $_GET['remove']]--;
    redirect("..\public_user\checkout.php");
  }
}

if (isset($_GET['delete'])) {

  $_SESSION['product_' . $_GET['delete']] = '0';
  unset($_SESSION['item_total']);
  unset($_SESSION['item_quantity']);

  redirect("..\public_user\checkout.php");


}

function cart()
{
  $total = 0;
  $item_quantity = 0;
  $item_name = 1;
  $item_number = 1;
  $amount = 1;
  $quantity = 1;
  $dem = 0;
  echo"<tr>
              <th>Sản phẩm</th>
              <th>Giá</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
              <th>Tùy chọn</th>
          </tr>";
  foreach ($_SESSION as $name => $value) {
    if ($value > 0) {
      if (substr($name, 0, 8) == "product_") {
        $length = strlen($name);
        $id = substr($name, 8, $length);
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
        confirm($query);
        
        while ($row = fetch_array($query)) {
          $sub = $row['product_price'] * $value;
          $item_quantity += $value;
          $product_photo = display_images($row['product_image']);
          $product = <<<DELIMETER
          
<tr>
  <td>{$row['product_title']}<br>
    <img width='100' src = '../kresources/{$product_photo}'>
  </td>
  <td>{$row['product_price']} VND</td>
  <td>{$value}</td>
  <td>{$sub} VND</td>
  <td>
  <a class='btn btn-warning' href="..\kresources\cart.php?remove={$row['product_id']}"><span class='glyphicon glyphicon-minus'></span></a>   
  <a class='btn btn-success' href=" ..\kresources\cart.php?add={$row['product_id']}"><span class='glyphicon glyphicon-plus'></span></a>
  <a class='btn btn-danger' href=" ..\kresources\cart.php?delete={$row['product_id']}"
  onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class='glyphicon glyphicon-remove'></span></a>
  <input class='btn btn-success' type="checkbox" name="product_select[]" value="{$row['product_id']}">
  </td>
  </tr>
  
<input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
<input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
<input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
<input type="hidden" name="quantity_{$quantity}" value="{$value}">
 
DELIMETER;
          
          echo $product;
          $item_name++;
          $item_number++;
          $amount++;
          $quantity++;
        }
        $_SESSION['item_total'] = $total += $sub;
        $_SESSION['item_quantity'] = $item_quantity;
        $dem++;
      }

    }
  }
  if ($dem == 0) {
    echo "<h2 class='text-center '>Không có sản phẩm</h2> ";
  }
  
}
function buy()
{
  if (isset($_POST['buy']) && $_SESSION['item_quantity'] > 0) {
    header("Location:buy.php");
    $_SESSION['selected_products'] = array();
    foreach ($_POST['product_select'] as $selected_product) {
      array_push($_SESSION['selected_products'], $selected_product);
    }

    exit;
  }
}
function return_cart()
{
  if (isset($_POST['return_cart'])) {
    header("Location:checkout.php");
    exit;
  }
}
function buy_cart()
{
  if (isset($_SESSION['selected_products']) && count($_SESSION['selected_products']) > 0) {
    $total = 0;
    $item_quantity = 0;
    foreach ($_SESSION['selected_products'] as $selected_product) {
      $query = query("SELECT * FROM products WHERE product_id = " . escape_string($selected_product));
      confirm($query);
      while ($row = fetch_array($query)) {
        $product_photo = display_images($row['product_image']);
        $sub = $row['product_price'] * $_SESSION["product_" . $selected_product];
        $item_quantity += $_SESSION["product_" . $selected_product];
        echo "<tr>";
        echo "<td>{$row['product_title']}<br>
        <img width='100' src = '../kresources/{$product_photo}'>
      </td>";
        echo "<td>{$row['product_price']} VND</td>";
        echo "<td>{$_SESSION["product_" . $selected_product]}</td>";
        echo "<td>{$sub} VND</td>";
        echo "</tr>";
        $total += $sub;
      }
    }
    echo "<tr><td>Tổng số lượng: {$item_quantity}</td><td>Tổng tiền: {$total} VND</td></tr>";
  } else {
    echo "<script type='text/javascript'>";
    echo "var confirmResult = confirm('Không có sản phẩm được chọn trong giỏ hàng! Bạn có muốn đến gian hàng không( OK đến trang mua sắm || Cancel để trở lại giỏ hàng.)');";
    echo "if (confirmResult) {";
    echo "window.location = 'shop.php';";
    echo "} else {";
    echo "window.location = 'checkout.php';";
    echo "}";
    echo "</script>";
  }
  
}
function display_buy(){
  $query = query("SELECT * FROM buy ORDER BY id DESC LIMIT 1");

  // Kiểm tra xem có dữ liệu hay không
  if (mysqli_num_rows($query) > 0) {
    while ($row = fetch_array($query)) {
      $status = $row['status'];
      $photo = display_images($row['photo']);

      echo "<div class='row justify-content-between'>";
      //Cột hiển thị thông tin
      echo "<div class='col-md-5'>";
      echo "<table class='hero-feature' align='center'>
          <tr>
          <th><img align='center' width='200' src='../kresources/{$photo}'></th>
          </tr>
          <tr>
          <td><h2 class='text center'>{$row['product_name']}</h2></td>
          </tr>
          <tr>
          <td><h3><strong>Giá tiền:</strong> {$row['price']} KVND</h3></td>
          </tr>
          <tr>
          <td><h4><strong>Số lượng :</strong>{$row['quantity']}</h4></td>
          </tr>
          <tr>
          <td><h4><strong>Tổng tiền :</strong>{$row['amount']} KVND</h4></td>
          </tr>
          </table>";
      echo "</div>";

      //Cột hiển thị nút điều hướng
     echo "<div class='col-md-5' style='border: 1px solid black; border-radius: 10px; width: 610px; height: 369px; margin: auto; display: flex; flex-direction: column; justify-content: center; align-items: center;'>";
echo "<div style='width: 100%; text-align: center;'>
    <h2>Bạn muốn chuyển đi đâu?</h2>
    <div>
        <a href='index_user.php' class='btn btn-success' style='margin-right: 10px;'>Trang chủ</a>
        <a href='..\public_user\user\index_user.php?order' class='btn btn-success'>Trang Đơn Hàng</a>
    </div>
</div>";
echo "</div>";

      echo "</div>";

      echo "</div>"; //Đóng thẻ div row
    }
  }
}















?>