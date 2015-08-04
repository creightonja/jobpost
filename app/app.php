<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobs.php";
    $app = new Silex\Application();
    $app->get("/", function() {
      return "
      <!DOCTYPE html>
           <html>
           <head>
               <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
               <title>Post Job Opening</title>
           </head>
           <body>
               <div class='container'>
                   <h1>Post Job Opening</h1>
                   <form action='/jobs'>
                       <div class='form-group'>
                         <label for='title'>Enter the job title:</label>
                         <input id='title' name='title' class='form-control' type='text'>
                       </div>
                       <div class='form-group'>
                         <label for='description'>Enter a job description:</label>
                         <input id='description' name='description' class='form-control' type='text'>
                       </div>
                       <div class='form-group'>
                         <label for='email'>Enter your email address:</label>
                         <input id='email' name='email' class='form-control' type='text'>
                       </div>
                       <button type='submit' class='btn-success'>Create</button>
                   </form>
               </div>
           </body>
           </html>
           ";
    });

    $output = "";
    $theTitle = $_GET["title"];
    $theDescription = $_GET["description"];
    $theEmail = $_GET["email"];
    $app->get("/jobs", function() {
    //   $theJob = new Jobs($theTitle, $theDescription, $theEmail);
    //   $output = $output .
    //       "<p>" . $theJob->getTitle() . "</p>
    //       <p>". $theJob->getDescription() ." miles</p>
    //       <p>" . $theJob->getEmail() . "</p>
    //       ";
    // });

    return $theTitle . $theDescription . $theEmail;
  });

    return $app;
?>
