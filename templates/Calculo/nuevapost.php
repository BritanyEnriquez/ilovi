<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculo[]|\Cake\Collection\CollectionInterface $calculo
 * 
 */
$rasgo = "";
?>
<h3><?= __('BUSQUEDA EXCLUSIVA') ?></h3>
<h3><?= __('Seleccione el rasgo que desea buscar: ') ?></h3>

<br/>
<div> 
        <?php
        print $rasgo . 'AQUI ESTA EL RASGO ANTES';
        echo $this->Form->create(null,['type'=>'post','action'=>'/calculo/nueva']);
        echo $this->Form->radio('radio1',['responsabilidad'=>'responsabilidad']);
        echo $this->Form->radio('radio2',['extraversion'=>'extraversion']);
        echo $this->Form->radio('radio3',['amabilidad'=>' amabilidad']);
        echo $this->Form->radio('radio4',['estabemocional'=>' estabemocional']);
        echo $this->Form->submit('Buscar',['name'=>'submit']);
        echo $this->Form->end();

        if(isset($_POST['submit']))
        {
            if(!empty($_POST['radio1']))
            {
                $rasgo = $_POST['radio1'];
                print $rasgo . 'aqui esta el rasgo DESPEUS';
            }
            else if(!empty($_POST['radio2']))
            {
                $rasgo = $_POST['radio2'];
            }
            else if(!empty($_POST['radio3']))
            {
                $rasgo = $_POST['radio3'];
            }
            else if(!empty($_POST['radio4']))
            {
                $rasgo = $_POST['radio4'];
            }
            else{
                print 'Necesita Seleccionar un valor';
            }
        }
        
        ?>
    

    
    </form>
</div>
