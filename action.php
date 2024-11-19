<?php

include "connection.php";



//-------------------------------------------Function Image Upload--------------------------------------------------

function Imageupload($dir, $inputname, $allext, $pass_width, $pass_height, $pass_size, $newname)
{
    if (file_exists($_FILES["$inputname"]["tmp_name"])) {
        $file_extension = strtolower(pathinfo($_FILES["$inputname"]["name"], PATHINFO_EXTENSION));
        $error = "";
        if (in_array($file_extension, $allext)) {
            list($width, $height, $type, $attr) = getimagesize($_FILES["$inputname"]["tmp_name"]);
            $image_weight = $_FILES["$inputname"]["size"];
            if ($width <= "$pass_width" && $height <= "$pass_height" && $image_weight <= "$pass_size") {
                $tmp = $_FILES["$inputname"]["tmp_name"];
                $extension[1] = "jpg";
                $name = $newname . "." . $extension[1];
                if (move_uploaded_file($tmp, "$dir" . $name)) {
                    return true;
                }
            } else {
                $error .= "Please upload photo size of $pass_width X $pass_height !!!";
            }
        } else {
            $error .= "Please upload an image !!!";
        }
    } else {
        $error = "Please Select an image !!!";
    }
    return $error;
}



if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password' and `role` = '1'";
    // echo $query;die;
    $run = mysqli_query($conn, $query);
    $num = mysqli_num_rows($run);
    if ($num) {
        $data = mysqli_fetch_assoc($run);
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['role'] = $data['1'];
        header('location: dashboard.php');
        exit();
        // die;	
    } else {
        $_SESSION['msg'] = 'Invalid details !!!';
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}



if (isset($_POST['form_savess'])) {


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address'];
    $municipal_problem = $_POST['municipal_problem'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    $photo = $_FILES['image']['name'];
    $photo = explode('.', $photo);
    $image = time() . $photo[0];
    $imagename = $_FILES['image']['tmp_name'];
    list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
    $dir = "uploads/";
    $allext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "GIF", "gif");
    $check = Imageupload($dir, 'image', $allext, '700000000', '10000000', '18000000', $image);
    if ($check === true) {
        $image = $image . ".jpg";
        $added_on = date('Y-m-d');

        $query = "INSERT INTO `message`(`first_name`, `last_name`, `phone_number`, `email_address`, `municipal_problem`, `address`, `description`, `image`, `added_on`) VALUES ('$first_name', '$last_name', '$phone_number', '$email_address', '$municipal_problem', '$address', '$description', '$image', '$added_on')";

        // echo $query;die;

        $sql = mysqli_query($conn, $query);
        if ($sql  == true) {
            header("Location: form.php");
            $_SESSION['msg'] = "Message Added Successfully !!!";
        } else {
            $_SESSION['msg'] = "Message  Not Added !!!";
            header("Location: form.php");
        }
    } else {
        $_SESSION['msg'] = $check;
        header("Location: form.php");
    }
}
