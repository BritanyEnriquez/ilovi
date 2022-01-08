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
            <?= $this->Html->link(__('Edit Correo'), ['action' => 'edit', $correo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Correo'), ['action' => 'delete', $correo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $correo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Correo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Correo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="correo view content">
            <h3><?= h($correo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Emisor') ?></th>
                    <td><?= h($correo->emisor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receptor') ?></th>
                    <td><?= h($correo->receptor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($correo->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($correo->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($correo->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
