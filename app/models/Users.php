<?php
namespace app\models;

use Flight;

class Users
{
    private $id;
    private $fullname;
    private $email;
    private $Userrole;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFullname()
    {
        return $this->fullname;
    }
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getUserrole()
    {
        return $this->Userrole;
    }
    public function setUserrole($Userrole)
    {       
        $this->Userrole = $Userrole;
    }

    public static function findByEmail($db, $email)
    {
        $stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        $data = $stmt->fetch();

        if ($data) {
            $user = new self();
            $user->setId($data['id']);
            $user->setFullname($data['fullname']);
            $user->setEmail($data['email']);
            $user->setUserrole($data['Userrole']);
            return $user;
        }
        return null;
    }

    public function verifyPassword($password)
    {
        $db = Flight::db();
        $stmt = $db->prepare('SELECT password FROM users WHERE id = :id');
        $stmt->execute(['id' => $this->getId()]);
        $data = $stmt->fetch();

        if ($data) {
            return password_verify($password, $data['password']);
        }
        return false;
    }

    public static function create($db, $email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
        $stmt->execute(['email' => $email, 'password' => $hashedPassword]);
        return self::findByEmail($db, $email);
    }
}