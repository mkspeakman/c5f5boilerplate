<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<!-- left column content area -->

<div class="row">
    <div class="small-12 medium-4 columns">
        <?php
        $a = new Area('Sidebar');
        $a->display($c);
        ?>
    </div>
    <div class="small-12 medium-8 columns">
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
    </div>
</div>

<!-- left column content area -->

<?php $this->inc('elements/footer.php'); ?>
