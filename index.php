<?php
/*
 * @author Sharon Lagat
 * @googleplus https://plus.google.com/sharonlagat/
 */

require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);

include("header.php");
?>
    <link rel="manifest" href="manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="row main-row">
    <div class="9u">
        <section class="right-content">
            <img src="images/students.jpg" width="717" height="381"/>
        </section>
        <section class="left-content">
            <h2><?php echo stripslashes($pageDetails["page_title"]); ?></h2>
            <?php echo stripslashes($pageDetails["page_desc"]); ?>
        </section>

    </div>
    <!--sidebar starts-->
	<?php include("sidebar.php"); ?>    
    <!--sidebar ends-->
</div>
<?php
include("footer.php");
?>
