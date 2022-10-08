<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $tanggal=$_POST['tanggal'];
    $name=$_POST['name'];
    $tag=$_POST['tag'];
    $keterangan=$_POST['keterangan'];
    
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE crud_icn SET tanggal='$tanggal' ,name='$name',tag='$tag',keterangan='$keterangan' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: crud_icn.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM crud_icn WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $tanggal = $user_data['tanggal'];
    $name = $user_data['name'];
    $tag = $user_data['tag'];
    $keterangan = $user_data['keterangan'];

}
?>
<html>
<head>    
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="crud_icn.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit_icn.php">
        <table border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Tag</td>
                <td><input type="text" name="tag" value=<?php echo $tag;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
            </tr>            
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>