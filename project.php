<?php

    // View rendering code
    require_once 'views.php'; 
    
    
    // Page content
    $project = $_GET['project'];
    $content = render_markdown_file("projects/$project");

    
    // Create main part of page content
    $settings = array(
        "site_title" => '<a href="index.php">UNC BACS 200 Projects</a>',
        "page_title" => "Project #$project", 
        "content"    => $content);

    echo render_page($settings);

?>
