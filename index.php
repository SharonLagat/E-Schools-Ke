<?php


require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);

include("header.php");
?>
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
     <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
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
    <script>
if('serviceWorker' in navigator) {
  navigator.serviceWorker
           .register('/sw.js')
           .then(function() { console.log("Service Worker Registered"); });
}
</script>
    <!--sidebar starts-->
	<?php include("sidebar.php"); ?>    
    <!--sidebar ends-->
</div>
<?php
include("footer.php");
?>
