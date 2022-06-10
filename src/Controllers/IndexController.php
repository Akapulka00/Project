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
}
