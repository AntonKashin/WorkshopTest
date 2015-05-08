<?php


class Listener extends Controller
{

    public function index()
    {
        require APP . 'views/_templates/header.php';
		
		if (isset($_POST["submit_question"])) {
            $this->model->submitQuestion($_POST["question"]);
			require APP . 'views/home/success.php';
        } else {
			require APP . 'views/home/submit.php';
		}
		
		require APP . 'views/_templates/footer.php';
    }
}
