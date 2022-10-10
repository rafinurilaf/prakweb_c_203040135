<?php

class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE ID=:ID');
    $this->db->bind('ID', $id);
    return $this->db->single();
  }

  public function tambahDataMahasiswa($data)
  {
    $query = "INSERT INTO mahasiswa
                    VALUES
                  ('', :nama, :nrp, :email, :jurusan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE ID = :id";

    $this->db->query($query);
    $this->db->bind('ID', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function ubahDataMahasiswa($data)
  {
    $query = "UPDATE mahasiswa SET
                    Nama = :nama,
                    NRP = :nrp,
                    Email = :email,
                    Jurusan = :jurusan
                  WHERE ID = :id";

    $this->db->query($query);
    $this->db->bind('Nama', $data['Nama']);
    $this->db->bind('NRP', $data['NRP']);
    $this->db->bind('Email', $data['Email']);
    $this->db->bind('Jurusan', $data['Jurusan']);
    $this->db->bind('ID', $data['ID']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function cariDataMahasiswa()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE Nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
