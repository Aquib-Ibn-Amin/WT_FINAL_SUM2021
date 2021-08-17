<html>
    <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <h2 align="center">Contact Customer</h2>

        <?php
    include('model/extends_db_config.php');
    include ('controllers/logincontrollers.php');
    $email = $_SESSION['useremail'];

    $connect = new PDO("mysql:host=localhost;dbname=e_techbd", "root", "");

    $query = "SELECT * FROM pickedorder WHERE deliveryman='$email' ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();



    
    $output = '
    <table class="table table-striped table-bordered">
        
        <tr>
            <th>ID</th>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Phone</th>
            <th>Address</th>

        </tr>
    ';
    if($total_row > 0)
    {
        foreach($result as $row)
        {
            $orid = $row["order_id"];
            $query1="SELECT * FROM orders WHERE order_id='$orid' ";
            $cart = RetriveCart5($query1);
            $query2="SELECT * FROM cart WHERE cart_id ='$cart' ";
            $cid = RetriveCart6($query2);
            $query3="SELECT * FROM customer WHERE id ='$cid' ";
            $phone = RetriveData1($query3);
            $firstname = RetriveCart7($query3);
            $lastname = RetriveCart8($query3);
            $name =$firstname." ".$lastname;
            $output .= '
            <tr>
                <td width="40%">'.$row["id"].'</td>
                <td width="40%">'.$row["order_id"].'</td>
                <td width="40%">'.$name.'</td>
                <td width="40%">'.$phone.'</td>
                <td width="40%">'.$row["address"].'</td>
            </tr>
            ';
        }
    }
    else
    {
        $output .= '
        <tr>
            <td colspan="4" align="center">Data not found</td>
        </tr>
        ';
    }
    $output .= '</table>';
    echo $output;
    ?>
    </div>

    

    </body>

</html>