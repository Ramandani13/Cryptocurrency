<!-- require/memerlukan -->
<!-- disinii saya akan me require file query.php yg saya buat ,karna saya akan menggunakan kode kode yg ada pada file tersebut -->

<?php
require 'Database\Query.php';

// kemudian saya akan membuat class baru yg merupakan class turunan dari class query yg ada pada file query.php
 class RegisterController extends Query{
    //  disini saya bikin properti
    protected $name;
    protected $email;
    protected $password;
    protected $confirm_password;
    public $message;

    // lalu saya bikin 3 method 
    // pertama getdata untuk menyimpan data yg dikiri
    public function getData($name, $email, $password, $confirm_password){
        // yg ini  untuk mengakses properti yg kita buat tadi diatas dengan menggunakan method getdata dengan variable $this
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->confirm_password = $confirm_password;

        // kemudian saya me return method validatedata agar di ekseskusi
        return $this->validateData();
    }
    // kedua method validatedata untuk memvalidasi data
    public function validateData(){
        // kemudian kita memvalidasi data dengan statement if else 
        // disini terdapat 3 kondisi
        // pertama ,jika element input tidak diisi semua
        if(empty($this->name) || empty($this->email) ||  empty($this->password) || empty($this->confirm_password) ){
            // membuat pesan error
            $this->message = 'Semua data dibutuhkan!.';
            return $this->message;
            header('location:register.php');

            // kedua jika email yg diinputkan sama
        }elseif($this->password !== $this->confirm_password){
            // membuat pesan error
            $this->message = ' KOnfirmasi pasword anda salah';
            return $this->message;
            header('location:register.php');

            // ketiga, jika 2 kondisi tersebut tidak terpenuhi maka kondisi terakhir yg dieksekusi
        }else{
            // me return method register agar di eksekusi
            return $this->Register();
        }

    }
    // ketiga method register ,untuk proses register user
    public function Register(){
        // kita buat coding proses register method register ,dan pada method ini ,method sql yg saya buat pasa Query.php akan digunakan/dipangggil
        $row = $this->SQLValidateEmail($email)->FetchArray();

        // jika emailnya sama dengan yg ada di database maka akan ada pesan eror tapi jika berbeda ya akan disimpan
        if($row['email'] == $this->email){
            // membuat pesan eror untuk yg emailnya sama
            $this->message = 'Email yg anda masukan sudah pernah digunakan';
            return $this->message;
            header('location:register.php');

        }else{
            // scrit untuk proses register
            $sql = $this->SQLRegister($this->name, $this->email, $this->password);
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            header('location:login.php');
            
            

        }
    }
 }