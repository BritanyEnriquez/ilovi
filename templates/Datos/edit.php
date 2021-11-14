<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dato $dato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dato->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dato->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Datos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="datos form content">
            <?= $this->Form->create($dato) ?>
            <fieldset>
                <legend><?= __('Edit Dato') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellido');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('genero');
                    echo $this->Form->control('edad');
                    echo $this->Form->control('gustos');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
