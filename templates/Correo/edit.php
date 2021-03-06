<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Correo $correo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $correo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $correo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Correo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="correo form content">
            <?= $this->Form->create($correo) ?>
            <fieldset>
                <legend><?= __('Edit Correo') ?></legend>
                <?php
                    echo $this->Form->control('emisor');
                    echo $this->Form->control('receptor');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
