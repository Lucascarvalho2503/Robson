<html>
<?php
include("view/comum/head.php");
?>
<body>
    <?php
    if($_SESSION['token']){
        echo "ok";
    }else{
        include("view/login.php");
    }
    ?>
    
    <?php
    include("view/comum/footer.php");
    ?>
    <script src="login.js"></script>
</body>
</html>