<?php


class Home extends Controller
{

    public function index()
    {
        $questions = $this->model->getAllQuestions();
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/statistics.php';
        require APP . 'views/_templates/footer.php';
		
    }
}
