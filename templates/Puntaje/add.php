<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Puntaje $puntaje
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Puntaje'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="puntaje form content">
            <?= $this->Form->create($puntaje) ?>
            <fieldset>
                <legend><?= __('Add Puntaje') ?></legend>
                <?php
                    echo $this->Form->control('usuario');
                    echo $this->Form->control('apertExp');
                    echo $this->Form->control('responsabilidad');
                    echo $this->Form->control('extraversion');
                    echo $this->Form->control('amabilidad');
                    echo $this->Form->control('establEmocional');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
