<?php
foreach($projects as $item) {
    ?>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card card-alt">
            <div class="card-main">
                <div class="card-inner">
                    <p class="card-heading text-alt">
                        <?php
                        echo $item->title
                        ?>
                    </p>
                    <p>
                        <?php
                        echo $item->summary
                        ?>
                    </p>
                </div>
                <div class="card-action">
                    <ul class="nav nav-list pull-right">
                        <li>
                            <a href="javascript:void(0)"><i class="material-icons">favorite_border</i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="material-icons">share</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
