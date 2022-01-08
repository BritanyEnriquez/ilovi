<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Correo Controller
 *
 * @property \App\Model\Table\CorreoTable $Correo
 * @method \App\Model\Entity\Correo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CorreoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $correo = $this->paginate($this->Correo);

        $this->set(compact('correo'));
    }
    public function menu()
    {
        $correo = $this->paginate($this->Correo);

        $this->set(compact('correo'));
    }

    public function bandeja()
    {
        $correo = $this->paginate($this->Correo);

        $this->set(compact('correo'));
    }

    public function recibidos()
    {
        $correo = $this->paginate($this->Correo);

        $this->set(compact('correo'));
    }

    public function enviados()
    {
        $correo = $this->paginate($this->Correo);

        $this->set(compact('correo'));
    }


    /**
     * View method
     *
     * @param string|null $id Correo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function vista($id = null)
    {
        $correo = $this->Correo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('correo'));
    }

    /**
     * View method
     *
     * @param string|null $id Correo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $correo = $this->Correo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('correo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $correo = $this->Correo->newEmptyEntity();
        if ($this->request->is('post')) {
            $correo = $this->Correo->patchEntity($correo, $this->request->getData());
            if ($this->Correo->save($correo)) {
                $this->Flash->success(__('The correo has been saved.'));

                return $this->redirect([
                    'controller' => 'calculo',
                    'action' => 'juntar'
                ]);
            }
            $this->Flash->error(__('The correo could not be saved. Please, try again.'));
        }
        $this->set(compact('correo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Correo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $correo = $this->Correo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $correo = $this->Correo->patchEntity($correo, $this->request->getData());
            if ($this->Correo->save($correo)) {
                $this->Flash->success(__('The correo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The correo could not be saved. Please, try again.'));
        }
        $this->set(compact('correo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Correo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $correo = $this->Correo->get($id);
        if ($this->Correo->delete($correo)) {
            $this->Flash->success(__('The correo has been deleted.'));
        } else {
            $this->Flash->error(__('The correo could not be deleted. Please, try again.'));
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
