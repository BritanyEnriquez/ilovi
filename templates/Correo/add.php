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
            <?= $this->Html->link(__('List Correo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="correo form content">
            <?= $this->Form->create($correo) ?>
            <fieldset>
                <legend><?= __('Add Correo') ?></legend>
                <?php
                    echo $this->Form->control('emisor');
                    echo $this->Form->control('receptor');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <td class="actions">
                        <?= $this->Html->link(__('Regresar'), [
                        'controller' => 'calculo',
                        'action' => 'juntar'
                    ]) ?>
                    
                        
                    </td>
        </div>
    </div>
</div>
