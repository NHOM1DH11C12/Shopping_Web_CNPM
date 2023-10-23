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
  echo "<tr>
              <th><input type='checkbox' id='select-all' name='select_all'>
              Chọn sản phẩm
              </th>
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
          $s = number_format($sub);
          $price=number_format($row['product_price']);
          $item_quantity += $value;
          $product_photo = display_images($row['product_image']);
          $product = <<<DELIMETER
          
<tr>
<td>
  <input type='checkbox' name='product_select[]' value='{$row['product_id']}'>
  </td>
  <td>
  {$row['product_title']}<br>
    <img width='100' src='../kresources/{$product_photo}'>
  </td>
  <td>{$price} VND</td>
  <td>{$value}</td>
  <td>{$s} VND</td>
  <td>
  <a class='btn btn-warning' href='..\kresources\cart.php?remove={$row['product_id']}'><span class='glyphicon glyphicon-minus'></span></a>   
  <a class='btn btn-success' href='..\kresources\cart.php?add={$row['product_id']}'><span class='glyphicon glyphicon-plus'></span></a>
  <a class='btn btn-danger' href='..\kresources\cart.php?delete={$row['product_id']}' onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class='glyphicon glyphicon-remove'></span></a>
  </td>
  </tr>
  
<input type='hidden' name='item_name_{$item_name}' value='{$row['product_title']}'>
<input type='hidden' name='item_number_{$item_number}' value='{$row['product_id']}'>
<input type='hidden' name='amount_{$amount}' value='{$row['product_price']}'>
<input type='hidden' name='quantity_{$quantity}' value='{$value}'>
 
DELIMETER;

          echo $product;
          $item_name++;
          $item_number++;
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

  echo "<script>
  document.addEventListener('DOMContentLoaded', function() {
    var selectAllCheckbox = document.getElementById('select-all');
    var checkboxes = document.getElementsByName('product_select[]');
  
    selectAllCheckbox.checked = true;
  
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = true;
    }
  
    selectAllCheckbox.addEventListener('change', function() {
      for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = this.checked;
      }
    });
  
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].addEventListener('change', function() {
        var isAllChecked = true;
        for (var j = 0; j < checkboxes.length; j++) {
          if (!checkboxes[j].checked) {
            isAllChecked = false;
            break;
          }
        }
        selectAllCheckbox.checked = isAllChecked;
      });
    }
  });
  
</script>";
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
        $price=number_format($row['product_price']);
        $product_photo = display_images($row['product_image']);
        $sub = $row['product_price'] * $_SESSION["product_" . $selected_product];
        $s=number_format($sub);
        $item_quantity += $_SESSION["product_" . $selected_product];
        echo "<tr>";
        echo "<td>{$row['product_title']}<br>
        <img width='100' src = '../kresources/{$product_photo}'>
      </td>";
        echo "<td>{$price} VND</td>";
        echo "<td>{$_SESSION["product_" . $selected_product]}</td>";
        echo "<td>{$s} VND</td>";
        echo "</tr>";
        $total += $sub;
      }
    }
    $t=number_format($total);
    echo "<tr><td>Tổng số lượng: {$item_quantity}</td><td>Tổng tiền: {$t} VND</td></tr>";
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
