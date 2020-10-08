<?php include '../post-first/head.php' ;?>
<body>
    <?php require 'navbar.php' ;?>
        <main>  
            <div class="jumbotron" style="height: auto;">
               <div class="container">
                    <!-- PHASE 1-->
                    <div class="card m-2 text-center">
                    <div class="card-body m-4">
                        <h1>Creating a basic <em>Navbar</em></h1>
                        <img src="../img/post-2/navbar-front.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> Noticed that the Navbar only contains <b>directory</b> for every page which is , <b>home</b> , <b>about</b> and <b>example</b> </li>
                            <li> Everytimes user click any of these directory , user will be redirect to another page </li>
                        </ul>  

                        <hr>   
                        <h1>Example of navbar script</h1>
                        <img src="../img/post-2/navbar-back.png" class="img-fluid mb-2" alt="Responsive image">

                        <hr>
                        <h1>Creating a basic <em>Footer</em></h1>
                        <img src="../img/post-2/bottom-front.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> Noticed that footer usually contains more information about a website </li>
                            <li> For this example I add on social media button and a simple quotes</li>
                        </ul>  

                        <hr>     
                        <h1>Example of footer script</h1>
                        <img src="../img/post-2/bottom-back.png" class="img-fluid mb-2" alt="Responsive image">    

                        <hr>    
                        <h1>Creating a basic <em>Content</em></h1>
                        <img src="/img/post-2/content-front.png" class="img-fluid mb-2" alt="Responsive image">
                        <hr>
                        <ul class="text-left">
                            <li> Noticed that every times user click on the other page this layout will still be the same </li>
                            <li> This layout consists of <b>Navbar</b> , <b>Content</b> and <b>Footer</b></li>
                        </ul>  

                        <hr>    
                        <h1>Example of content script</h1>
                        <img src="../img/post-2/content-back.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> Noticed that to use PHP dynamic feature , a <b>< ?php ?></b> tag must be declared </li>
                            <li> The <b>navbar.php</b> is where I stored the code for navbar</li>
                            <li> The <b>< main ></b> tag is where the content will be displayed inside </li>
                            <li> The <b>bottom.php</b> is where I stored the code for footer</li>
                        </ul>  
                        <br>
                        <table class="table table-stripped">
                            <thead>
                                <tr>   
                                    <td scope="col">Statment</td>
                                    <td scope="col">Value</td>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>
                                    <td><b>Require '</b>file-name.php<b>'</b></td>
                                    <td>This statement takes all the code that exists in the specified file and copies it into the file that uses this statement</td>
                                </tr>
                            </tbody>
                        </table>

                        <hr>                           
                        <div class="card-footer">
                           source ; <a href="https://getbootstrap.com/" target="blank" class="btn btn-outline-primary">Bootstrap</a>
                                  <a href="https://www.w3schools.com/" target="blank" class="btn btn-outline-success">W3schools</a>
                        </div>
                    </div>
                </div>

               </div>
            </div>
        </main>
    <?php require 'bottom.php' ;?>
</body>
<style>
.jumbotron{
    background-image: url("../img/post-2/mountain3.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

h1{
    font-family: "Times New Roman";
}
ul li {
    font-size: 30px;
}

</style>