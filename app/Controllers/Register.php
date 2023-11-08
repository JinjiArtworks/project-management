<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\Company;
use App\Models\UserList;
use App\Models\LogActivity;
use Config\Services;

class Register extends BaseController
{
    protected $UserListModel;
    protected $LogActivityModel;
    protected $CompanyListModel;
    function __construct()
    {
        $this->UserListModel = new UserList();
        $this->LogActivityModel = new LogActivity();
        $this->CompanyListModel = new Company();
    }
    public function index()
    {
        $company = $this->CompanyListModel->findAll();
        $user = $this->UserListModel->findAll();

        $data = [
            'company' => $company,
        ];
        // dd($company);
        // return view('admin/userpengguna/v_addData', $data);
        return view('auth/register', $data);

    }

    public function registerAction()
    {
        $validation = Services::validation();
        $rules = [
            'namaUser' => [
                'label' => 'Name',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Name is required'
                ],
            ],
            'emailUser' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email is required'
                ],
            ],
            'passwordUser' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required'
                ],
            ],
            'statusUser' => [
                'label' => 'Status',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status is required'
                ],
            ]
        ];

        if (!$this->validate($rules)) {
            return $this->response->setStatusCode(422)->setJSON([
                'validations' => $validation->getErrors()
            ]);
        }

        $dataRaw = (array) $this->request->getVar();
        $requestData = [
            'username' => $dataRaw['namaUser'],
            'email' => strtolower($dataRaw['emailUser']),
            'password' => $dataRaw['passwordUser'],
            'status' => $dataRaw['statusUser'],
            'id_role' => $dataRaw['roleUser'],
        ];
        $user_id =  $this->UserListModel->insert($requestData);
        //save to history first
        $suserhistory = $this->UserListModel->find($user_id);
        $dataUserhistory = [
            'pages' => 'User',
            'activity' => 'Insert',
            'remark' => json_encode($suserhistory),
            'user_name' => session('userName')
        ];
        $this->LogActivityModel->insert($dataUserhistory);
        $data = [
            'status' => true,
            'data' => '',
            'message' => 'User saved successfully'
        ];
        return $this->response->setJSON($data);
    }

}
