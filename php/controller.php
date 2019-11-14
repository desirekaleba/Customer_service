<?php

    include("generic_service.php");

    $generic_service = new Generic_service();

    if(isset($_GET['req'])){

        switch($_GET['req']){
            case 'showUsers' :

                $result = $generic_service -> getAllRecords("customers");

                return (json_encode(print_r($result)));
                break;
            
            case 'addCustomer' :
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                $columns = array("firstname, lastname, email, telephone, address");

                $values = array($firstname, $lastname, $email, $phone, $address);
                $generic_service -> insert("customers", $columns, $values);

                header("location: welcome.php");
                break;

            case 'addProduct' :
            
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $customer_id = $_GET['customer_id'];
           

                $columns = array("customer_id, product_name, amount");

                $values = array($customer_id, $product_name, $price);
                $generic_service -> insert("products", $columns, $values);

                header("location: welcome.php");
                break;

            case 'delete' :
            
                $delete_id = $_GET['delete_id'];
                $generic_service ->deleteByColumn("products","customer_id",$delete_id);
                $generic_service ->deleteByColumn("customers","id",$delete_id);

                header("location: welcome.php");
                break;
            

            case 'delete_product' :
            
                $delete_id = $_GET['delete_id'];
                $generic_service ->deleteByColumn("products","id",$delete_id);

                header("location: welcome.php#products");
                break;
            
            case 'editCustomer' :

                if(isset($_POST['update_customer_btn'])){

                    include("db_connect.php");

                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $phone = $_POST['telephone'];
                    $address = $_POST['address'];

                    $id_value = $_GET['customer_id'];

                    $update_sql = "update customers set firstname = '$firstname', lastname = '$lastname', email = '$email', telephone = '$phone', address = '$address' where id='$id_value'";
                    $columns = array("firstname, lastname, email, telephone, address");

                    $values = array($firstname, $lastname, $email, $phone, $address);
                    
                    // $generic_service = new Generic_service();
                    // $generic_service -> updateManyColumns("customers", $columns, $values, "id", $id_value);
                    try{
            

                        $stmt = $connect -> prepare($update_sql);
                        $stmt->execute();
                        echo "
                            <script>
                                console.log('Record(s) updated successfully!!');
                            </script>
                        ";
        
                    }catch(PDOEXception $e){
        
                        $message = $e -> getMessage();
                        echo "
                            <script>
                                console.log('Unable to update the record(s) due to $message');
                            </script>
                        ";
                    }
        
                    $connect = null;

                    header("location: welcome.php");
                }
                break;


                case 'editProduct' :

                if(isset($_POST['update_product_btn'])){

                    include("db_connect.php");

                    $name = $_POST['name'];
                    $amount = $_POST['price'];

                    $id_value = $_GET['product_id'];

                    $update_sql = "update products set product_name = '$name', amount = '$amount' where id='$id_value'";
                    
                    // $columns = array("firstname, lastname, email, telephone, address");

                    // $values = array($firstname, $lastname, $email, $phone, $address);
                    
                    // $generic_service = new Generic_service();
                    // $generic_service -> updateManyColumns("customers", $columns, $values, "id", $id_value);
                    try{
            

                        $stmt = $connect -> prepare($update_sql);
                        $stmt->execute();
                        echo "
                            <script>
                                console.log('Record(s) updated successfully!!');
                            </script>
                        ";
        
                    }catch(PDOEXception $e){
        
                        $message = $e -> getMessage();
                        echo "
                            <script>
                                console.log('Unable to update the record(s) due to $message');
                            </script>
                        ";
                    }
        
                    $connect = null;

                    header("location: welcome.php");
                }
                break;




            case "login" : 
                include("db_connect.php");
                $username = $_POST['username'];
                $password = $_POST['password'];
                

                try{
                    $encryp_pass = md5($password);
                    $stmt = $connect -> prepare("select * FROM users WHERE username='$username' AND password='$encryp_pass'");
                    $stmt -> execute();
                    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
                    
                    if(count($stmt -> fetchAll()) > 0){
                        echo "<script>alert('login success');</script>";
                        header("location: welcome.php");
                    }else{
                        echo "<script>alert('Unable to log you in, wrong credentials');</script>";
                        header("location: ../index.php");
                    }
                }catch(PDOException $e){
                    echo $e -> getMessage();
                }
                
            break;

                
                
        }
        
    }

?>