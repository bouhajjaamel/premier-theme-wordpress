
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo get_bloginfo('title') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icons@1.5.0/font/bootstrap-icons.css">

<?php wp_head(); ?>
</head> 
<body class="body">
    <header class="mainHeader">
           
<div class="topbar">
  <div class="search"><form class="search">
   	<input type="search" placeholder="Search">
  </form></div>
  <h3>plant<span>flowr</span></h3>

      <div class="panier"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16" >
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg></div>
</div>

<nav>
    
<?php wp_nav_menu(); ?>
</nav>

  </header>
     
