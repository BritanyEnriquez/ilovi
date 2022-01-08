<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Correo $correo
 */
?>
<div class="row">
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
    <td class="actions">
                        <?= $this->Html->link(__('Regresar'), [
                        'controller' => 'correo',
                        'action' => 'menu'
                    ]) ?>
                    
                        
                    </td>
</div>