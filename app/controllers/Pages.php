<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'title' => 'Welcome to the website',
      'description' => 'This is the description'
    ];

    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us',
      'description' => 'This is the about page'
    ];

    $this->view('pages/about', $data);
  }
}
