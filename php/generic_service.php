<?php
    

    class Generic_service{

        
        public function insert( $table_name, $columns, $values){

            include("db_connect.php");

            $sql = "INSERT INTO $table_name(";

            foreach($columns as $key => $value){

                if($key < (count($columns) - 1)){
                    $sql .=  $value . ", ";
                }else{
                    $sql .= $value ;
                }
                
            }

            $sql .= ") VALUES (";

            foreach($values as $key => $value){
                if($key < (count($values) - 1)){

                    $sql .= "'" . $value. "'".", ";

                }else{

                    $sql .= "'" . $value . "'";
                }
            }

            $sql .= ")";

            try{
                
                $exec_sql = $connect->exec($sql);
                echo "
                    <script>
                        console.log('Records inserted successfully!!');
                    </script>
                ";

            }catch(PDOEXception $e){
                $message = $e -> getMessage();
                echo "
                    <script>
                        console.log('Unable to insert the records due to $message');
                    </script>
                ";
            }

            $connect = null;
        }



        public function getAllRecords($table_name){

            include("db_connect.php");

            $sql = "SELECT * FROM $table_name";

            try{
                $stmt = $connect -> prepare($sql);
                $stmt -> execute();
                $stmt -> setFetchMode(PDO::FETCH_ASSOC);

                return json_encode($stmt -> fetchAll());
                // foreach($stmt -> fetchAll() as $key => $value){


                //     foreach($value as $k => $v){

                //         echo "
                //         {
                //             $k: $v,
                //         }<br>
                        
                //         ";
                        
                        
                //     }
                    
                //     // echo $value['id']." ".$value['firstname']." ".$value['lastname']." ".$value['email']." ".$value['telephone']." ".$value['address'];
                    
                // }

            }catch(PDOEXception $e){

                $message = $e -> getMessage();
                echo "
                    <script>
                        console.log('Unable to get the records due to $message');
                    </script>
                ";
            }

            $connect = null;
        }




        public function getRecordByColumn($table_name, $column_name, $column_value){
            include("db_connect.php");

            $sql = "SELECT * FROM $table_name WHERE $column_name = $column_value";

            try{
                $stmt = $connect -> prepare($sql);
                $stmt -> execute();
                $stmt -> setFetchMode(PDO::FETCH_ASSOC);

                return json_encode($stmt -> fetchAll());

                // foreach($stmt -> fetchAll() as $key => $value){
                //     foreach($value as $k => $v){
                //         echo "
                //         {
                //             $k: $v,
                //         }<br>
                        
                //         ";
                //     }
                // }

            }catch(PDOException $e){
                $message = $e -> getMessage();
                echo "
                    <script>
                        console.log('Unable to get the records due to $message');
                    </script>
                ";
            }
            $connect = null;
        }

        public function updateOneColumn($table_name, $column_name, $column_value, $where_column, $where_value){
            include("db_connect.php");

            $sql = "UPDATE $table_name SET $column_name = '$column_value' WHERE $where_column = '$where_value'";

            try{
                $stmt = $connect -> prepare($sql);
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
        }

        public function updateManyColumns($table_name, $column_names, $columns_values, $where_column, $where_value){

            include("db_connect.php");

            $sql = "UPDATE $table_name SET ";

            // foreach($column_names as $key => $value){

            //     if($key < (count($column_names) - 1)){
            //         $sql .=  $value ." = " ."'".$columns_values[$key] ."'". ", ";
            //     }else{
            //         $sql .=  $value ." = " ."'".$columns_values[$key]."'" ;
            //     }
                
            // }
            for($i = 0; $i < count($column_names); $i++){
                if($i < (count($column_names) - 1)){
                    $sql .=  $column_names[$i];
                    $sql .="=";
                    $sql .= $columns_values[$i];
                    $sql .= ",";
                    
                }else{
                    $sql .=  $column_names[$i];
                    $sql .="=";
                    $sql .= $columns_values[$i];
                }
            }

            $sql .= " WHERE $where_column = '$where_value'";

            try{
                $stmt = $connect -> prepare($sql);
                $stmt->execute();
                echo "
                    <script>
                        console.log('Record(s) updated successfully!! $sql');
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
        }

        public function deleteByColumn($table_name, $where_column, $where_value){
            include("db_connect.php");

            $sql = "DELETE FROM $table_name WHERE $where_column = '$where_value'";

            try{
                $connect -> exec($sql);

                echo "
                    <script>
                        console.log('Record(s) deleted successfully!!');
                    </script>
                ";

            }catch(PDOException $e){

                $message = $e -> getMessage();
                echo "
                    <script>
                        console.log('Unable to delete the record(s) due to $message');
                    </script>
                ";
               
            }
           $connect = null;
        }
    }


?>