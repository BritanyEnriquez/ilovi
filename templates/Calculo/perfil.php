<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculo[]|\Cake\Collection\CollectionInterface $calculo
 */
?>
<div class="calculo index content">
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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($calculo as $calculo): ?>
                    <?php if ($calculo->nombre=='juan') { ?>
                    <section id="flash-area">
                    <div class="flash oswald">
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
                </tr>
                </div>
                </section>
                <?php } ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <td class="actions">
                        <?= $this->Html->link(__('Menu Principal'), [
                        'controller' => 'datos',
                        'action' => 'inicio'
                    ]) ?>
                    
                        
                    </td>
</div>