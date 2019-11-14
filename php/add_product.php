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
<div id="add_product" class="container">
    <div class="">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Attach product</h3>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller.php?req=addProduct&customer_id=<?php echo $_GET['customer_id']?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Product name</label>
                        <input id="product_name" type="text" name="product_name" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input id="price" type="number" name="price" class="form-control" required />
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="add_product_btn" type="submit" class="btn btn-primary">Add</button>
                    <a href="../index.php"  class="btn btn-danger">Close</a>
                </div>
            </form>
        </div>
    </div>
 </div>
</body>

</html>