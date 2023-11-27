<?php
declare(strict_types=1);

namespace App\Controller;

class HomesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        // 未ログイン状態でアクセスを許可するアクションを指定
        $this->Authentication->addUnauthenticatedActions(['index']);
    }
    /**
     * Home method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
      
    }
}
