<!-- we are inserting the values into our database wich is web and the table in which we are inserting the values is users which is containing 5 columns in it. so we are simply taking the data which we have inputted in the form and then we are simply inserting into the database -->
<?php include("database.php");
if(isset($_POST['submit'])){//isset tells ki submit button me jab click ho then put the values into database
    
    $username=$_POST['username'];//form vale username ki value daal re hai
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];

    $sql="INSERT INTO users(username,email,gender,city) VALUES ('$username','$email','$gender','$city')";
    if(!(mysqli_query($conn,$sql))){//mysqli_query says then run the query which is given to $sql variable
        echo "Error: " . $sql ."</br>" . mysqli_error($conn);
    }

}
?>