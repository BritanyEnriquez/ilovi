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
                    <?php if ($correo->emisor=='juan'&&$correo->estado=='enviado') { ?>
                    <section id="flash-area">
                    <div class="flash oswald">
                <tr>
                    <td><?= $this->Number->format($correo->id) ?></td>
                    <td><?= h($correo->emisor) ?></td>
                    <td><?= h($correo->receptor) ?></td>
                    <td><?= h($correo->descripcion) ?></td>
                    <td><?= h($correo->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'vista', $correo->id]) ?>
                       </td>
                </tr>
                </div>
                </section>
                <?php } ?>
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
                        <?= $this->Html->link(__('Regresar'), [
                        'controller' => 'correo',
                        'action' => 'menu'
                    ]) ?>
                    
                        
                    </td>
</div>