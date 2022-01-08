<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dato[]|\Cake\Collection\CollectionInterface $datos
 */
?>
<div class="datos index content">
    <?= $this->Html->link(__('New Dato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Datos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellido') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('genero') ?></th>
                    <th><?= $this->Paginator->sort('edad') ?></th>
                    <th><?= $this->Paginator->sort('gustos') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $dato): ?>
                <tr>
                    <td><?= $this->Number->format($dato->id) ?></td>
                    <td><?= h($dato->nombre) ?></td>
                    <td><?= h($dato->apellido) ?></td>
                    <td><?= h($dato->descripcion) ?></td>
                    <td><?= h($dato->genero) ?></td>
                    <td><?= $this->Number->format($dato->edad) ?></td>
                    <td><?= h($dato->gustos) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dato->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dato->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dato->id)]) ?>
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
