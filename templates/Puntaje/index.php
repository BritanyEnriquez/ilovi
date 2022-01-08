<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Puntaje[]|\Cake\Collection\CollectionInterface $puntaje
 */
?>
<div class="puntaje index content">
    <?= $this->Html->link(__('New Puntaje'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Puntaje') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('usuario') ?></th>
                    <th><?= $this->Paginator->sort('apertExp') ?></th>
                    <th><?= $this->Paginator->sort('responsabilidad') ?></th>
                    <th><?= $this->Paginator->sort('extraversion') ?></th>
                    <th><?= $this->Paginator->sort('amabilidad') ?></th>
                    <th><?= $this->Paginator->sort('establEmocional') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($puntaje as $puntaje): ?>
                <tr>
                    <td><?= $this->Number->format($puntaje->id) ?></td>
                    <td><?= h($puntaje->usuario) ?></td>
                    <td><?= $this->Number->format($puntaje->apertExp) ?></td>
                    <td><?= $this->Number->format($puntaje->responsabilidad) ?></td>
                    <td><?= $this->Number->format($puntaje->extraversion) ?></td>
                    <td><?= $this->Number->format($puntaje->amabilidad) ?></td>
                    <td><?= $this->Number->format($puntaje->establEmocional) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $puntaje->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $puntaje->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $puntaje->id], ['confirm' => __('Are you sure you want to delete # {0}?', $puntaje->id)]) ?>
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
                       
                        <?= $this->Html->link(__('Menu Principal'), ['action' => 'inicio']) ?>
                        </td>
                        
</div>
