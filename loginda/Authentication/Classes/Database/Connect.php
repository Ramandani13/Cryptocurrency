<!-- untuk mengkoneksi ke database  -->
<!-- karna menggunakan oop jadi semua koding akan dibungkus menggunakan class -->

<?php
 

class Connect{
    // kemudian membuat properti atau variable di slm class
    private $servername;
    private $username;
    private $password;
    private $dbname;

    // terus membuat method atau function
    protected function dbConn(){

    // setelah saya buat method dbConn(), saya akan akses properti yg sudah dibuat dengan variable $this
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'db_team';

        // kemudian saya akan mengkoneksikan ke database dengan mysqli
        // karna saya disini mengguanakn oop jadi untuk menggunakan fungsi mysqli, saya harus menggunakan keyword new terlebih dahulu
        $connection = new mysqli($this->servername,$this->username,$this->password,$this->dbname);

        // kemudian saya akan meretrun object $connection agar bsa dijalankan
        return $connection;
    }
}

