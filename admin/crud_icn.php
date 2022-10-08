<style>
            .header1 {
                background: linear-gradient(to right, #00FFFF,#000000);
                color: white;
                margin: 4rem;
                font-size: 20px;
                text-align: center;
                border:none;
                }
        </style>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM crud_icn ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <center><h1>TEAM20 Community ICN</h1><br></center>

    <!-- <center><h5><a href="add_icn.php">Add New User</a></h5> -->
    <center><h5><a href="only-dev.php">Add New User</a></h5>
 
   <table width='80%' border=1>
 
    <tr >
    <th class="header1">No</th> <th class="header1">Tanggal</th> <th class="header1">name</th> <th class="header1">Tag</th> <th class="header1">Keterangan</th> <th class="header1">Foto</th>  <th class="header1">Update</th>
    </tr>
    <?php  
    $no=0;
    while($user_data = mysqli_fetch_array($result)) {        
        $no++;
        
        echo "<tr>";
        echo "<td><center>$no.</center>";
        echo "<td><center>".$user_data['tanggal']."</td></center>";
        echo "<td><center>".$user_data['name']."</td></center>";
        echo "<td><center>".$user_data['tag']."</td></center>";
        echo "<td><center>".$user_data['keterangan']."</td></center>";  
        echo "<td><center>".$user_data['gambar']."</td></center>";    
        echo "<td><center><a href='edit_icn.php?id=$user_data[id]'>Edit</a> | <a href='delete_icn.php?id=$user_data[id]'>Delete</a></td></tr></center>";     
        
    }
    ?>
    </table></center>

</body>
</html>