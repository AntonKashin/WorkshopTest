<?php

class Model
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllQuestions()
    {
        $sql = "SELECT Id, Question, Status, StartTime FROM QuestionQueue  order by Status, StartTime";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
	
	 public function getAllActiveQuestions()
    {
        $sql = "SELECT Id, Question, Status, StartTime FROM QuestionQueue WHERE Status != 3 order by StartTime";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function submitQuestion($question)
    {
        $sql = "INSERT INTO QuestionQueue (Question, StartTime, Status) VALUES (:question, NOW(), 0)";
        $query = $this->db->prepare($sql);
        $parameters = array(':question' => $question);
        $query->execute($parameters);
    }

    public function getActiveQuestion()
    {
        $sql = "SELECT Id, Question, Status, StartTime FROM QuestionQueue WHERE Status = 1 order by StartTime";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch();
    }

    private function updateQuestion($id, $status)
    {
        $sql = "UPDATE QuestionQueue SET Status = :status, StartTime = NOW() WHERE Id = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':status' => $status, ':id' => $id);
        $query->execute($parameters);

    }
	
	public function setAnswered($id)
    {
        $this->updateQuestion($id, 2);
    }
	public function setRejected($id)
    {
        $this->updateQuestion($id, 3);
    }
	public function setApproved($id)
    {
        $this->updateQuestion($id, 1);
    }
	
	public function translateStatus($id)
    {
		$statusName = Array(0=>"Submitted",  1=>"Approved", 2=>"Answered", 3=>"Rejected");
        return $statusName[$id];
    }
}
