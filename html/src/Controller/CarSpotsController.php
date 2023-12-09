<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CarSpots Controller
 *
 * @property \App\Model\Table\CarSpotsTable $CarSpots
 * @method \App\Model\Entity\CarSpot[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarSpotsController extends AppController
{
    public $paginate = [
        'limit' => 25,
        'order' => ['CarSpots.id' => 'DESC'],
        'contain' => ['Users'],
    ];
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $carSpots = $this->paginate($this->CarSpots);

        $this->set(compact('carSpots'));
    }

    /**
     * View method
     *
     * @param string|null $id Car Spot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carSpot = $this->CarSpots->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('carSpot'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carSpot = $this->CarSpots->newEmptyEntity();
        if ($this->request->is('post')) {
            $carSpot = $this->CarSpots->patchEntity($carSpot, $this->request->getData());
            if ($this->CarSpots->save($carSpot)) {
                $this->Flash->success(__('The car spot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The car spot could not be saved. Please, try again.'));
        }
        $users = $this->CarSpots->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('carSpot', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Car Spot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carSpot = $this->CarSpots->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carSpot = $this->CarSpots->patchEntity($carSpot, $this->request->getData());
            if ($this->CarSpots->save($carSpot)) {
                $this->Flash->success(__('The car spot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The car spot could not be saved. Please, try again.'));
        }
        $users = $this->CarSpots->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('carSpot', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Car Spot id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carSpot = $this->CarSpots->get($id);
        if ($this->CarSpots->delete($carSpot)) {
            $this->Flash->success(__('The car spot has been deleted.'));
        } else {
            $this->Flash->error(__('The car spot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
