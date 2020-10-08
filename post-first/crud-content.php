<?php require 'head.php'; ?>
<body>  
    <?php require 'nav.php'; ?>
        <div class="jumbotron" style="height: auto;">
            <div class="container justify-content-center">        
                <!-- PHASE 1-->
                <div class="card m-2 text-center mb-4">
                    <div class="card-body">
                        <h1>Using Xampp as a localhost</h1>
                        <img src="../img/post-1/xampp-home.png" class="img-fluid mb-2" alt="Responsive image">
                        <br>
                        <ul class="text-left">
                            <li> First in order to use CRUD features , we need to install Xampp as our own localhost which contain our website data . 
                            In this tutorial we use Xampp because it is an open source platform and it's easy to use for a junior developer
                            </li>
                        </ul>
                        <div class="card-footer">
                        <p>Download Xampp <a href="https://www.apachefriends.org/index.html" class="btn btn-sm btn-outline-primary" target="_blank">Click Here</a></p>
                        </div>  

                        <hr>
                        <h1>Run Xampp control panel</h1>
                        <img src="../img/post-1/Xampp-cp.png" class="img-fluid mb-2" alt="Responsive image">                       
                        <ul class="text-left">
                            <li> To use Xampp control panel you need to download <a href="https://www.apachefriends.org/index.html" target="_blank">Xampp</a> and launch <b>xampp-control</b> in Xampp folder </li>
                            <li> After launch Xampp control panel , you need to start  <b>Apache</b> and <b>MySQL</b> database in order to run your localhost </li>
                        </ul>

                        <hr>
                        <h1>Set up configuration path</h1>
                        <img src="../img/post-1/xampp-confg.png" class="img-fluid mb-2" alt="Responsive image">                    
                        <ol class="text-left">
                            <li> In this situation as a PHP developer , I run action of Apache and MySQL database </li>
                            <li> You need to config path of your project folder in the Xampp <b>htdoc folder</b> directory </li>
                            <li> Click the button <b>"Config"</b> right to the <b>"Admin"</b> button in the <b>Apache</b> database rows </li>
                            <li> Then click <b>Apache(httpd.conf)</b></li> 
                        </ol>

                        <hr>
                        <h1>Set up directory path</h1>
                        <img src="../img/post-1/xampp-path.png" class="img-fluid mb-2" alt="Responsive image">       
                        <ol class="text-left">
                            <li> Ctrl + F , on your keyboard and search for htdocs </li>     
                            <li> Add <b>/projectname</b> in the DocumentRoot <em>"C:/xampp/htdocs<b>/projectname</b>" </em></li>  
                            <li> Also add for line below it <em>< Directory "C:/xampp/htdocs<b>/projectname</b>"> </em></li>      
                            <li> After adding the path of project name , Ctrl + S to save directory </li>     
                            <li> Noticed that you can named whatever your folder or project is </li>                         
                        </ol>
                    </div>
                </div>
                              
                <!-- PHASE 2-->
                <div class="card m-2 text-center">
                    <div class="card-body">
                        <h1>Create database name in phpMyadmin </h1>
                        <img src="../img/post-1/create-db-name.png" class="img-fluid mb-2" alt="Responsive image">
                        <ol class="text-left">
                            <li> Launch your browser <b>Google</b> or <b>Safari</b> and search for <b>localhost/phpmyadmin</b> </li>       
                            <li> Click <b>New</b> on the left phpmyAdmin console and create database name </li>                
                            <li> I named my database as <b>Junior</b> , you can name anything for your db name </li>
                            <li> Click create and we ready to go </li>
                        </ol>
                                            
                        <hr>
                        <h1>Create table name inside Database</h1>
                        <img src="../img/post-1/create-table.png" class="img-fluid mb-2" alt="Responsive image">
                        <ol class="text-left">     
                            <li> Inside database we need to create data table which I named as <b>juniortable</b> </li>   
                            <li> The more data or information that you required the more column will be added </li>                                                
                            <li> Noticed that I only choose 4 columns , you can add more as you liked </li>                                 
                        </ol>

                        <hr>
                        <h1>Create table column inside table name</h1>
                        <img src="../img/post-1/create-table-column.png" class="img-fluid mb-2" alt="Responsive image">                    
                        <ol class="text-left">
                            <li> Column <b>name</b> refers to name of our data</li>
                            <li> Column <b>type</b> refers to type of our data , whether it is as a text , integer , date or variable character </li>
                            <li> Column <b>length</b> refers to the length of alphanumeric data to specify maximum number of characters allowed </li>
                            <li> Column <b>A.I</b> refers to Auto Increment which I only tick for my ID because the value is unique and duplicates are not possible </li> 
                            <li> Lastly click save on the bottom left side and we are ready to go </li>
                        </ol>

                        <hr>
                        <h1>Your table name is ready</h1>
                        <img src="../img/post-1/table-column.png" class="img-fluid mb-2" alt="Responsive image">       
                        <ul class="text-left">
                            <li> Your data table should look like this , and each time data is inserted it will be displayed </li>                                          
                        </ul>
                    </div>
                </div> 

                 <!-- PHASE 3-->
                <div class="card m-2 text-center mt-4">
                    <div class="card-body">                 
                        <h1>Creating an easy form</h1>
                        <img src="../img/post-1/signup-front.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> This sign-up form is a way on inserting data into database for user </li>
                            <li> This is an example of front sign-up design I construct </li>
                            <li> Noticed that the button submit is the medium that sent data to the back end script </li>                  
                        </ul>

                        <hr>
                        <h1>Example of form backend script</h1>
                        <img src="../img/post-1/signup-back.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> Noticed that the form is added <b>action="process.php"</b> and <b>method="POST"</b> </li>
                            <li> The <b>process.php</b> is the file where I code and save the backend script </li>
                            <li> While the <b>method="POST"</b> is a way of sending the information </li>                  
                        </ul>

                        <hr>                  
                        <h1>SQL statement logic</h1>
                        <img src="../img/post-1/sql-logic.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> In order for sign-up form to function , a backend srcipt is required as shown </li>
                            <li> Noticed that the srcipt must be inside the <b>< ?php ?></b> tag to function </li>                                        
                        </ul>

                        <hr>
                        <h1>SQL connector</h1>
                        <img src="../img/post-1/connect-sql.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> We declared the <b>$variable = "value";</b> to reduce error and easy for debugging </li>
                            <li> Noticed that the <b>$conn</b> holds the <b>SQL statement</b> in order to connect to database </li>                                        
                        </ul>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Variable "$"</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>                               
                                    <td>$servername = " ";</td>
                                    <td>This variable holds Xampp servername which is "localhost"</td>
                                </tr>
                                <tr>                    
                                    <td>$username = " ";</td>
                                    <td>This variable holds Xampp username which is "root"</td>                            
                                </tr>
                                <tr>  
                                    <td>$password = " ";</td>
                                    <td>This variable holds Xampp password which is set to empty</td>
                                </tr>
                                <tr>                                
                                    <td>$database = " ";</td>
                                    <td>This variable holds my Xampp database name which is "junior"</td>
                                </tr>
                                <tr>                                
                                    <td>$conn =</td>
                                    <td>This variable holds SQL connector statement</td>
                                </tr>                                
                          </tbody>
                        </table>
                        <br>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Function ( );</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>
                                    <td>connect_error</td>
                                    <td>This function returns error description from last connection error , if any</td>
                                </tr>
                          </tbody>
                        </table>

                        <hr>             
                        <h1>SQL Insert statements</h1>
                        <img src="../img/post-1//Insert-sql.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> The <b>$sql</b> holds the <b>SQL insert statement</b> in order to insert data into database </li>    
                            <li> Noticed the value after <b>`juniortable`</b> is the name of your data column inside your table data </li>
                            <li> The variable after <b>VALUES</b> is set after your form <b>input name=""</b> </li>                                        
                        </ul>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Function ( );</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">                           
                                <tr>
                                    <td>query( );</td>
                                    <td>This function performs a query against a database</td>                            
                                </tr>
                                <tr>                                
                                    <td>header("Location: ");</td>
                                    <td>This function redirect users to another location or https</td>
                                </tr>
                                <tr>                                
                                    <td>die( );</td>
                                    <td>This function send message and exit from the current php script</td>
                                </tr>
                                <tr>                                
                                    <td>close( );</td>
                                    <td>This function closed database connection</td>
                                </tr>
                          </tbody>
                        </table>
                        <br>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Variable "$"</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">                           
                                <tr>
                                    <td>$sql</td>
                                    <td>This variable holds value of SQL <b>insert</b> statement</td>                            
                                </tr>
                                <tr>  
                                    <td>$email</td>
                                    <td>This variable holds value input <em>name="<b>email</b>"</em> declared from your form input</td>
                                </tr>
                                <tr>                                
                                    <td>$user</td>
                                    <td>This variable holds value input <em>name="<b>uname</b>"</em>declared from your form input</td>
                                </tr>
                                <tr>                                
                                    <td>$country</td>
                                    <td>This variable holds value input <em>name="<b>country</b>"</em> declared from your form input</td>
                                </tr>
                          </tbody>
                        </table>

                        <hr>
                        <h1>SQL Select statements</h1>
                        <img src="../img/post-1/select-sql.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> To run this statement , it must be declared in the selected file to display inserted data </li>    
                            <li> <b>$conn</b> and <b>its variable</b> must be declared together for <b>Select statement</b> to function </li>                              
                            <li> Noticed that the logic must be inside <b>< ?php ?></b> syntax</b> </li>                                        
                        </ul>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Variable "$"</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">                           
                                <tr>                                
                                    <td>$result</td>
                                    <td>This variable holds the query function of <b>$sql</b> and <b>$conn</b></td>
                                </tr>
                                <tr>                                
                                    <td>$row</td>
                                    <td>This variable holds the associative array data from database</td>
                                </tr>
                                <tr>                                
                                    <td>$data[ ]</td>
                                    <td>This variable holds <b>$row</b> value that have been <br>changed into <b>$data</b></td>
                                </tr>
                          </tbody>
                        </table>
                        <br>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Function ( );</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">                           
                                <tr>                                
                                    <td>fetch_assoc( )</td>
                                    <td>This function fetches data row as an associative array</td>
                                </tr>
                                <tr>                                
                                    <td>num_rows</td>
                                    <td>This function return data from data table in a result set</td>
                                </tr>
                          </tbody>
                        </table>
                        <br>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody>                           
                                <tr>                                
                                    <td> <b>*</b> </td>
                                    <td>This asterisk symbol means to select <b>ALL</b> data from data table</td>
                                </tr>
                          </tbody>
                        </table>

                        <hr>
                        <h1>SQL Update and Delete statements</h1>
                        <img src="../img/post-1/delete-update-sql.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> Noticed that the variable for this two statements is set to method <b>GET</b> instead of <b>POST</b> </li>
                            <li> The <b>if ($_GET){ }</b> means that either the user want to update then run this statement else run the delete statement </li>
                            <li> The <b>$conn->close();</b> function must be declared in each block of code to close connection every time </li>         
                            <li> Both of the logic is declared in the same file which is <b>process.php</b> </li>                                  
                        </ul>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead class="">
                                <tr>
                                    <th scope="col">Variable "$"</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">                           
                                <tr>                                
                                    <td> <b>$id</b> </td>
                                    <td>This variable holds the id of user taken from the data table</td>
                                </tr>
                          </tbody>
                        </table>
                    </div>  
                </div>  
              
                <!-- PHASE 4-->   
                <div class="card m-2 text-center mt-4">
                    <div class="card-body">                 
                        <h1>Insert data using Sign-Up form</h1> 
                        <img src="../img/post-1/form-signin.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> Noticed that every time user sign-up , the data will be display in the selected file</li>
                            <li> The information from this form is send to backend script to perform SQL statments and data is stored in your data table</li>                 
                        </ul>

                        <hr> 
                        <h1>Data displayed in selected file</h1>
                        <img src="../img/post-1/insert-front.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> Noticed that the <b>select statement</b> declared in this file , displayed the inserted data </li>  
                            <li> As for <b>update</b> feature , whenever you click update button , it will be directed to another page</li>   
                            <li> And for <b>delete</b> feature , whenever you click delete button , it will be also deleted in database</li>                                          
                        </ul>

                        <hr> 
                        <h1>Backend script of data displaying</h1>
                        <img src="../img/post-1/insert-back.png" class="img-fluid mb-2" alt="Responsive image">
                        <ol class="text-left">
                            <li> Noticed that to display data the php statements is required </li>
                            <li> The achor tag for <b>update</b> is added <em>"update-form.php?id=< ?php echo $record['id']?>"</em></li> 
                            <li> <b>Update-form.php</b> is another file where user can update their profile while the $record holds the id of user </li>   
                            <li> For <b>delete</b> is added <em>"process.php?id=< ?php $record['id']?>&action=delete-btn"</em></li> 
                            <li> <b>Process.php</b> is where delete statement is stored and to delete data the statement the file is required</li>            
                        </ol>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Variable "$"</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>                               
                                    <td>$record</td>
                                    <td>This variable holds the <b>$data</b> associative array data that have<br>been changed to <b>$record</b></td>                                
                                </tr>                           
                          </tbody>
                        </table>
                        <br>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Function</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>                               
                                    <td>isset( ):</td>
                                    <td>This function checks whether variable is declared and is not null</td>
                                </tr>                          
                          </tbody>
                        </table>
                        <br>
                        <table class= "table-bordered mx-auto w-auto ">
                            <thead>
                                <tr>
                                    <th scope="col">Statment</th>
                                    <th scope="col"> Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>                    
                                    <td>if</td>
                                    <td>This statement executes some code if one condition is true</td>                            
                                </tr> 
                                <tr>                    
                                    <td>endif</td>
                                    <td>This statement end an if conditional using the alternate syntax</td>                            
                                </tr>    
                                <tr>                               
                                    <td>foreach</td>
                                    <td>This statement used for looping through the values of an array</td>
                                </tr>
                                <tr>                    
                                    <td>endforeach</td>
                                    <td>This statement allows to iterate over elements of an array</td>                            
                                </tr>                                                    
                          </tbody>
                        </table>

                        <hr> 
                        <h1>Update data using Sign-Up form</h1>
                        <img src="../img/post-1/update-front.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> This is another example of update form using the same form like the sign-up</li>
                            <li> Whenever user click update , the new data will be updated </li>                 
                        </ul>

                        <hr> 
                        <h1>Insert data using Sign-Up form</h1>
                        <img src="../img/post-1/update-back.png" class="img-fluid mb-2" alt="Responsive image">
                        <ul class="text-left">
                            <li> Noticed that 2 input is added and have been set to hidden</li>
                            <li> The first input is named as <b>action</b> in order for this <b>update statement</b> to function</li>  
                            <li> The value of second input is set to <b>"< ?php echo $_GET['id']?>"</b> to get the id of user that click the update button</li>                             
                        </ul>  
                        <hr>                
                    </div> 
                </div>   
                
                <div class="card" style="width: 18erem;"> 
                    <div class="card-footer text-center">
                        <a href="sign-up.php" class="btn btn-outline-success">Try Feature</a>
                    </div>
                </div>
            </div>
        </div>
    <?php require 'footer.php'; ?>
</body>
<style>
h1{
    font-family: "Times New Roman";
}
ol li {
    font-size: 30px;
}
ul li {
    font-size: 30px;
}
</style>