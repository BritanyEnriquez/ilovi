<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculo[]|\Cake\Collection\CollectionInterface $calculo
 */
$rasgo = "";
?>

<h3><?= __('BUSQUEDA EXCLUSIVA') ?></h3>

<br/>
<label class="result">RESULTADO</label>

<span>La eleccion fue 
<?php
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['radio1']))
            {
                $rasgo = $_POST['radio1'];
                print $_POST['radio1'];
            }
            else if(!empty($_POST['radio2']))
            {
                $rasgo = $_POST['radio2'];
                print $_POST['radio2'];
            }
            else if(!empty($_POST['radio3']))
            {
                $rasgo = $_POST['radio3'];
                print $_POST['radio3'];
            }
            else if(!empty($_POST['radio4']))
            {
                $rasgo = $_POST['radio4'];
                print $_POST['radio4'];
            }
            else{
                print 'Necesita Seleccionar un valor';
            }
        }
        
        ?>
        </span>
<div class="calculo index content">
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

            <?php if ($calculo->$rasgo>=50) { ?>
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
                    
                    </td>
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
                        'controller' => 'puntaje',
                        'action' => 'inicio'
                    ]) ?>
                    
                        
                    </td>
</div>