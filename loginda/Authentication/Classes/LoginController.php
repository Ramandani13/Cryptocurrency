<!-- require/memerlukan -->
<!-- disinii saya akan me require file query.php yg saya buat ,karna saya akan menggunakan kode kode yg ada pada file tersebut -->

<?php
require 'Database\Query.php';

// kemudian saya akan membuat class baru yg merupakan class turunan dari class query yg ada pada file query.php
 class LoginController extends Query{
    //  disini saya bikin properti
    protected $email;
    protected $password;
    protected $remember;
    public $message;

    public function getData($email, $password, $remember){

        $this->email = $email;
        $this->password = $password;
        $this->remember = $remember;

        return $this->validateData();
    }

    public function validateData(){
        if(empty($this->email) ||  empty($this->password) ){
            // membuat pesan error
            $this->message = ' Email dan Password belum diisi';
            return $this->message;
            header('location:login.php'); 
        }else{
            // me return method register agar di eksekusi
            return $this->Login();
        }
    }

    public function Login(){
        $row = $this->SQLLogin($this->email, $this->password)->FetchArray();
        if( $row['email'] == $this->email ||  $row['password'] == md5($this->password) ){
            // kemudian kita membuat session untuk email dan pasword
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];

            // kemudian kita membuat alogaritma untuk membuat fitur remember me
            $time = time() + (86400 * 30);
            if(!empty($this->remember)){
                setcookie('email', $this->email, $time);
                setcookie('password', $this->password, $time);
                // yg harus diketahui ,remember me adalaj=h digunakan untuk memgimgat akun yg telah diinputkan ke dalam sebuah form
                // jadi jika kmu mencentang remember me pada sebuah form maka bri=owser akan mengingat semua data data
                // dan data data itu akan dia=simpan dalam sebuah file u=yg dinamakan cookies
            }else{
                setcookie('email', '');
                setcookie('password', '');

            }
            // header('location:administrator.php');
            header('location:../../admin/admin.php');

        }else{
            $this->message = ' Email atau Password anda Salah';
            return $this->message;
            header('location:login.php');


        }
    }
}