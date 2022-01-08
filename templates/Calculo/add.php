<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculo $calculo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Calculo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calculo form content">
            <?= $this->Form->create($calculo) ?>
            <fieldset>
                <legend><?= __('Add Calculo') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellido');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('genero');
                    echo $this->Form->control('edad');
                    echo $this->Form->control('responsabilidad');
                    echo $this->Form->control('extraversion');
                    echo $this->Form->control('amabilidad');
                    echo $this->Form->control('estabemocional');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
