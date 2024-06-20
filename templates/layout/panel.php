<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($this->fetch('title')) ?></title>
    <?= $this->Html->css(['fastbootstrap.min', 'all.min']) ?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-lg-6 position-absolute">
                <?= $this->Flash->render() ?>
            </div>
        </div>
    </div>

    <?= $this->fetch('content') ?>

    <?= $this->Html->script(['fastbootstrap.min', 'clipboard.min', 'script']) ?>
</body>

</html>