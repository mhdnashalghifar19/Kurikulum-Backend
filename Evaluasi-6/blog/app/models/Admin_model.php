<?php

class Admin_model {
    private $table = 'artikel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllArtikel()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getArtikelById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataArtikel($data)
    {
        $query = "INSERT INTO artikel(judul, gambar, isi, penulis)
                    VALUES
                    (:judul, :gambar, :isi, :penulis)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        if (!$_FILES["gambar"]["error"] == 4) {
            $this->db->bind('gambar', $_FILES['gambar']['name']);
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../public/img/' . $_FILES['gambar']['name']);
        } else {
            $this->db->bind('gambar', NULL);
        }
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('penulis', $data['penulis']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataArtikel($id)
    {
        $query = "DELETE FROM artikel WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataArtikel($data)
    {
        $query = "UPDATE artikel SET 
                    judul = :judul,
                    gambar = :gambar,
                    isi = :isi,
                    penulis = :penulis
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        if (!$_FILES["gambar"]["error"] == 4) {
            $this->db->bind('gambar', $_FILES['gambar']['name']);
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../public/img/' . $_FILES['gambar']['name']);
        } else {
            $this->db->bind('gambar', $data['gambarlama']);
        }
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getdataUser($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $query = "SELECT * FROM user WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $result = $this->db->single();
        var_dump($result);
        if ($password == $result['password']) {  
            return 1;
        } else {
            return 0;
        }
    }


    public function getregister($data)
    {
        if (!empty($data['username']) and !empty($data['password'])) {
            $username = $data['username'];
            $password = $data['password'];
            $password1 = $data['password1'];
            if ($password == $password1) {
                $query = "INSERT INTO user VALUES (null, '$username', '$password')";

                $this->db->query($query);

                $this->db->execute();

                return $this->db->rowCount();
            } 
        }
    }

}