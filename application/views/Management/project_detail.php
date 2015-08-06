<div class="content">
    <div class="content-heading">
        <div class="container">
            <h1 class="heading">프로젝트</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-lg-offset-2">
                <section class="content-inner">
                    <h2 class="content-sub-heading"><?php echo $item->title ?></h2>
                    <p><?php echo $item->summary ?></p>
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <?php echo $item->content ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>