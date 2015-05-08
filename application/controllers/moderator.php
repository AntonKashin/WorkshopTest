<?php


class Moderator extends Controller
{

    public function index()
    {
		$editQuestions = $this->model->getAllActiveQuestions();
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/editlist.php';
        require APP . 'views/_templates/footer.php';
    }
	
	public function Approve($id)
    {
		$editQuestions = $this->model->setApproved($id);
		header('location: ' . URL . 'moderator/index');
    }
	
	public function Reject($id)
    {
		$editQuestions = $this->model->setRejected($id);
		header('location: ' . URL . 'moderator/index');
    }
	
	public function Done($id)
    {
		$editQuestions = $this->model->setAnswered($id);
		header('location: ' . URL . 'moderator/index');
    }
}
