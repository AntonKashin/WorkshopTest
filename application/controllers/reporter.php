<?php


class Reporter extends Controller
{

    public function index()
    {
		$activeQuestion = $this->model->GetActiveQuestion();
		require APP . 'views/_templates/header.php';
        require APP . 'views/home/activelist.php';
        require APP . 'views/_templates/footer.php';
    }
	
	public function Reject($id)
    {
		$editQuestions = $this->model->setRejected($id);
		header('location: ' . URL . 'reporter/index');
    }
	
	public function Done($id)
    {
		$editQuestions = $this->model->setAnswered($id);
		header('location: ' . URL . 'reporter/index');
    }
}
