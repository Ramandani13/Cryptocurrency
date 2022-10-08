<!-- disini itu kumpulan sintak SQL. jadi saya tidak akan menyatukan sintak sql
dengan coding lain atau register, agar lebih dinamis ,jadi dipisahin gini jadi kita tinggal manggil  doang-->

<?php
// kemudian saya akkan me require atau memerlukan file conect.php karna saya akan menggunakan beberapa objeknya
require 'Connect.php';

// lalu saya membuat class baru dengan nama query

class Query extends Connect{
    // pembuatan class ini agak berbeda karna saya menambah keyword extends conect yg artinya , coding yg ada pada file conect.php dibungkus oleh sebuah class
    // maka untuk dapat diakses ,harus di extends dulu atau di perluas
    // dalam bahasa oop itu inheritence.
    // kemudian saya akan membuat beberapa propety
    protected $sql;
    protected $result;

    // lalu buat method untuk menyimnpan sintaks sql
    public function SQLLogin($email, $password){  
        // nanti akan saya gunakan untuk login users
        $this->sql = "SELECT * FROM dev WHERE email = '".$email."' AND password = '".md5($password)."'";
        // memanggil method getresult untuk mengeksekusi simtakx sql
        return $this->getResult();
    }

    public function SQLValidateEmail($email){
        // untuk validasi email pada proses register
        $this->sql = "SELECT * FROM dev WHERE email = '".$email."'";
        return $this->getResult();
    }
    public function SQLRegister($name, $email, $password){
        // untuk proses register user
        $this-> sql = "INSERT INTO dev(name,email,password,created_at)"."VALUES ('".$name."', '".$email."', '".md5($password)."' ,NOW())";
        return $this->getResult();
    }

    public function getResult(){
        // stelah method sql diatas telah dipanggil setelah itu 
        // method getresult akan dipanggil untuk mengeksekusi sintaks sql diatas
        $this->result = $this->dbConn()->query($this->sql);
        return $this;
    }

    public function FetchArray(){
        // method ini berfungsi untuk memasukan data yg berda pada database kedalam variable array
        $row = $this->result->fetch_array();
        return $row;
    }
}