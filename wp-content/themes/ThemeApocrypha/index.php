<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
//include(dirname(__FILE__) . "wp-content/themes/ThemeApocrypha/includes/header.php");
?>
<html>
    <head> 
        <script src="wp-content/themes/ThemeApocrypha/libraries/tether-1.3.3/dist/js/tether.min.js"></script>       
        <script src="wp-content/themes/ThemeApocrypha/libraries/jquery-3.3.1.min.js"></script>
        <script src="wp-content/themes/ThemeApocrypha/libraries/bootstrap-4/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="wp-content/themes/ThemeApocrypha/libraries/bootstrap-4/css/bootstrap.min.css"/>

        <script src="wp-content/themes/ThemeApocrypha/custom.js"></script>
        <link rel="stylesheet" href="wp-content/themes/ThemeApocrypha/style.css"/>
    </head>
    <body>
        <div class="col-4 offset-4">
            <input id="name" type="text" placeholder="nom"/>
            <input id="firstNum" type="text" placeholder="premier numero"/>
            <input id="lastNum" type="text" placeholder="dernier numero"/>
            <select id="type">
                <option value="1">Manga</option>
                <option value="2">Comics</option>
                <option value="3">Figure</option>
                <option value="4">BD</option>
                <option value="0">Autre</option>
            </select>
            <select id="category">
                <option value="1">aventure</option>
                <option value="0">autre</option>
            </select>
            <select id="author">
                <option value="1">auteur 1</option>
                <option value="0">autre</option>
            </select>
            <input type="button" onclick="register_item()" value="enregistrer"/>
        </div>
</body>
</html>

