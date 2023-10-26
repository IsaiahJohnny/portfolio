<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>MyPortfolio</title>
    <style>
      body {
    background-image: url("images/bg2.jpg");
    background-size: cover;
   
}
.image-container {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
        .img {
            max-width: 300px;
            padding-top: 20px;
            border-radius: 70px;
            margin-bottom: 80px;
            margin-left: 350px;
       
        }
        .text {
    margin-left: 20px;
}
		.text p{
			font-size: 20px;
			font-family: FreeMono, monospace;
		}
		.text h1{
			font-size: 40px;
			font-family: URW Chancery L, cursive;
		}

        .resume-icon {
            width: 20%;
            display: block;
            margin: 0 auto;
        }

        .project-icon {
            display: block;
            margin: 0 auto;
        }

        .resume {
            border-color: black;
            border-radius: 50px;
            padding: 30px;
        }

		.center-container {
            text-align: center;
            border: 4px solid #000;
            border-radius: 90px;
            padding: 10px;
            margin: 0 auto;
            margin-bottom: 20px;
            max-height: 50%;
            max-width: 20%;
			float: right;
        }
        .container {
            text-align: center;
            border: 4px solid #000;
            border-radius: 90px;
            padding: 10px;
            margin: 0 auto;
            margin-bottom: 20px;
            max-height: 50%;
            max-width: 20%;

        
        }

        
        .heading {
            margin-bottom: 10px;
        }
         .sidebar {
            background-color: #808080;
            color: #fff;
            width: 450px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            padding-top: 20px;
          

        }

        .sidebar p {
            font-size: 18px;
            margin-bottom: 20px;
          padding-bottom: 5px;
          color: black;
          font-family: Optima, sans-serif;

        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 10px;
        }

        .sidebar a:hover {
            background-color: #555;
        }
        .personal-info{
        	color: white;
        }
    </style>
</head>
<body>


   <div class="image-container">
    <center>
        <img src="images/main.jpg" class="img">
    </center>
    <div class="text">
        <h1>Hi! I'm Web Developer</h1>
        <p>Check out some of my skills and projects!</p>
    </div>
</div>
    
    <div class="center-container">
        	<h1 class="heading">Résumé</h1>
        	<a href="resume.php">

            <img src="images/icon1.jpeg" class="resume-icon">

        </a>
    </div>
    
    <div class="container">     
            <h1 class="heading">Project</h1>
             <a href="project.php">
             
            <img src="images/project.jpeg" class="project-icon" width="20%">

        </a>
    </div>
      <div class="sidebar">
    
        <div class="personal-info">
            <p><h1>Name: Isaiah John Austria</h1></p>
            <p>Email: austriaisaiahjohn6@gmail.com</p>
            <p>Phone: 09659405896</p>
            <p>Siling Matanda, Pandi, Bulacan</p>
            <p><h1>Coding Skills</h1></p>
            <p>PHP <br><br>HTML/CSS<br> <br>JAVASCRIPT <br><br>MySQL</p>
            <p><h1>Software Tools</h1></p>
            <p>Visual Basic<br><br> Visual Studio code<br><br> Canva<br><br> MS Office(Excel/Word/PowerPoint)<br><br> Adobe Photoshop</p>
        </div>
</body>
</html>
