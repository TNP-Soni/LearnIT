        <?php
        header('Access-Control-Allow-Origin: *');
        if(isset($_POST)){
        
        
        $conn = new mysqli('localhost','root','','simplitraining');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            $query = "SELECT * FROM blogs";
        $result = mysqli_query($conn, $query) or die(mysqli_error($con));
        
        $emparray = array();
            while($row =mysqli_fetch_assoc($result))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);   
        }
        }
        else{
            echo "I sense a disturbance in the force!";
        }
           
        ?>

