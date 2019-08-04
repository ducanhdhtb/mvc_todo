<?php
class User extends Model
{
    public function create($username, $password , $email, $address)
    {
        $sql = "INSERT INTO users (username, password, email , address, created_at, updated_at) VALUES (:username, :password, :email, :address, :created_at, :updated_at)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'address' => $address,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }


    public function showAllUsers()
    {
        $sql = "SELECT * FROM users";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }


}
?>