<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            margin-top: 60px;
            background-image: url("images/bg2.jpg");
       }
       .project{
        text-align: center;
        border: 4px solid #000;
        border-radius: 50px;
        max-height: 70%;
        max-width: 50%;
        padding: 10px;
        margin: 0 auto;

       }
       .project video{
        width: 100%;
       }
    </style>
</head>
<body>
    
   <section class="projects">
    <div class="project">
        <h1>THESIS PROJECT</h1>
        
        <?php
        $projects = [
            ['', '<div style="font-size: 1.5em;">Our thesis project, titled "Student Account Monitoring and Payment Management System for Gentle Shepherd Montessori Inc.", aims to provide students with easy access to their accounts, enabling them to view balances and make payments. Additionally, it streamlines payment management for teachers and facilitates the process of adding new students.

</div>', 'videos/gsmiinfo_promotionalvideo.mp4'],
        ];

        foreach ($projects as $project) {
            echo '<h2>'.$project[0].'</h2>';
            echo '<video controls>';
            echo '<source src="'.$project[2].'" type="video/mp4">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
            echo $project[1]; // Remove the <p> tag, since you're already using a <div> inside $project[1]
        }
        ?>
    </div>
</section>

</body>
</html>
