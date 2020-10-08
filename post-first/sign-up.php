<?php require 'head.php'; ?>
<body>  
    <?php require 'nav.php'; ?>
        <div class="jumbotron" style="height: auto">
            <div class="row justify-content-center">

                <div class="card text-center" style="width: 18rem;">      
                    <div class="card-body m-2">  
                        <div class="card-title">
                            <h1>Sign-Up</h1>
                        </div>
                        <form action="process.php" method="POST">                        
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control text-center" type="text" name="email" placeholder="Enter E-mail" required>
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control text-center" type="text" name="uname" placeholder="Enter Username" required>
                            </div>

                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control text-center" type="text" name="country" placeholder="Enter Country" required>
                            </div>

                            <div class="card-footer">
                                <button class="btn btn-outline-primary m-2" name="submit" type="submit" value="submit">Submit</button>
                                <p>Already a Member?<a href="#"> <br>Sign-In</a></p>
                            </div>                        
                        </form> 
                    </div>          
                </div> 

            </div>           
        </div>
    <?php require 'footer.php'; ?>
</body>
<style>
.jumbotron{
    background-image:url("/img/bg-img.jpg") ;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>