<?php 

namespace App\Controller;
use Cake\ORM\Messages;
use Cake\ORM\Popsicles;
use Cake\ORM\Categories;
use Cake\ORM\Flavours;


class PopCultureController extends AppController{
    public function index(){
       
        $this->viewBuilder()->setLayout('home');
    }
    public function contact(){
       
        $this->viewBuilder()->setLayout('home');
       
        $messagesTable = $this->getTableLocator()->get('Messages');
        $message = $messagesTable->newEmptyEntity();
        if ($this->request->is('post')) {
            $message = $messagesTable->patchEntity($message, $this->request->getData());
            if ($messagesTable->save($message)) {
                $this->Flash->success(__('The message has been saved.'));
                //mail("linzhilin0@gmail.com","hello","hello","zhilin.lin@yahoo.com");
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message'));
    }
    public function list(){
        $this->viewBuilder()->setLayout('home');
        $this->paginate = [
            'contain' => ['Flavours'],['Categories'],
        ];
        $popsicles = $this->paginate($this->getTableLocator()->get('Popsicles'));
        $this->set(compact('popsicles'));
    }
   
}
