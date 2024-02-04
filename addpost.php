




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="javas.js"></script>
    
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smokum&display=swap" rel="stylesheet">

</head>
<body>


    <div class="container7">
        <div class="header1">
                <header class="header">
                    <a href="portfolio.html" class="mainlogo">Portfolio</a>
            
                    <nav class="navbar">
                        <a href="Aboutme.html">About me</a>
                        <a href="Skill.html">Skills and Achievements</a>
                        <a href="Education.html">Education and Qualifications</a>
                        <a href="exper.html">Experience</a>
                        <a href="portfolio.html">Portfolio</a>
                        <a href="contact.html">Contact</a>
                        <a href="login.html">Login</a> 
                            <a href="viewblog.php">Blog</a>
                    </nav>
            
                </header>
        </div>

        
            
            
                <div class="blogenter"> 

    
                <?php
                    session_start();
                    if(isset($_SESSION['Passwordd'])){
                        echo "<h2>session started</h2>";
                    }
                    ?>
                    <h2>Add Blog</h2> 
                
                  
                
                    <form action="blog.php" method="post" id="blog-form"> 
                        <input type="text" name="title"><br><br> 
                        <textarea name="blogtext" cols="40" rows="10"></textarea>
                        <div> 
                            <input type="submit" name="submit" id="submit"> 
                            <input type="button" name="clear" value="Clear" id="but" onclick="clearFields()">
                        </div> 
                        </form> 


                
                </div> 
            

        
       
        
        <div class="item5">
            <section class="footer">
               
                
                <ul class="footerlist"> 
                    <li>
                    <a href="viewblog.php"> View Blogs</a>
                        
                    
                    </li>
                    <li>
                        
                        <a href="exper.html"> See coding journey </a>
                        
                    
                    </li>
                    <li>
                        
                        <a href="Education.html"> Current Work </a>
                    
                    </li>

                </ul>

                <p class="copy">
                    Gurvinder singh @ 2023
                </p>


            </section>
        </div>
      
    
        
    



    
</body>
</html>