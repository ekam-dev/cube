<?php

use Cake\Routing\Router;

?>
<div class="container">
    <div class="row">
        <div class="col-xxl-12 col-lg-12">
            <div class="mb-9">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="" href="<?= Router::url('/') ?>"> <i class="fa-brands fa-cpanel fa-5x text-dark"></i></a>
                    </div>
                    <div>
                        <?= $this->fetch('title_') ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?= $this->fetch('content') ?>

</div>