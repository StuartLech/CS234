<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div>
    <header>
        <h1><?php site_name();?></h1>
        <nav>
            <?php nav_menu();?>
        </nav>    
    </header>

    <article>
        <?php page_content();?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y');?><?php site_name();?></small>
    </footer>
</div>
</body>
</html>