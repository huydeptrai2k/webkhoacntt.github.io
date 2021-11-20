
<?php
    session_start();
    $errors = array();

    $username = $_POST['username'];
	if (empty($username)) {
		$errors[] = 'You forgot to enter username.';
	}

    $password = $_POST['password'];
    if (empty($password)) {
    $errors[] = 'You forgot to enter your password.';
    }

    if (empty($errors)) {
        require("app/database/config.php");
        // B2: Khai bao truy van
        $sql = " SELECT * FROM users WHERE user_name = '$username' ";
        $result = mysqli_query($conn,$sql);
        if($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password']))
            {
                if($row['admin']) {
                $_SESSION['username'] = $username;
                header("Location:admin/tintuc/quanlypost.php");
                exit();
                } else {
                    echo "Ko ton tai Tai khoan " ;
                    header("Location:login.php");
                }
            } else {
                echo "Mat khau ko chinh xac";
                header("Location:login.php");
            }
        } else {
            echo "Ko ton tai Tai khoan " ;
            header("Location:login.php");
        }

    }else{
            echo "Hien thi loi";
    }
?>