<?php
    include("generic_service.php");

    $generic_service = new Generic_service();

    $record = $generic_service -> getRecordByColumn("products","id",$_GET['edit_id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Desire Kaleba" />
    <meta name="description" content="Simple CRUD application using PDO" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="html, css, javascript, php, bootstrap, mysql, pdo" />

    <script src="../front/jquery-3.3.1/jquery-3.3.1.js"></script>
    <script src="../front/js/bootstrap.bundle.min.js"></script>
    <script src="../ajax/users.js"></script>

    <link rel="stylesheet" href="../front/css/bootstrap.min.css" />

</head>


<body>

<!-- Add product modal -->
<div id="edit_customer" class="container">
    <div class="">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">EDIT PRODUCT</h3>
               
            </div>
            
            <?php
            $decoded_record = json_decode($record);
            ?>
            <form action="./controller.php?req=editProduct&product_id=<?php echo $_GET['edit_id']?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input id="firstname" type="text" value="<?php echo $decoded_record[0]->product_name;?>" name="name" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input id="lastname" type="text" value="<?php echo $decoded_record[0]->amount;?>" name="price" class="form-control" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="update_product_btn" name="update_product_btn" type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="welcome.php"  class="btn btn-danger">Close</a>
                </div>
            </form>
        </div>
    </div>
 </div>
</body>

</html>