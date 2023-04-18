<?php
class Pages extends Controller
{
  public function __construct()
  {
    //
  }

  public function index()
  {
    $data = [
      'title' => 'Hello from products page.'
    ];

    $this->view('pages/index', $data);
  }

  public function new()
  {
    $data = [
      'title' => 'Hello from new product page'
    ];

    $this->view('pages/new', $data);
  }
}
