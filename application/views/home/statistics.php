<div class="container">
       <h3>Q&A Statistics</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>No</td>
                <td>Question</td>
                <td>Time</td>
                <td>Status</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($questions as $question) { ?>
                <tr>
                    <td><?php if (isset($question->Id)) echo htmlspecialchars($question->Id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($question->Question)) echo htmlspecialchars($question->Question, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($question->StartTime)) echo htmlspecialchars($question->StartTime, ENT_QUOTES, 'UTF-8'); ?></td>
					<td><?php if (isset($question->Status)) echo htmlspecialchars($this->model->translateStatus($question->Status), ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</div>