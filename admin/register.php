<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pos';
$_SESSION['message'] = '';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM user where id desc";
$result = mysqli_query($mysqli, $query);


//the form has basename(path)een submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {
        
        //set all the post variables
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['username'];   
        $password = md5($_POST['password']);
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];   
        $address = $_POST['address'];
        $status = "1";
    
                //insert user data into database
                $sql = "INSERT INTO `user`(`username`, `password`, `lastname`, `firstname`, `gender`, `address`, `mobile`,`status`,`lastLogin`) VALUES ('$username','$password','$lastname','$firstname','$gender','$address','$mobile','$status', now())";
                
                //if the query is successsful, redirect to welcome.php page, done!
                if ($mysqli->query($sql) === true){

                    $_SESSION['message'] = "Registration succesful! Added $lastname to the database!";
                    header("location: index_a.php");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();          
        }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}
?>
