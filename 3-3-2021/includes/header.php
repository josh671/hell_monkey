<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title><?php  echo $title;  ?></title>
    <link rel="stylesheet" href="./css/style.css"> 
</head>
<body class='<?php echo $body   ?>'>
   <header> 
   <!-- START OF NAVIGATION -->
            <nav>
                <ul>
                    <li class="Hell">Hell Monkey</li>
                    <?php echo makelinks($nav); ?> 
                </ul>
            </nav>
   </header> 