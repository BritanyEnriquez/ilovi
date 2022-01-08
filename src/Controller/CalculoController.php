<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Calculo Controller
 *
 * @property \App\Model\Table\CalculoTable $Calculo
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CalculoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $calculo = $this->paginate($this->Calculo);

        $this->set(compact('calculo'));
    }
    public function perfil()
    {
        $calculo = $this->paginate($this->Calculo);

        $this->set(compact('calculo'));
    }

    public function hacermatch()
    {
        $calculo = $this->paginate($this->Calculo);

        $this->set(compact('calculo'));
    }
    public function juntar()
    {
        $calculo = $this->paginate($this->Calculo);

        $this->set(compact('calculo'));
    }

    public function nueva()
    {
        $calculo = $this->paginate($this->Calculo);

        $this->set(compact('calculo'));
    }
    public function nuevapost()
    {
        $calculo = $this->paginate($this->Calculo);

        $this->set(compact('calculo'));
    }

    /**
     * View method
     *
     * @param string|null $id Calculo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function vista($id = null)
    {
        $calculo = $this->Calculo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('calculo'));
    }
    /**
     * View method
     *
     * @param string|null $id Calculo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $calculo = $this->Calculo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('calculo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $calculo = $this->Calculo->newEmptyEntity();
        if ($this->request->is('post')) {
            $calculo = $this->Calculo->patchEntity($calculo, $this->request->getData());
            if ($this->Calculo->save($calculo)) {
                $this->Flash->success(__('The calculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calculo could not be saved. Please, try again.'));
        }
        $this->set(compact('calculo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Calculo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $calculo = $this->Calculo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calculo = $this->Calculo->patchEntity($calculo, $this->request->getData());
            if ($this->Calculo->save($calculo)) {
                $this->Flash->success(__('The calculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calculo could not be saved. Please, try again.'));
        }
        $this->set(compact('calculo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Calculo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calculo = $this->Calculo->get($id);
        if ($this->Calculo->delete($calculo)) {
            $this->Flash->success(__('The calculo has been deleted.'));
        } else {
            $this->Flash->error(__('The calculo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
    // All registered users can add articles
    if (isset($user['role']) && $user['role'] === 'user') {
        return true;
    }
    return parent::isAuthorized($user);
    }
}
