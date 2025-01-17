<?= $this->extend('_layout') ?>

<?= $this->section('title') ?>
<?= lang('Podcast.all_podcasts') ?>
<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<?= lang('Podcast.all_podcasts') ?> (<?= count($podcasts) ?>)
<?= $this->endSection() ?>

<?= $this->section('headerRight') ?>
<Button uri="<?= route_to('podcast-import') ?>" variant="secondary" iconLeft="download"><?= lang('Podcast.import') ?></Button>
<Button uri="<?= route_to('podcast-create') ?>" variant="primary" iconLeft="add"><?= lang('Podcast.create') ?></Button>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<div class="grid gap-4 grid-cols-cards">
    <?php if ($podcasts !== null): ?>
        <?php foreach ($podcasts as $podcast): ?>
            <?= view('podcast/_card', [
                'podcast' => $podcast,
            ]) ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="italic"><?= lang('Podcast.no_podcast') ?></p>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
