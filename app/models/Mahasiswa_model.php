<?php

class Mahasiswa_model
{
    //datebase handler
    private $dbh;
    private $stat;

    public function __construct()

    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

 


    // private $mhs = [[
    //     "nama" => "Audi Aqsha",
    //     "nrp" => "203040144", "email" => "audiaqsha578@gmail.com", "jurusan" => "Teknik Informatika"
    // ], [
    //     "nama" => "Erdi Fajar",
    //     "nrp" => "203040146", "email" => "erdifajarf@gmail.com", "jurusan" => "Teknik Informatika"
    // ]];

    public function getAllMahasiswa()
    {
        $this->stmt=$this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();

        return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}
