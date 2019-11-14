
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="author" content="Desire Kaleba"/>
        <meta name="description" content="Simple CRUD application using PDO"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="keywords" content="html, css, javascript, php, bootstrap, mysql, pdo"/>

        <script src="../front/jquery-3.3.1/jquery-3.3.1.js"></script>
        <script src="../front/js/bootstrap.bundle.min.js"></script>
        <script src="../ajax/users.js"></script>

        <link rel="stylesheet" href="../front/css/bootstrap.min.css"/>
        
    </head>

    <body>
        <div class="container p-5 bg-light">
            <h2 class="text-center m-3">CUSTOMERS & PRODUCTS</h2>
            <hr>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#customers">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#products">Products</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                </li> -->
            </ul>

        <!-- Tab panes -->
            <div class="tab-content pt-2">
                <div class="tab-pane active" id="customers">
                <!-- <h3>Customers</h3> -->
                    
                    <div class="container row mb-1">
                        <div class="col-md-4">
                            <button type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#add_customer">
                            Add new
                            </button>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" placeholder="Search..."/>
                        </div>
                    </div>
                    
                
                <table id="table_users" class="table table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="users_body">
                       <?php
                       include("../php/db_connect.php");

                            $query = "SELECT * FROM customers";
                            try{

                                $c_id = 0;
                                $stmt = $connect -> prepare($query);
                                $stmt -> execute();
                                $stmt -> setFetchMode(PDO::FETCH_ASSOC);

                                $records = $stmt -> fetchAll();

                                if(count($records) > 0){
                                    foreach($records as $key => $value){
                                        $c_id = $value['id'];
                                   
                                    ?>
                                    <tr>
                                        <td><?php echo $value["id"];?></td>
                                        <td><?php echo $value["firstname"];?></td>
                                        <td><?php echo $value["lastname"];?></td>
                                        <td><?php echo $value["email"];?></td>
                                        <td><?php echo $value["telephone"];?></td>
                                        <td><?php echo $value["address"];?></td>
                                        <td><a id="<?php echo $value["id"]?>" class="btn btn-success btn-sm" href="add_product.php?customer_id=<?php echo $value["id"]?>">Add product</a></td>

                                        <td><a class="btn btn-warning btn-sm" href="edit_customer.php?edit_id=<?php echo $value["id"]?>">Edit</a></td>
                                        <td><a class="btn btn-danger btn-sm" href="controller.php?req=delete&delete_id=<?php echo $value["id"]?>">Delete</a></td>
                                    </tr>
                                    
                                    <?php
                                     }
                                    
                                }else{
                                    ?>
                                    <tr>
                                        <td>No records found</td>
                                    </tr>
                                    <?php
                                }

                            }catch(PDOException $e){
                                $message = $e -> getMessage();
                                echo "
                                    <script>console.log('Cannot connect to the database $message');</script>
                                    ";
                            }
                            

                       ?>
                    </tbody>
                </table>
                 <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                </div>
                <div class="tab-pane fade" id="products">
                    <div class="col-md-6 mb-1">
                        <input class="form-control" type="text" placeholder="Search..."/>
                    </div>
                <table id="table_users" class="table table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Prod. name</th>
                            <th>Amount</th>
                            <th colspan="2">Owner</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="products_body">
                       <?php
                       //include("../php/db_connect.php");

                            $queryp = "select c.id,c.firstname,c.lastname ,p.id as p_id,p.customer_id,p.product_name,p.amount from customers as c JOIN products as p ON c.id = p.customer_id";
                            try{

                                $c_id = 0;
                                $stmtp = $connect -> prepare($queryp);
                                $stmtp -> execute();
                                $stmtp -> setFetchMode(PDO::FETCH_ASSOC);

                                $recordsp = $stmtp -> fetchAll();
                                // print_r(($recordsp));

                                if(count($recordsp) > 0){
                                    foreach($recordsp as $keyp => $valuep){
                                   
                                    ?>
                                    <tr>
                                        <td><?php echo $valuep["p_id"];?></td>
                                        <td><?php echo $valuep["product_name"];?></td>
                                        <td><?php echo $valuep["amount"];?></td>
                                        <td><?php echo $valuep["firstname"];?></td>
                                        <td><?php echo $valuep["lastname"];?></td>
                                        <td><a class="btn btn-warning btn-sm" href="edit_product.php?edit_id=<?php echo $valuep["p_id"]?>">Edit</a></td>
                                        <td><a class="btn btn-danger btn-sm" href="controller.php?req=delete_product&delete_id=<?php echo $valuep["p_id"]?>">Delete</a></td>

                                        
                                    </tr>
                                    <?php
                                     }
                                }else{
                                    ?>
                                    <tr>
                                        <td>
                                            No products found!!!!!!
                                        </td>
                                    </tr>
                                    <?php
                                }

                            }catch(PDOException $e){
                                $message = $e -> getMessage();
                                echo "
                                    <script>console.log('Cannot connect to the database $message');</script>
                                    ";
                            }
                            

                       ?>
                    </tbody>
                </table>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                </div>
                <!-- <div class="tab-pane container fade" id="menu2"></div> -->
            </div>
        </div>



        <!-- Modals -->

        <!-- add customer -->
         <!-- add customer -->

      <div class="modal fade" id="add_customer">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Customer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="controller.php?req=addCustomer" method="POST">
                <div class="modal-body">
                  <div class="form-group">
                    <label>Firstname</label>
                    <input class="form-control "type="text" id="firstname" name="firstname" placeholder="firstname"/>
                  </div>
                  <div class="form-group">
                    <label>Lastname</label>
                    <input class="form-control "type="text" id="firstname" name="lastname" placeholder="lastname"/>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control "type="email" id="email" name="email" placeholder="email"/>
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control "type="text" id="phone" name="phone" placeholder="telephone"/>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input class="form-control "type="text" id="address" name="address" placeholder="address"/>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
              
          </div>
        </div>  
      </div>
      <!-- add customer modal -->
        <!-- add customer -->
    </body>
</html>