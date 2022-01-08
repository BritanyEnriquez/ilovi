<h3><?= __('BIENVENIDO Administrador') ?></h3>


<td class="actions">
<div class="side-nav">
                        <?= $this->Html->link(__('Usuarios'), [
                        'controller' => 'calculo',
                        'action' => 'index'
                    ]) ?>
                        
                     </div>   
                    </td>
                                            

                                        
<td class="actions">
<div class="side-nav">
<?= $this->Html->link(__('Datos'), [
                        'controller' => 'datos',
                        'action' => 'index'
                    ]) ?>
                        


<td class="actions">
<div class="side-nav">
                    <?= $this->Html->link(__('Correo'), [
                        'controller' => 'correo',
                        'action' => 'index'
                    ]) ?>
                     </div>   
                    </td>

                    <td class="actions">
<div class="side-nav">
                    <?= $this->Html->link(__('Busqueda Especifica'), [
                        'controller' => 'calculo',
                        'action' => 'nueva'
                    ]) ?>
                     </div>   
                    </td>