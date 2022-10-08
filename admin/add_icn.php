
<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="crud_icn.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_icn.php" method="post" name="form1" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Tag</td>
                <td><input type="text" name="tag"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td><label for="gambar">Upload Gambar</label></td>
                <td><input type="file" name="gambar" required=""><br><td>
            </tr>      
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
    include_once("config.php");
    
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $tanggal = $_POST['tanggal'];
        $name = $_POST['name'];
        $tag = $_POST['tag'];
        $keterangan = $_POST['keterangan'];
        $gambar = $_FILES['gambar']['name'];
        
        $eks_dibolehkan = ['png', 'jpg']; // ekstensi yang diperbolehkan
        $x = explode('.', $gambar); // memisahkan nama file dengan ekstensi
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];

        if(in_array($ekstensi, $eks_dibolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/' . $gambar); // memindahkan file gambar
          

        // include database connection file
        
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO crud_icn(tanggal,name,tag,keterangan,gambar) VALUES('$tanggal','$name','$tag','$keterangan','$gambar')");
        
        // Show message when user added
        echo "User added successfully. <a href='crud_icn.php'>View Users</a>";
    }}
    ?>
</body>
</html>