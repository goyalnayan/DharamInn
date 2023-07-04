         <!--====== Start PHP for Contact ======-->
         <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $message = $_POST['message'];

      // Connection to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";


    // Create a connection object
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
    //Submit these to a database 
    // Sql query to be executed
    $sql = "INSERT INTO `contactnew` (`name`, `phone`, `email`, `website`, `message`, `dt`) VALUES ('$name', '$phone_number', '$email', '$website', '$message', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';        
    }
    else{
        // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issues and your entry was not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';  
    }
    }
    }
?>