<h3><?= __('BIENVENIDO') ?></h3>


<td class="actions">
<div class="side-nav">
                        <?= $this->Html->link(__('Mis Datos'),  [
                        'controller' => 'calculo',
                        'action' => 'perfil'
                    ]) ?>
                    </div>   
                    </td>

                    <td class="actions">
<div class="side-nav">
                        <?= $this->Html->link(__('Hacer Match'), [
                        'controller' => 'calculo',
                        'action' => 'juntar'
                    ]) ?>
                    </div>   
                    </td>

                    <td class="actions">
<div class="side-nav">
                        <?= $this->Html->link(__('Correo'), [
                        'controller' => 'correo',
                        'action' => 'menu'
                    ]) ?>
                     </div>   
                    </td>