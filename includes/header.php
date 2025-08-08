<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'App Launch Guides'; ?> - Complete Graphics Requirements</title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Comprehensive guides for graphics requirements when launching digital products.'; ?>">
    <link rel="stylesheet" href="../css/style.css">
    <?php include '../includes/gtag.php'; ?>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-container">
                <a href="../" class="logo">
                    <h1>AppLaunchGuides</h1>
                    <span>Graphics Requirements Made Simple</span>
                </a>
                <ul class="nav-menu">
                    <li><a href="../#guides">All Guides</a></li>
                    <li><a href="../#about">About</a></li>
                </ul>
            </div>
        </nav>
    </header>