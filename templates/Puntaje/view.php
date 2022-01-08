<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Puntaje $puntaje
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Puntaje'), ['action' => 'edit', $puntaje->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Puntaje'), ['action' => 'delete', $puntaje->id], ['confirm' => __('Are you sure you want to delete # {0}?', $puntaje->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Puntaje'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Puntaje'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="puntaje view content">
            <h3><?= h($puntaje->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($puntaje->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($puntaje->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApertExp') ?></th>
                    <td><?= $this->Number->format($puntaje->apertExp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsabilidad') ?></th>
                    <td><?= $this->Number->format($puntaje->responsabilidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Extraversion') ?></th>
                    <td><?= $this->Number->format($puntaje->extraversion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amabilidad') ?></th>
                    <td><?= $this->Number->format($puntaje->amabilidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('EstablEmocional') ?></th>
                    <td><?= $this->Number->format($puntaje->establEmocional) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
