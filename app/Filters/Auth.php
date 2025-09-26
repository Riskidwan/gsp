<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                           ->with('error', 'Silakan login terlebih dahulu');
        }

        // Check if user account is still active (optional security check)
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find(session()->get('user_id'));
        
        if (!$user || $user['status'] !== 'active') {
            session()->destroy();
            return redirect()->to('/login')
                           ->with('error', 'Akun Anda tidak aktif');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here after request
    }
}