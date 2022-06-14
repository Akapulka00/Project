<?php
namespace Course\Controllers;

// /

use Course\Kernel\Controller;
use Course\Db\CourseDb;
class IndexController extends Controller
{
    private $mountainsDb;
    private $expeditionsDb;

  public function __construct(){
    $this->CourseDb = new CourseDb();

  }

    public function index(){


        echo $this->getTemplate('main.php');
    }
    public function zapis(){


        echo $this->getTemplate('zapis.php');
    }
    public function portfolio(){
        echo $this->getTemplate('portfolio.php');
    }
    public function otziv(){
        echo $this->getTemplate('otziv.php');
    }
    public function autification(){
        echo $this->getTemplate('autification.php');
    }
    public function admin_panel(){
        echo $this->getTemplate('admin_panel.php');
    }
}
