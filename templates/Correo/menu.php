<h3><?= __('BIENVENIDO al menu') ?></h3>
<td class="actions">
<div class="side-nav">
                        <?= $this->Html->link(__('Correos Recibidos'),  [
                        'controller' => 'correo',
                        'action' => 'recibidos'
                    ]) ?>

</div>   
</td>

<td class="actions">
<div class="side-nav">
                        <?= $this->Html->link(__('Correos Enviados'), [
                        'controller' => 'correo',
                        'action' => 'enviados'
                    ]) ?>
</div>   
</td>

<td class="actions">
<div class="side-nav">
                        <?= $this->Html->link(__('Regresar'), [
                        'controller' => 'datos',
                        'action' => 'inicio'
                    ]) ?>
                    </div>   
</td>