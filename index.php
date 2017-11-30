<?php
require 'partials/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
require 'head.php';
require 'partials/database.php';
require 'partials/functions.php';


$statement = $pdo->prepare("SELECT * FROM posts ORDER BY id DESC");
$statement->execute();
$posts = $statement->fetchALL(PDO::FETCH_ASSOC);
?>

<body>

    <!-- NAVIGATION -->
    <?php
        require 'nav.php';
    ?>

    <!-- HERO IMAGE -->
    <div class="jumbotron"></div>
    <div class="blue-line"></div>

    <main class="container">

        <div class="col-md-8">

            <h1>Våra blogginlägg</h1>
            <hr style="width: 97%;">
            <div class="filter">
                <span class="filter uppercase">Filtrera efter:</span>

                <div class="btn-group right-align">
                    <button type="button" class="btn button-test dropdown-toggle" data-toggle="dropdown">KATEGORI</button>
                    <ul class="dropdown-menu" role="menu">
                        <form action="index.php" method="POST" class="filter">
                            <li><input href="#" type="submit" name="all" value="Allt"></li>
                            <li><input href="#" type="submit" name="Klockor" value="Klockor"></li>
                            <li><input href="#" type="submit" name="Solglasögon" value="Solglasögon"></li>
                            <li><input href="#" type="submit" name="Inredning" value="Inredning"></li>
                        </form>
                    </ul>
                </div>

                <div class="btn-group">
                <button type="button" class="btn button-test dropdown-toggle" data-toggle="dropdown">DATUM</button>
                    <ul class="dropdown-menu" role="menu">
                        <form action="index.php" method="POST" class="filter">
                            <li><input href="#" type="submit" name="all" value="Allt"></li>
                            <li><input href="#" type="submit" name="Klockor" value="Klockor"></li>
                            <li><input href="#" type="submit" name="Solglasögon" value="Solglasögon"></li>
                            <li><input href="#" type="submit" name="Inredning" value="Inredning"></li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>

        <div class="index_login hidden-xs hidden-sm col-md-4">
            <h1 style="text-align:center;">ANVÄNDARE</h1>
            <hr>
        </div>
        
        <?php
            //require 'index_login.php';
        ?>

        <?php
            if (isset($_POST['Klockor'])) {
                handleCategories($_POST["Klockor"],  5 , 'col-md-8', 'col-md-6');
            }
            elseif (isset($_POST['Solglasögon'])) {
                handleCategories($_POST["Solglasögon"], 5 , 'col-md-8', 'col-md-6');
            }
            elseif (isset($_POST['Inredning'])) {
                handleCategories($_POST["Inredning"], 5 , 'col-md-8', 'col-md-6');
            }
            else {
                allCatergories(5, 'col-md-8', 'col-md-6');
            }
        ?>

        <hr>

        <a class="btn button-green btn-lg btn-block" href="blog.php">Läs alla inlägg här</a>

    <!--main End-->
    </main>

    <?php
        require "footer.php";
    ?>

</body>

</html>