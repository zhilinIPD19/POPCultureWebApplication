<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;

/**
 * Popsicles Controller
 *
 * @property \App\Model\Table\PopsiclesTable $Popsicles
 * @method \App\Model\Entity\Popsicle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PopsiclesController extends AppController
{
   // public function beforeFilter(EventInterface $event){
     //   $this->viewBuilder()->setLayout('admin');
   // }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Flavours'],['Categories'],
        ];
        $popsicles = $this->paginate($this->Popsicles);
        $this->set(compact('popsicles'));
    }

    /**
     * View method
     *
     * @param string|null $id Popsicle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $popsicle = $this->Popsicles->get($id, [
            'contain' => ['Flavours', 'Categories'],
        ]);
        $categories = $this->Popsicles->Categories->find('list', [
            'keyField' => 'id',
            'valueField' => 'category'
        ],['limit' => 200]);
      
        $this->set(compact('popsicle','categories'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $popsicle = $this->Popsicles->newEmptyEntity();
        if ($this->request->is('post')) {
            $popsicle = $this->Popsicles->patchEntity($popsicle, $this->request->getData());
            if(!$popsicle->getErrors){
                $image = $this->request->getData('image_file');
                $name = $image->getClientFileName();
    
                $targetPath = WWW_ROOT.'img'.DS.$name;
                if($name)
                $image->moveTo($targetPath);
                $popsicle-> image = $name;
            }
          

            if ($this->Popsicles->save($popsicle)) {
                $this->Flash->success(__('The popsicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The popsicle could not be saved. Please, try again.'));
        }
        $flavours = $this->Popsicles->Flavours->find('list',[
            'keyField' => 'id',
            'valueField' => 'flavour'
        ], ['limit' => 200]);
        $categories = $this->Popsicles->Categories->find('list', [
            'keyField' => 'id',
            'valueField' => 'category'
        ],['limit' => 200]);
        $this->set(compact('popsicle', 'flavours', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Popsicle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $popsicle = $this->Popsicles->get($id, [
            'contain' => ['Categories'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $popsicle = $this->Popsicles->patchEntity($popsicle, $this->request->getData());
            if ($this->request->is('post')) {
                $popsicle = $this->Popsicles->patchEntity($popsicle, $this->request->getData());
                if(!$popsicle->getErrors){
                    $image = $this->request->getData('image_file');
                    $name = $image->getClientFileName();
        
                    $targetPath = WWW_ROOT.'img'.DS.$name;
                    if($name)
                    $image->moveTo($targetPath);
                    $popsicle-> image = $name;
                }
            }
              
            if ($this->Popsicles->save($popsicle)) {
                $this->Flash->success(__('The popsicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The popsicle could not be saved. Please, try again.'));
        }
        $flavours = $this->Popsicles->Flavours->find('list',[
            'keyField' => 'id',
            'valueField' => 'flavour'
        ], ['limit' => 200]);
        $categories = $this->Popsicles->Categories->find('list', [
            'keyField' => 'id',
            'valueField' => 'category'
        ],['limit' => 200]);
        $this->set(compact('popsicle', 'flavours', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Popsicle id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $popsicle = $this->Popsicles->get($id);
        if ($this->Popsicles->delete($popsicle)) {
            $this->Flash->success(__('The popsicle has been deleted.'));
        } else {
            $this->Flash->error(__('The popsicle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
