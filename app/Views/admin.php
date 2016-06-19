<?= $this->layout('layouts/master'); ?>

<?php $this->start('title') ?>

Dashboard

<?php $this->stop() ?>

<!-- Navigation section
================================================== -->
<section style="background-color: indianred;" class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="http://www.codeburrow.com">
                <div id="logo" class="smoothScroll navbar-brand"></div>
            </a>
            <span> That's cool.. ? </span>
        </div>
    </div>
</section>


<div style="margin-bottom: 150px;" id="top" class="parallax-section">
</div>

<!-- Articles section
================================================== -->
<section style="margin-top: 150px;" id="articles" class="parallax-section">
    <div class="container">
        <div class="row">

            <?php foreach ($posts as $post) { ?>
                <!-- Section title
                ================================================== -->
                <div class="col-sm-12">
                    <div class="section-title">
                        <form action="/admin.php" method="post">
                            <h5 class="wow bounceIn"><input type="text" name="author" placeholder="<?php echo $post['author']; ?>"> </h5>
                            <h1 class="heading"><input type="text" name="title" placeholder="<?php echo $post['title']; ?>"></h1>
                            <hr>
                            <p><input type="text" name="content" placeholder="<?php echo $post['content']; ?>"></p>
                            <input type="submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>