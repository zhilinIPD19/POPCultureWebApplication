<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Flavours Controller
 *
 * @property \App\Model\Table\FlavoursTable $Flavours
 * @method \App\Model\Entity\Flavour[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlavoursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $flavours = $this->paginate($this->Flavours);

        $this->set(compact('flavours'));
    }

    /**
     * View method
     *
     * @param string|null $id Flavour id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flavour = $this->Flavours->get($id, [
            'contain' => ['Popsicles'],
        ]);

        $this->set(compact('flavour'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flavour = $this->Flavours->newEmptyEntity();
        if ($this->request->is('post')) {
            $flavour = $this->Flavours->patchEntity($flavour, $this->request->getData());
            if ($this->Flavours->save($flavour)) {
                $this->Flash->success(__('The flavour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flavour could not be saved. Please, try again.'));
        }
        $this->set(compact('flavour'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flavour id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flavour = $this->Flavours->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flavour = $this->Flavours->patchEntity($flavour, $this->request->getData());
            if ($this->Flavours->save($flavour)) {
                $this->Flash->success(__('The flavour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flavour could not be saved. Please, try again.'));
        }
        $this->set(compact('flavour'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flavour id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flavour = $this->Flavours->get($id);
        if ($this->Flavours->delete($flavour)) {
            $this->Flash->success(__('The flavour has been deleted.'));
        } else {
            $this->Flash->error(__('The flavour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
