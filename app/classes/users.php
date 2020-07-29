<?php


class users
{
    public static function login($data){
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['user_name'] = $data['uname'];
        $_SESSION['user_type'] = $data['user_type'];
    }
    public static function get_users($user_type){
        global $db;
        $query = $db ->prepare('SELECT * FROM users WHERE user_type = :u_type');
        $query->execute([
            'u_type' => $user_type
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function delete_user($user_id){
        global $db;
        $query = $db->prepare('DELETE FROM users WHERE id = :id');
        $row = $query->execute([
            'id' => $user_id
        ]);
        if ($row){
            return 1;
        }else{
            return 0;
        }
    }
    public static function userExist($email){
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE  email = :email');
        $query->execute([
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
