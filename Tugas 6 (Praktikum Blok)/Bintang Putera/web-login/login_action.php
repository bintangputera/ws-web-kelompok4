<?php
    $login =  [
        [
            'username' => "bintangpoetra",
            'password' => "123",
            'level' => "1"
        ],
        [
            'username' => "polije",
            'password' => "321",
            'level' => "2"
        ]
    ];

    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'User Biasa';
                header("Location: dashboard.php");
                die();
        }else {
            echo "username atau password anda salah";
            session_start();
            $msg = "Username atau password anda salah";
            $_SESSION['msg'] = $msg;
            header("location: login.php");
        }    
    }
    
?>