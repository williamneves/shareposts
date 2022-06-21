<?php

class Users extends Controller
{
  public function __construct()
  {
    // echo 'Users Class';
    $this->userModel = $this->model('User');
  }

  // Register User
  public function register()
  {
    // echo 'Register';
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

      // Init Data
      $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];
      // Validations
      // Validate name
      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter Name';
      }
      // Validate email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter Email';
      } else {
        // Check if email exists
        if ($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken';
        }
      }
      // Validate password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter Password';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must be at least 6 characters';
      }
      // Validate confirm password, and if they match
      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please confirm Password';
      } elseif ($data['password'] != $data['confirm_password']) {
        $data['confirm_password_err'] = 'Passwords do not match';
      }

      // Make sure errors are empty
      if (empty($data['name_err']) && empty($data['email_err'])  && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        
        // Hash password
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

        // Register User
        if($this->userModel->register($data)){
          redirect('users/login');
        }else{
          die('Something went wrong');
        }


      } else {
        // Load view with errors
        $this->view('users/register', $data);
      }
    } else {
      // Init Data
      $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Load View
      $this->view('users/register', $data);
    }
  }

  // Login User
  public function login()
  {
    // echo 'Login';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

      // Init Data
      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
      ];

      // Validate email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter Email';
      }
      // Validate password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter Password';
      }

      // Make sure errors are empty
      if (empty($data['email_err'])  && empty($data['password_err'])) {
        // Validate
        die('SUCCESS');
      } else {
        // Load view with errors
        $this->view('users/login', $data);
      }

    } else {
      // Init Data
      $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
      ];

      // Load View
      $this->view('users/login', $data);
    }
  }
}
