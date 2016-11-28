<?php
    @session_start();
    if (@$_SESSION['login'] != 1){
        header("Location: ../../");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ("build/head.php"); ?>
    </head>

    <body class="flat-blue" style="background-image: url('../../images/back/bg1.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="app-container">
            <div class="row content-container">
                <?php include ("build/tape.php"); ?>
                
                <?php include ("build/menu_left.php"); ?>
                
                <?php include ("build/view_create_article.php"); ?>
            </div>

            <?php include ("build/footer.php"); ?>
        </div>
        <?php include ("build/scripts.php"); ?>
        <script type="text/javascript">
            setTimeout(function(){
                $("navbar-nav .active").removeClass("active");
                $(".option_article__item").addClass("active");
            }, 100);
        </script>
    </body>
</html>
