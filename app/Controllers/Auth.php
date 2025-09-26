<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper('form');
    }

    public function login()
    {
        // Redirect if already logged in
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        $data = [
            'title' => 'Login - Admin Panel',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/login', $data);
    }

  public function loginProcess()
{
    $rules = [
        'username' => 'required|min_length[3]',
        'password' => 'required|min_length[6]'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    // ================== LOGIN ATTEMPTS CHECK ================== //
    $maxAttempts = 3;
    $lockoutTime = 30; // detik

    $attempts = session()->get('login_attempts') ?? 0;
    $lastAttempt = session()->get('last_attempt') ?? 0;
    $remainingLock = ($lastAttempt + $lockoutTime) - time();

    // Cek apakah masih terkunci
    if ($attempts >= $maxAttempts && $remainingLock > 0) {
        session()->setFlashdata('error', "Terlalu banyak percobaan gagal. Tunggu {$remainingLock} detik.");
        return redirect()->back()->withInput();
    }

    // Cek user
    $user = $this->userModel->getUserByUsername($username);

    if (!$user || !password_verify($password, $user['password'])) {
        // Tambah attempts
        session()->set('login_attempts', $attempts + 1);
        session()->set('last_attempt', time());

        $sisaPercobaan = $maxAttempts - ($attempts + 1);
        if ($sisaPercobaan <= 0) {
            session()->setFlashdata('error', "Akun terkunci selama {$lockoutTime} detik karena terlalu banyak salah.");
        } else {
            session()->setFlashdata('error', "Username atau password salah. Sisa percobaan: {$sisaPercobaan}");
        }
        return redirect()->back()->withInput();
    }

    // Reset attempts kalau berhasil
    session()->remove('login_attempts');
    session()->remove('last_attempt');

    if ($user['status'] !== 'active') {
        return redirect()->back()->withInput()->with('error', 'Akun Anda tidak aktif');
    }

    // Set session data
    $sessionData = [
        'user_id' => $user['id'],
        'username' => $user['username'],
        'role' => $user['role'],
        'permissions' => $this->userModel->getRolePermissions($user['role']),
        'isLoggedIn' => true
    ];
    session()->set($sessionData);

    $this->logActivity('Login', 'User logged in');
    return redirect()->to('/dashboard')->with('success', 'Login berhasil! Selamat datang ' . $user['username']);
}

    public function logout()
    {
        $this->logActivity('Logout', 'User logged out');
        
        session()->destroy();
        return redirect()->to('/login')
                       ->with('success', 'Logout berhasil');
    }

    protected function logActivity($action, $description)
    {
        // Optional: Log user activities
        log_message('info', "User Activity: " . session()->get('username') . " - $action: $description");
    }
}