<?php
/*
 * @author Sharon Lagat
 * @googleplus https://plus.google.com/sharonlagat/
 */

require("libs/config.php");
$page = easy_decrypt($_GET["id"]);
$pageDetails = getPageDetailsByName($page);
include("header.php");
?>
    <link rel="manifest" href="manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="row main-row">

    <div class="column">


        <section class="left-content">
             <h2><?php echo stripslashes($pageDetails["page_title"]); ?></h2>
            <?php echo stripslashes($pageDetails["page_desc"]); ?>
        </section>
    
    </div>


    <!--sidebar starts-->
	<?php
	include("sidebar.php");
	?>    
    <!--sidebar ends-->
</div>
<?php
include("footer.php");
?>
