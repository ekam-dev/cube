<?php
$this->extend('index');
?>

<div class="row justify-content-center">
    <div class="col-xl-8 col-lg-8 shadow-lg p-5 border-top border-warning border-2">
        <div class="my-3">
            <h3 class="fw-bold text-capitalize">new credentials</h3>
        </div>
        <div>
            <?= $this->Form->create($panel, ['type' => 'file']) ?>
            <div class="row mb-5">
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->control('app_name', ['class' => 'form-control', 'required' => false, 'autocomplete' => 'off']) ?>
                </div>
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->control('username', ['class' => 'form-control', 'required' => false, 'autocomplete' => 'off']) ?>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->control('password', ['class' => 'form-control', 'required' => false, 'autocomplete' => 'off']) ?>
                </div>
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->control('url', ['class' => 'form-control', 'required' => false, 'autocomplete' => 'off']) ?>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->control('public_key', ['class' => 'form-control', 'required' => false, 'autocomplete' => 'off']) ?>
                </div>
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->control('secret_key', ['class' => 'form-control', 'required' => false, 'autocomplete' => 'off']) ?>
                </div>
                <div class="col-xxl-12 col-lg-12 col-12">
                    <?= $this->Form->control('api_key', ['class' => 'form-control', 'required' => false, 'autocomplete' => 'off']) ?>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->label('simple_file') ?>
                    <?= $this->Form->file('simple_file', ['class' => 'form-control']) ?>
                </div>
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->label('pdf_file') ?>
                    <?= $this->Form->file('pdf_file', ['class' => 'form-control']) ?>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xxl-6 col-lg-6 col-6">
                    <?= $this->Form->submit('save', ['class' => 'btn btn-danger rounded-0 fw-bold']) ?>
                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>