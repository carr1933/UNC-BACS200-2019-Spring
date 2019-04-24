<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Title</title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="menu.css">
</head>

<body>

    <?php 
        include 'header.html'; 
        include 'menu-top.html'; 
    
        echo '<main>';
        
        include 'menu-side.html'; 
        include 'main.html'; 
    
        echo '</main>';
    
        include 'footer.html'; 
    ?>
</body>

</html>
