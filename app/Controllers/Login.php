<?php

namespace App\Controllers;

use App\Libraries\MyToken;
use App\Controllers\BaseController;

use Config\Services;

class Login extends BaseController
{
    protected $UserListModel;
    protected $RolesModel;
    protected $AccessModel;
    function __construct()
    {
    }
    public function index()
    {
        // if (session('userId') != null)
        //     return redirect()->to(site_url('dashboard'));
        // else
            return view('auth/login');
    }

    public function loginAction()
    {
        $session = session();
        $model = model('App\Models\UserList');
        $modelName = 'UserList';
        $validation =  Services::validation();

        // $getIdAccecss = $this->RolesModel->findColumn('id_access');

        $emails = $model->findColumn('email');
        $emailsStr = '';
        foreach ($emails as $i => $email) {
            if ($i === 0) {
                $emailsStr .= $email;
            } else {
                $emailsStr .= ',' . $email;
            }
        }

        $rules = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|in_list[' . $emailsStr . ']',
                'errors' => [
                    'required' => "Email is required",
                    'in_list' => "Email is not exist"
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required'
                ],
            ]
        ];

        if (!$this->validate($rules)) {
            return $this->response->setStatusCode(422)->setJSON([
                'validations' => $validation->getErrors()
            ]);
        }

        $userEmail = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        // check password
        $userEmail = strtolower($this->request->getVar('email'));
        // $thisUser = $model->getWhere(['email' => $userEmail, 'access_fo' => '1'])->getFirstRow();
        $thisUser = $model->getWhere(['email' => $userEmail])->getFirstRow();
        if (!$thisUser) {
            return $this->response->setStatusCode(400)->setJSON([
                'message' => 'Failed login, user dont have permission to access this site'
            ]);
        } else {
            $isPasswordValid = password_verify($this->request->getVar('password'), $thisUser->password);
            if (!$isPasswordValid) {
                return $this->response->setStatusCode(400)->setJSON([
                    'message' => 'Wrong password'
                ]);
            } else {
                $dataForToken = [
                    'userId' => $thisUser->id_user,
                    'userEmail' =>  $thisUser->email,
                    'userName' =>  $thisUser->username,
                    'roles' =>  $thisUser->id_role,
                    'modelName' =>  $modelName,
                    'unusedCode' => strtotime('now'),
                    'logged_in'     => TRUE
                ];
                print_r($dataForToken);
                $session->set($dataForToken);
                $token = MyToken::generate($dataForToken);
                $update = $this->UserListModel->update($thisUser->id_user, ['token' => $token]);
                if (!$update) {
                    return $this->response->setStatusCode(400)->setJSON([
                        'message' => 'Failed login'
                    ]);
                }
                $thisUserNew = $model->getWhere(['email' => $this->request->getVar('email')])->getFirstRow();
                return $this->response->setJSON([
                    'data' => $thisUserNew
                ]);
            }
            // end check password
        }
    }

    public function logoutAction()
    {
        $session = session();
        $session->destroy();
        return redirect()->route('/');
    }
}
