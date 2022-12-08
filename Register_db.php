<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surename = mysqli_real_escape_string($conn, $_POST['surename']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    

        if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO user (username,password,name,surename,email,birthday,tel) 
            VALUES ('$username','$password','$name','$surename','$email','$birthday','$tel')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            //$_SESSION['success'] = "You are now logged in";
            header('location: Login.php');
        } else {
            header("location: register.php");
        }
    }

?>
