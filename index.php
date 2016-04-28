<!DOCTYPE html>

<html>

<head>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/component.css" rel="stylesheet" type="text/css" />
    <link href="css/demo.css" rel="stylesheet" type="text/css" />
    <link href="css/social-icons.css" rel="stylesheet" type="text/css" />
    <link href="css/events.css" rel="stylesheet" type="text/css" />
    <link href="css/store.css" rel="stylesheet" type="text/css" />
    <script src="js/modernizr.custom.js" type="text/javascript"></script>
    <title>Darn Fresh Food</title>
    <?php include_once("partials/random-background.php"); ?>
</head>

<body>
    <div id="container">
        <?php  
        include_once("partials/header.php");
        if (isset($_POST["webDirectory"]) && file_exists("partials/" . $_POST["webDirectory"] . ".php")) {
            
            if ($_POST["webDirectory"] == "events") {
                include_once("partials/events.php");
            } else if ($_POST["webDirectory"] == "store") {
                include_once("partials/store.php");
            } else if ($_POST["webDirectory"] == "recipes") {
                include_once("partials/recipes.php");
            } else if ($_POST["webDirectory"] == "mailing") {
                include_once("partials/mailing.php");
            } else if ($_POST["webDirectory"] == "contact") {
                include_once("partials/contact.php");
            } else {
                include_once("partials/home-page.php");
            }

        } else {
            include_once("partials/home-page.php");
        }
        ?>
        
        <footer>
            <br />
            <br />
            <br />
            <form action="index.php" method="post">
                <nav>
                    <ul>
                        <li>
                            <button type="submit" name="webDirectory" value="null">
                                HOME
                            </button>
                        </li>
                        <li>
                        <li>
                            <button type="submit" name="webDirectory" value="events">
                                EVENTS
                            </button>
                        </li>
                        <li>
                            <button type="submit" name="webDirectory" value="store">
                                STORE
                            </button>
                        </li>
                        <li>
                            <button type="submit" name="webDirectory" value="recipes">
                                RECIPES
                            </button>
                        </li>
                        <li>
                            <button type="submit" name="webDirectory" value="mailing">
                                MAILING
                            </button>
                        </li>
                    </ul>
                </nav>
            </form>
            <p>Darn Fresh Food Copyright 2013 - 2015</p>
            <script src="js/svgcheckbx.js" type="text/javascript"></script>
        </footer>
    </div>
    <br />
</body>

</html>