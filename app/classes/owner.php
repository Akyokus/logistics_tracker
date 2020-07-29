<?php


class owner
{
    public static function add_driver($data){
        global $db;
        $query = $db->prepare('INSERT INTO users SET user_type = :u_type,
        name_surname = :n_surname, phone = :phone, email = :email,password = :pass,
        plaka = :plaka');
        $row = $query->execute([
            'u_type' => $data['user_type'],
            'n_surname' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'pass' => $data['password'],
            'plaka' => $data['plaka']
        ]);
            $last_id = $db->lastInsertId();
        if ($row){
            $image = $_FILES;

            $image_name = explode('.' . $image['file']['name']);
            $hashing_image_name = 'image' . rand(0,99999999) . time() . rand(0,999999999);
            if ($image_name[1] === 'JPG'){
                $hashing_image_name = $hashing_image_name . '.JPG';
            }else{
                $hashing_image_name = $hashing_image_name . '.PNG';
            }
            $query_1 = $db->prepare('INSERT INTO profile_photos SET driver_id = :d_id, photo_name = :p_name');
            $row_1 = $query_1 -> execute([
                'd_id' => $last_id,
                'p_name' => $hashing_image_name
            ]);
            $hashing = $hashing_image_name;
            if ($row_1){
                self::upload_file($image,$hashing);
                return 1;
            }


        }else{
            return 0;
        }
    }
    public static function add_owner($data){
        global $db;

        $query = $db->prepare('INSERT INTO users SET user_type = :u_type,
        name_surname = :n_surname, phone = :phone, email = :email,password = :pass,acenta_name = :a_name');
        $row = $query->execute([
            'u_type' => $data['user_type'],
            'n_surname' => $data['nameAcenta'],
            'phone' => $data['phoneAcenta'],
            'email' => $data['emailAcenta'],
            'pass' => $data['passwordAcenta'],
            'a_name' => $data['acenta_adi']
        ]);
        if ($row){
            return 1;
        }else{
            return 0;
        }
    }
    public static function upload_file($dosya,$dosya_adi){
        if (is_uploaded_file($dosya['file']['tmp_name'])){
            $default_file = [
                'image/jpeg',
                'image/png'
            ];
            $dosya_uzantisi = $dosya['file']['type'];
            if (in_array($dosya_uzantisi,$default_file)){
                move_uploaded_file($dosya['file']['tmp_name'],'public/profile_photos/' . $dosya_adi);
            }
        }
    }
    public static function get_drivers(){
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE user_type = 2');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
