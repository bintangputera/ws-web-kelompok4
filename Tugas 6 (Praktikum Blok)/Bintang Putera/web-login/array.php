<?php
    $akun = [
        [
            'username' => 'poetrabintang',
            'password' => '123'
        ],
        [
            'username' => 'bintang',
            'password' => '123'
        ]
    ];

    for ($a=0; $a < count($akun); $a++) { 
        if($_POST['user'] == $akun[$a]['username']){
            if($_POST['pass'] == $akun[$a]['password']){
                echo "<br>Username : " .$_POST['user'] . "<br>";
                echo "Password : ".$_POST['pass'] ."<br>";
                echo "Berhasil login";
            break;
            } else {
                echo "Password : " .$_POST['pass'];
                echo "Password salah";
            }
        } else {
            echo "Username anda salah";
        }
    }
?>