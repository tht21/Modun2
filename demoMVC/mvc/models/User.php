<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUser()
    {
        $sql = "SELECT * FROM tbl_user";
        $result = $this->db->select($sql);
        return $result;
    }

    public function createUser($name, $mail, $add)
    {
        $sql = "INSERT INTO tbl_user (name,email,address)
                VALUES ('$name','$mail','$add')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserById($id)
    {
        $sql = "SELECT * FROM tbl_user WHERE id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function updateUser($id, $name, $mail, $add)
    {
        $sql = "UPDATE tbl_user SET name = '$name',
                                    email = '$mail',
                                    address = '$add'
                                WHERE id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM tbl_user WHERE id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
