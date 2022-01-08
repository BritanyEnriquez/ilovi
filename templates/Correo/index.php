<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Correo[]|\Cake\Collection\CollectionInterface $correo
 */
?>
<div class="correo index content">
    <?= $this->Html->link(__('New Correo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Correo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('emisor') ?></th>
                    <th><?= $this->Paginator->sort('receptor') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($correo as $correo): ?>
                <tr>
                    <td><?= $this->Number->format($correo->id) ?></td>
                    <td><?= h($correo->emisor) ?></td>
                    <td><?= h($correo->receptor) ?></td>
                    <td><?= h($correo->descripcion) ?></td>
                    <td><?= h($correo->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $correo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $correo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $correo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $correo->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    <td class="actions">
                        <?= $this->Html->link(__('Menu Principal'), [
                        'controller' => 'puntaje',
                        'action' => 'inicio'
                    ]) ?>
                    
                        
                    </td>
</div>
