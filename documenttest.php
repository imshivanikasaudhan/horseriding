<?php
    include 'dbConnection.php';
//  $image  =   $_POST['horse_image'];
 $name  =   $_POST['name']; 
 $weight  =   $_POST['weight']; 
 $speed  =   $_POST['speed']; 
 


    $target_dir = "upload/"; // this used to upload the file
    $file_name  =   $_FILES['horse_image']['name']; //Is Used to Store the file.
    // $file_namee  =   $_FILES['pancard_image']['name']; //Is Used to Store the file.

    $file_target =  $target_dir.$file_name;
    // $file_targett =  $target_dir.$file_namee;

    if (move_uploaded_file($_FILES["horse_image"]["tmp_name"], $file_target)) {

        $insert_query = "INSERT INTO `horsedetails` ( `horse_image`,`horse_name`,`weight`,`speed` ) VALUES ( '$file_name','$name','$weight','$speed')";

        // echo $insert_query;
        $execution_query = mysqli_query ($con, $insert_query);
        if($execution_query){
            
        }
        header('location:test.php');

    
        //     $insert_query = "INSERT INTO `adhar` (`sno`, `adhar`, `pancard`) VALUES (NULL, '$adhar', '$lname', '$pancard')";
        
        //     mysqli_query ($conn, $insert_query);
        
        //     header("location: account.php"); // this funtion hit back to form page after the form submit.
        // }
        
        // else {
        //         echo "Email already register";
        //     }
        }


        

    // $insert_query = "INSERT INTO `adhar` (`adhar`) VALUES ('$adhar')";
    // // echo $insert_query;
    // $execution_query = mysqli_query ($con, $insert_query);

    // if($execution_query){
    //     echo 'insert successfully';
    // }

// $query = Select * from admission
// $query  = mysqli_query ($conn, "Select * from adhar where email = '".$email."'"); // This query is used for execution
// $num    = mysqli_num_rows($query); // this query is used to count the number of entry.

// print_r ($num);

// if($num<1){

//     if (move_uploaded_file($_FILES["image"]["tmp_name"], $file_target)) {

    
//     $insert_query = "INSERT INTO `adhar` (`sno`, `adhar`, `pancard`) VALUES (NULL, '$adhar', '$lname', '$pancard')";

//     mysqli_query ($conn, $insert_query);

//     header("location: account.php"); // this funtion hit back to form page after the form submit.
// }

// else {
//         echo "Email already register";
//     }
// }

// print_r($insert_query); This is used to check the query is executing or not.


// if($result){
//     echo "Data has been inserted into Database";
// }else {
//     echo "Data has been not inserted";
// }


?>