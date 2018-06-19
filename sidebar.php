<?php
/*
 * @author Sharon Lagat
 * @googleplus https://plus.google.com/sharonlagat/
 */

$page_id = $pageDetails["page_id"];
if ($_GET["id"] <> "") {
    // if we are on page.php page. get the parent id and fetch their related subpages
    $sql = "SELECT * FROM " . TABLE_PAGES . " WHERE status = 'A' AND parent = :parent ORDER BY sort_order ASC";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":parent", db_prepare_input($pageDetails["parent"]));
        $stmt->execute();
        $pagesResults = $stmt->fetchAll();
    } catch (Exception $ex) {
       echo errorMessage($ex->getMessage());
    }

} elseif ($page_id <> "") {
    // On any other Page get the page id and fetch their related subpages
   $sql = "SELECT * FROM " . TABLE_PAGES . " WHERE status = 'A' AND parent = :parent ORDER BY sort_order ASC";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":parent", db_prepare_input($page_id));
        $stmt->execute();
        $pagesResults = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo errorMessage($ex->getMessage());
    }
   
}
?>
<div class="3u">
    <?php
    if (count($pagesResults) > 0) {
        ?>
        <section>
            <h2>sub pages</h2>

            <div>
                <div class="row">
                    <div class="12u">
                        <ul class="link-list">
                            <?php foreach ($pagesResults as $rs) { ?>
                                <li><a href="page.php?id=<?php echo easy_crypt($rs["page_alias"]); ?>"><?php echo stripslashes($rs["page_title"]); ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>




                </div>
            </div>
        </section>

    <?php } ?>


    <section>
        <h2>Creator on Google Plus</h2>
        <div>
            <div class="row">
                <div class="12u">
                    <div class="g-person" data-href="https://plus.google.com/u/0/103810201937989282926"  data-rel="author" data-layout="landscape"></div>
                </div>
            </div>
        </div>
    </section>



    <section>

        <div>
            <div class="row">
                <div class="12u">
                    <!-- Place this tag where you want the widget to render. -->
                    <div class="g-page" data-width="299" data-href="//plus.google.com/u/0/103810201937989282926" data-layout="landscape" data-rel="publisher"></div>

                    <!-- Place this tag after the last widget tag. -->
                    <script type="text/javascript">
                        (function() {
                            var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/platform.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                        })();
                    </script>

                </div>

            </div>
        </div>
    </section>
</div>
