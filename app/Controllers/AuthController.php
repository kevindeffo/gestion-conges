<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $model->where('email', $email)->first();

        if ($user) {
            $pass = $user['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $session->set([ 'user_id' => $user['id'], 'name' => $user['name'], 'logged_in' => TRUE ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Mot de passe incorrect.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email non trouvé.');
            return redirect()->to('/login');
        }
    }

    public function forgotPassword()
    {
        $email = $this->request->getVar('email');
        $model = new UserModel();
        $user = $model->where('email', $email)->first();
        
        if ($user) {
            // Logique pour envoyer l'email de réinitialisation
            // Par exemple, générer un token de réinitialisation et l'envoyer par email
            return redirect()->to('/login')->with('msg', 'Lien de réinitialisation du mot de passe envoyé.');
        } else {
            return redirect()->to('/forgot-password')->with('msg', 'Email non enregistré.');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}