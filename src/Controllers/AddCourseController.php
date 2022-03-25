<?php


namespace Course\Controllers;



use Course\Db\CourseDb;
use Course\Kernel\Controller;

class AddCourseController extends Controller
{
    private $CourseDb;

    public function __construct(){
        $this->CourseDb = new CourseDb();

    }

    public function showCake(){
        $data = ['cakes' => $this->CourseDb->getCakes()];
        echo $this->getTemplate('allcakes.php', $data);
    }
    public function formCake(){
        $data = ['cakes' => $this->CourseDb->getCakes()];
        echo $this->getTemplate('addCakes.php', $data);
    }
    public function addCake(){
        $post = $_POST;
        $title=$post['title'];
        $description=$post['description'];
        $price=$post['price'];
        if (!$this->CourseDb->addCake($title,$description,$price)) {
            echo 'Попробуйте позже';

        }
    }
    public function getCakeByID(){
        // $data = ['cakes' => $this->cakesDB->getCakes()];
        echo $this->getTemplate('getCake.php');

    }
    public function printcakeById(){
        $post = $_POST;
        $cakeId=$post['id'];
        $cake = $this->CourseDb->getCakeById($cakeId);
        if ($cake) {
            echo json_encode($cake);
        }else{
            echo json_encode('Тортика под таким номером нет');

        }


    }
    public function delCakeById(){
        $post = $_POST;
        $cakeId=$post['id'];

        $cake = $this->cakesDB->delCake($cakeId);

        echo "Данные успешно удалены";

    }



}
