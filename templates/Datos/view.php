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
            <?= $this->Html->link(__('Edit Dato'), ['action' => 'edit', $dato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dato'), ['action' => 'delete', $dato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Datos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="datos view content">
            <h3><?= h($dato->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($dato->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido') ?></th>
                    <td><?= h($dato->apellido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($dato->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genero') ?></th>
                    <td><?= h($dato->genero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gustos') ?></th>
                    <td><?= h($dato->gustos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dato->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Edad') ?></th>
                    <td><?= $this->Number->format($dato->edad) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
