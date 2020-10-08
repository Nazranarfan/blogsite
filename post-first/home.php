<?php require 'head.php'; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "junior";

$conn = new mysqli($servername , $username , $password , $database);
$sql = "SELECT * FROM `juniortable`";
$result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $data[] = $row;
      }
    }
    else {
        echo "No Result Found";
    }
    $conn->close();
?>
<body>  
    <?php require 'nav.php'; ?>
    <div class="jumbotron" style="height: auto">
        <div class="row justify-content-center">
            <div class="card text-center" style="width: 2;"> 
                <?php if(isset($data)) :?>
                <div class="card-body m-2">  
                    <table class="table">
                        <thead>
                            <tr>    
                            <th>Id</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Country</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $record) :?>                                                
                            <tr>
                            <th><?php echo $record['id'];?></th>
                            <th><?php echo $record['email'];?></th>
                            <th><?php echo $record['username'];?></th>
                            <th><?php echo $record['country'];?></th>
                            <th>
                                <div class="button">
                                    <a href="update-form.php?id=<?php echo $record['id']?>" class="btn btn-primary" type="submit" name="update-btn">Update User</a>
                                    <a href="process.php?id=<?php echo $record['id']?>&action=delete-btn" class="btn btn-danger" type="submit" name="delete-btn">Delete User</a>
                                </div>
                            </th>
                            </tr>
                            <?php endforeach ;?>
                <?php endif ;?>        
                        </tbody>
                    </table>
                </div>  
            </div>  
        </div>  
    </div>
    <?php require 'footer.php'; ?>
</body>
<style>
.jumbotron{
    background-image:url("/img/bg-img.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>