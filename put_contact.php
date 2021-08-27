<?php
        header('Access-Control-Allow-Origin: *');
        if(isset($_POST)){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $c_num = $_POST['cnum'];
        $sub = $_POST['sub'];

        $conn = new mysqli('localhost','root','','simplitraining');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
        $query = "insert into contacts (fname,lname,cnum,sub) values(\"".$fname."\",\"".$lname."\",\"".$c_num."\",\"".$sub."\")";   
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        echo $result;
        }
        
        // $emparray = array();
        //     while($row =mysqli_fetch_assoc($result))
        //     {
        //         $emparray[] = $row; 
        //     }
        //     echo json_encode($emparray);   
        // }
        // }
        // else{
        //     echo "I sense a disturbance in the force!";
        // 
        }
               
?>