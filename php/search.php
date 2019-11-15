<?php
include("db_connect.php");
if (isset($_REQUEST['findAll'])) {

    $query = "SELECT * FROM customers";
    try {

        $c_id = 0;
        $stmt = $connect->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $records = $stmt->fetchAll();

        if (count($records) > 0) {
            foreach ($records as $key => $value) {
                $c_id = $value['id'];

                ?>
                <tr>
                    <td><?php echo $value["id"]; ?></td>
                    <td><?php echo $value["firstname"]; ?></td>
                    <td><?php echo $value["lastname"]; ?></td>
                    <td><?php echo $value["email"]; ?></td>
                    <td><?php echo $value["telephone"]; ?></td>
                    <td><?php echo $value["address"]; ?></td>
                    <td><a id="<?php echo $value["id"] ?>" class="btn btn-success btn-sm" href="add_product.php?customer_id=<?php echo $value["id"] ?>">Add product</a></td>

                    <td><a class="btn btn-warning btn-sm" href="edit_customer.php?edit_id=<?php echo $value["id"] ?>">Edit</a></td>
                    <td><a class="btn btn-danger btn-sm" href="controller.php?req=delete&delete_id=<?php echo $value["id"] ?>">Delete</a></td>
                </tr>

            <?php
                        }
                    } else {
                        ?>
            <tr>
                <td>No records found</td>
            </tr>
            <?php
                    }
                } catch (PDOException $e) {
                    $message = $e->getMessage();
                    echo "
                    <script>console.log('Cannot connect to the database $message');</script>
                ";
                }
            } else {
                if (isset($_REQUEST['q'])) {
                    $q = $_REQUEST['q'];


                    $query = "SELECT * FROM customers WHERE id LIKE '%$q%' OR firstname LIKE '%$q%' OR lastname LIKE '%$q%' OR email LIKE '%$q%' OR telephone LIKE '%$q%' OR address LIKE '%$q%'";
                    try {

                        $c_id = 0;
                        $stmt = $connect->prepare($query);
                        $stmt->execute();
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);

                        $records = $stmt->fetchAll();

                        if (count($records) > 0) {
                            foreach ($records as $key => $value) {
                                $c_id = $value['id'];

                                ?>
                    <tr>
                        <td><?php echo $value["id"]; ?></td>
                        <td><?php echo $value["firstname"]; ?></td>
                        <td><?php echo $value["lastname"]; ?></td>
                        <td><?php echo $value["email"]; ?></td>
                        <td><?php echo $value["telephone"]; ?></td>
                        <td><?php echo $value["address"]; ?></td>
                        <td><a id="<?php echo $value["id"] ?>" class="btn btn-success btn-sm" href="add_product.php?customer_id=<?php echo $value["id"] ?>">Add product</a></td>

                        <td><a class="btn btn-warning btn-sm" href="edit_customer.php?edit_id=<?php echo $value["id"] ?>">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" href="controller.php?req=delete&delete_id=<?php echo $value["id"] ?>">Delete</a></td>
                    </tr>

                <?php
                                }
                            } else {
                                ?>
                <tr>
                    <td>No records found</td>
                </tr>
            <?php
                        }
                    } catch (PDOException $e) {
                        $message = $e->getMessage();
                        echo "
                    <script>console.log('Cannot connect to the database $message');</script>
                ";
                    }
                }
            }









            if (isset($_REQUEST['findAllP'])) {

                $queryp = "select c.id,c.firstname,c.lastname ,p.id as p_id,p.customer_id,p.product_name,p.amount from customers as c JOIN products as p ON c.id = p.customer_id";
                try {

                    $c_id = 0;
                    $stmtp = $connect->prepare($queryp);
                    $stmtp->execute();
                    $stmtp->setFetchMode(PDO::FETCH_ASSOC);

                    $recordsp = $stmtp->fetchAll();
                    // print_r(($recordsp));

                    if (count($recordsp) > 0) {
                        foreach ($recordsp as $keyp => $valuep) {

                            ?>
                <tr>
                    <td><?php echo $valuep["p_id"]; ?></td>
                    <td><?php echo $valuep["product_name"]; ?></td>
                    <td><?php echo $valuep["amount"]; ?></td>
                    <td><?php echo $valuep["firstname"]; ?></td>
                    <td><?php echo $valuep["lastname"]; ?></td>
                    <td><a class="btn btn-warning btn-sm" href="edit_product.php?edit_id=<?php echo $valuep["p_id"] ?>">Edit</a></td>
                    <td><a class="btn btn-danger btn-sm" href="controller.php?req=delete_product&delete_id=<?php echo $valuep["p_id"] ?>">Delete</a></td>


                </tr>
            <?php
                        }
                    } else {
                        ?>
            <tr>
                <td>
                    No products found!!!!!!
                </td>
            </tr>
            <?php
                    }
                } catch (PDOException $e) {
                    $message = $e->getMessage();
                    echo "
                                    <script>console.log('Cannot connect to the database $message');</script>
                                    ";
                }
            } else {

                if (isset($_REQUEST['qP'])) {
                    $q = $_REQUEST['qP'];

                    $queryp = "SELECT c.id,c.firstname,c.lastname ,p.id as p_id,p.customer_id,p.product_name,p.amount FROM customers AS c JOIN products AS p ON c.id = p.customer_id WHERE p.id LIKE '%$q%' OR p.product_name LIKE '%$q%'";
                    try {

                        $c_id = 0;
                        $stmtp = $connect->prepare($queryp);
                        $stmtp->execute();
                        $stmtp->setFetchMode(PDO::FETCH_ASSOC);

                        $recordsp = $stmtp->fetchAll();
                        // print_r(($recordsp));

                        if (count($recordsp) > 0) {
                            foreach ($recordsp as $keyp => $valuep) {

                                ?>
                    <tr>
                        <td><?php echo $valuep["p_id"]; ?></td>
                        <td><?php echo $valuep["product_name"]; ?></td>
                        <td><?php echo $valuep["amount"]; ?></td>
                        <td><?php echo $valuep["firstname"]; ?></td>
                        <td><?php echo $valuep["lastname"]; ?></td>
                        <td><a class="btn btn-warning btn-sm" href="edit_product.php?edit_id=<?php echo $valuep["p_id"] ?>">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" href="controller.php?req=delete_product&delete_id=<?php echo $valuep["p_id"] ?>">Delete</a></td>


                    </tr>
                <?php
                                }
                            } else {
                                ?>
                <tr>
                    <td>
                        No products found!!!!!!
                    </td>
                </tr>
<?php
            }
        } catch (PDOException $e) {
            $message = $e->getMessage();
            echo "
                                    <script>console.log('Cannot connect to the database $message');</script>
                                    ";
        }
    }
}

?>