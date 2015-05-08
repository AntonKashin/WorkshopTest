<div class="container"> 
	<h3>List of Questions</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>No</td>
                <td>Question</td>
                <td>Time</td>
                <td>Status</td>
				<td>Approve</td>
				<td>Reject</td>
                <td>Done</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($editQuestions as $question) { ?>
                <tr>
                    <td><?php if (isset($question->Id)) echo htmlspecialchars($question->Id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($question->Question)) echo htmlspecialchars($question->Question, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($question->StartTime)) echo htmlspecialchars($question->StartTime, ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php if (isset($question->Status)) echo htmlspecialchars($this->model->translateStatus($question->Status), ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($question->Id)) echo "<a href=\"" . URL . 'moderator/approve/' . htmlspecialchars($question->Id, ENT_QUOTES, 'UTF-8') . "\">approve</a>"; ?></td>
										<td><?php if (isset($question->Id)) echo "<a href=\"" . URL . 'moderator/done/' . htmlspecialchars($question->Id, ENT_QUOTES, 'UTF-8') . "\">done</a>"; ?></td>
                    <td><?php if (isset($question->Id)) echo "<a href=\"" . URL . 'moderator/reject/' . htmlspecialchars($question->Id, ENT_QUOTES, 'UTF-8') . "\">reject</a>"; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</div>