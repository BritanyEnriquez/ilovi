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
            <?= $this->Html->link(__('Edit Calculo'), ['action' => 'edit', $calculo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Calculo'), ['action' => 'delete', $calculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Calculo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Calculo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calculo view content">
            <h3><?= h($calculo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($calculo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido') ?></th>
                    <td><?= h($calculo->apellido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($calculo->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genero') ?></th>
                    <td><?= h($calculo->genero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($calculo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Edad') ?></th>
                    <td><?= $this->Number->format($calculo->edad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsabilidad') ?></th>
                    <td><?= $this->Number->format($calculo->responsabilidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Extraversion') ?></th>
                    <td><?= $this->Number->format($calculo->extraversion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amabilidad') ?></th>
                    <td><?= $this->Number->format($calculo->amabilidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estabemocional') ?></th>
                    <td><?= $this->Number->format($calculo->estabemocional) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
