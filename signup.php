<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $Postal = $_POST['PostalCode'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $Repeat_pass = $_POST['Repeat_Password'];
    $error = array();
    $passHass = password_hash($password, PASSWORD_DEFAULT);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, "Email is Not valid");
    }
    if (strlen($password) < 6) {
        array_push($error, "Password length must be of 6 characrer");
    }
    if ($password !== $Repeat_pass) {
        array_push($error, "Please enter same passwor in both field");
    }
    if (count($error) > 0) {
        echo '<div class="error-message">';
        foreach ($error as $error) {
            echo '<p>' . $error . '</p>';
        }
        echo '</div>';
    } else {
        $sql = "INSERT INTO Users (FirstName,LastName,Address,City,State,PostalCode,Contact,Username,Password) VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "sssssiiss", $fname, $lname, $address, $city, $state, $Postal, $number, $email, $passHass);
            mysqli_stmt_execute($stmt);

            echo " <div> 
                                <p> User regestration sucessfull</P>
                        </div> ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/sign_up.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main_body">
        <div class="usr_tetx">
            <h1>User regestration Form</h1>
        </div>
        <div class="fillup">
            <h3>Please fill up all the required Inormation</h3>
        </div>
        <form action="" method="post">
            <label for="name">Full Name</label>
            <div class="name">
                <input type="text" placeholder="First Name" class="uname" required name="fname">
                <input type="text" placeholder="Last Name" class="uname" required name="lname">
            </div>
            <label for="address">Address</label>
            <div class="address">
                <input type="text" class="add" required name="address">
                <div class="sub_address select_style">
                    <input type="text" class="sub_add" placeholder="City" required name="city">
                    <input type=" text" class="sub_add" placeholder="State" required name="state">
                    <input type="number" class="sub_add" placeholder="Postal code" required name="PostalCode">
                    <select name="" class="selectbox" required>
                        <option value="Select">Select An option</option>
                        <option value="Nepal">Nepal</option>
                        <option value="India">India</option>
                        <option value="China">China</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value=Maldives">Maldives</option>
                    </select>
                </div>
            </div>
            <label for="phone">Phone Number</label>
            <div class="phone"><input type="number" placeholder="Number" class="phn" required name="number"></div>
            <label for="Email">Email</label>
            <div class="email"><input type="email" placeholder="example@gmail.com" class="usreml" required name="email"></div>
            <label for="password">Password</label>
            <div class="password">
                <input type="password" class="psw" placeholder="Password" required name="Password">
                <input type="password" class="psw" placeholder="Repeat Password" required name="Repeat_Password">
            </div>
            <div class="endbox">
                <button type="submit" class="sbt" name="submit">Submit</button>
                <p> <a href="signin_signup.php">Login</a></p>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/919ada74b7.js" crossorigin="anonymous"></script>
</body>
</html>