<?php require_once 'admin_header.php';
require_once 'controllers/DashboardController.php';
$products = getAllProducts();
$employees = getAllEmployees();
$deliveryman = getAllDeliveryman();
$admin = getAllAdmin();
$customer = getAllCustomer();
// $order = getAllOrder();




?>
<br><br>
      <div class="numbar">
        <table align="center" >
          <tr>
            <td>
              <div class="card_1">
                <div class="">
                  Admin
                </div>
                <div class="">
                  <?php echo $admin; ?>
                </div>
              </div>
            </td>
            <td>
              <div class="card_2">
                <div class="">
                  Employee
                </div>
                <div class="">
                  <?php echo $employees; ?>
                </div>
              </div>
            </td>
            <td>
              <div class="card_3">
                <div class="">
                  Delivery Man
                </div>
                <div class="">
                  <?php echo $deliveryman; ?>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="card_4">
                <div class="">
                  Customer
                </div>
                <div class="">
                  <?php echo $customer; ?>
                </div>
              </div>
            </td>
            <td>
              <div class="card_5">
                <div class="">
                  Product
                </div>
                <div class="">
                  <?php echo $products; ?>
                </div>
              </div>
            </td>
            <td>
              <div class="card_6">
                <div class="">
                  Order
                </div>
                <div class="">0
                  <!-- <?php echo $order; ?> -->
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
<?php require_once 'admin_footer.php';?>
