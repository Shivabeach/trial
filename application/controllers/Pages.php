<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

  }

  public function index()
  {
    $data['title'] = "Page 1";
    $data["head"] = "Page One";
    $this->load->view("header/header", $data);
    $this->load->view("pages/prime", $data);
    $this->load->view("footer/footer");
  }




} //end of file