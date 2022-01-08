<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculo[]|\Cake\Collection\CollectionInterface $calculo
 */
?>
<div class="calculo index content">
    <?= $this->Html->link(__('New Calculo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Calculo') ?></h3>
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
                    <th><?= $this->Paginator->sort('responsabilidad') ?></th>
                    <th><?= $this->Paginator->sort('extraversion') ?></th>
                    <th><?= $this->Paginator->sort('amabilidad') ?></th>
                    <th><?= $this->Paginator->sort('estabemocional') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($calculo as $calculo): ?>
                <tr>
                    <td><?= $this->Number->format($calculo->id) ?></td>
                    <td><?= h($calculo->nombre) ?></td>
                    <td><?= h($calculo->apellido) ?></td>
                    <td><?= h($calculo->descripcion) ?></td>
                    <td><?= h($calculo->genero) ?></td>
                    <td><?= $this->Number->format($calculo->edad) ?></td>
                    <td><?= $this->Number->format($calculo->responsabilidad) ?></td>
                    <td><?= $this->Number->format($calculo->extraversion) ?></td>
                    <td><?= $this->Number->format($calculo->amabilidad) ?></td>
                    <td><?= $this->Number->format($calculo->estabemocional) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $calculo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calculo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculo->id)]) ?>
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
