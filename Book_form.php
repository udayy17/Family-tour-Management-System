<?php

    $connection = mysqli_connect('localhost','root','','booking');

    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $adults=$_POST['adults'];
        $children=$_POST['children'];
        $checkin=$_POST['checkin'];
        $checkout=$_POST['checkout'];
        $request ="Insert into bookingform (name,email,phone,adults,children,checkin,checkout) values ('$name','$email','$phone','$adults','$children','$checkin','$checkout')";

    mysqli_query($connection,$request);

    }else{
        echo 'Your Book is confirm!';
    }
        
    ?>

    <html>
    <body>
        success!
    </body>
</html>