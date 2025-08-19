<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query("SELECT * FROM tbl_user");
        return $this->db->resultSet();
    }

    public function getUserRows()
    {
        $this->db->query("SELECT * FROM tbl_user");
        return $this->db->rowCount();
    }

    public function addUser($data)
    {
        $this->db->query('INSERT INTO tbl_user (name, email, password) VALUES(:name, :email, :password)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        $this->db->execute() ? true : false;
    }

    public function editUser($data)
    {
        $this->db->query('UPDATE tbl_user SET 
                         name = :name,
                         email = :email, 
                         password = :password) WHERE id = :id');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':id', $data['id']);

        $this->db->execute() ? true : false;
    }


    public function findUserByEmail($data)
    {
        $this->db->query('SELECT * FROM tbl_user WHERE email = :email');
        $this->db->bind(':email', $data['email']);

        return $this->db->single();

    }

    public function deleteUser($data){
      $this->db->query('DELETE FROM tbl_user WHERE id = :id'); 
      $this->db->bind(':id', $data['id']); 

      $this->db->execute() ? true : false;
    }
}
