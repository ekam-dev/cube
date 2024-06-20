<?php
$this->extend('index');
?>

<div class="row justify-content-center">
    <div class="col-xxl-8 col-lg-8 col-md-8 shadow-lg p-8">
        <div>

        </div>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th class="fw-bolder">
                        App Name
                    </th>
                    <td class="text-capitalize">
                        <?= h($panel->app_name) ?>
                    </td>
                </tr>
                <tr>
                    <th class="fw-bolder">
                        Username/Email
                    </th>
                    <td>
                        <?= $panel->username ?>
                    </td>
                </tr>
                <tr>
                    <th class="fw-bolder">
                        Password
                    </th>
                    <td>
                        <?= $panel->password ?>
                    </td>
                </tr>
                <tr>
                    <th class="fw-bolder">
                        App Url
                    </th>
                    <td>
                        <?= $panel->url ? $this->Html->link($panel->url, $panel->link, ['target' => '_blank']) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th class="fw-bolder">
                        Public Key
                    </th>
                    <td>
                        <div class="input-group mb-3">
                            <span class="" id="pk"><?= $panel->public_key ?></span>
                            <button class="input-group-text ms-9 rounded-3 border-0" id="basic-addon2" data-clipboard-target="#pk"><i class="fa-solid fa-clipboard"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="fw-bolder">
                        Secrete Key
                    </th>
                    <td>
                        <div class="input-group mb-3">
                            <span class="" id="sk"><?= $panel->secret_key ?></span>
                            <button class="input-group-text ms-9 rounded-3 border-0 " id="basic-addon2" data-clipboard-target="#sk"><i class="fa-solid fa-clipboard"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="fw-bolder">
                        Apurli Key
                    </th>
                    <td>
                        <div class="input-group mb-3">
                            <span class="" id="apikey"><?= $panel->api_key ?></span>
                            <button class="input-group-text ms-9 rounded-3 border-0 " id="basic-addon2" data-clipboard-target="#apikey"><i class="fa-solid fa-clipboard"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="fw-bolder">
                        File
                    </th>
                    <td>
                        <?= $panel->file ? $this->Html->link($panel->file, $panel->file) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th class="fw-bolder">
                        Docs File
                    </th>
                    <td>
                        <?= $panel->docs_file ? $this->Html->link($panel->docs_file, $panel->dosc_file) : '' ?>
                    </td>
                </tr>

            </table>
        </div>
    </div>
</div>