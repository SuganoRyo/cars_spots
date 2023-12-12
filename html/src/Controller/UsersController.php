<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public $paginate = [
        'limit' => 25,
        'order' => ['id' => 'DESC']
    ];
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $image = $this->request->getData('image');
            $name = $image->getClientFilename();
            if ($name != '') {
                $path = WWW_ROOT . 'img/users-upload' . DS . $name;
                $image->moveTo($path);
                $user->image = 'users-upload/' . $name;
            }
            $user->name = $data['name'];
            $user->mail_address = $data['mail_address'];
            $user->password = $data['password'];

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $image = $data['image'];
            $name = $image->getClientFilename();
            if ($name != '') {
                $path = WWW_ROOT . 'img/users-upload' . DS . $name;
                $image->moveTo($path);
                $user->image = 'users-upload/' . $name;
            }
            if (!(new DefaultPasswordHasher())->check($data['password'], $user->password)) {
                $this->Flash->error(__('パスワードが正しくありません。もう一度試してください。'));
                return $this->redirect(['action' => 'index']);
            }
            if ($data['new-password'] != '') {
                $user->password = $data['new-password'];
            } else {
                $user->password = $data['password'];
            }
            $user->name = $data['name'];
            $user->mail_address = $data['mail_address'];
            if ($this->Users->save($user)) {
                $this->Flash->success(__('ユーザー情報を更新しました。'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('ユーザー情報の更新に失敗しました。もう一度試してください。'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            // ログインしていればログイン後の画面にリダイレクト
            $target = $this->Authentication->getLoginRedirect() ?? '/users/index';
            $this->redirect($target);
            $this->Flash->success(__('ログインしました。'));
        }
        // ログイン認証に失敗した場合はエラーを表示する
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('メールアドレスまたはパスワードが誤っています。'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $this->Authentication->logout();
        }
        $this->redirect(['controller' => 'Users', 'action' => 'login']);
        $this->Flash->success(__('ログアウトしました。'));
    }
}
