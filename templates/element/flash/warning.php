<?php

/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message warning" onclick="this.classList.add('hidden');"><?= $message ?></div>
 -->

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= $message ?>
    <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert" aria-label="Close"></button>
</div>