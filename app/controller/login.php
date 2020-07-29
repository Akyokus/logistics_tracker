<?php

if (post('email')){
    $email = post('email');
    $password = post('password');

    $row = users::userExist($email);

    if ($row){
        if ($row['password'] === $password){
            $success = 'Başarıyla giriş yaptınız. Yönlendiriliyorsunuz...';
            users::login([
                'id' => $row['id'],
                'uname' => $row['name_surname'],
                'user_type' => $row['user_type']
            ]);
            header('Refresh:0;url = ' .site_url());
        }else{
            $error = 'Hatalı bir şifre girdiniz. Lütfen tekrar deneyiniz.';
        }
    }else{
        $error = 'Böyle bir üyelik bulunmamaktadır.';
    }
}

require view('login');
