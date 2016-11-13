<?php

namespace App\Controllers;

use App\Models\User;

class HomeController
{

    protected $response = ['response' => ['status' => 'error']];

    public function index(){
        $data = (new User())->getNotParents();
        foreach ($data as &$user)
        {
            $user['email'] .= $this->validatorEmail($user['email']);
        }
        return view('master', $data);
    }

    public function getParents()
    {
        if(isset($_POST['id']))
        {
            $data = (new User())->getParents($_POST['id']);
            foreach ($data as &$user)
            {
                $user['email'] .= $this->validatorEmail($user['email']);
            }
            $this->response['response']['status'] = 'success';
            $this->response['response']['data'] = $data;
        }
        else
        {
            $this->response['response']['message'] = 'Отсутствует id родителя в запросе';
        }
        return json($this->response);
    }

    public function validatorEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? ' (верно)' : ' (неверно)';
    }

}