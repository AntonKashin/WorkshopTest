<div class="container">
       <h3>Question to Answer</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>No</td>
                <td>Question</td>
                <td>Time</td>
                <td>Done</td>
                <td>Reject</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php if (isset($activeQuestion->Id)) echo htmlspecialchars($activeQuestion->Id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($activeQuestion->Question)) echo htmlspecialchars($activeQuestion->Question, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($activeQuestion->StartTime)) echo htmlspecialchars($activeQuestion->StartTime, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($activeQuestion->Id)) echo "<a href=\"" . URL . 'reporter/done/' . htmlspecialchars($activeQuestion->Id, ENT_QUOTES, 'UTF-8') . "\">done</a>"; ?></td>
                    <td><?php if (isset($activeQuestion->Id)) echo "<a href=\"" . URL . 'reporter/reject/' . htmlspecialchars($activeQuestion->Id, ENT_QUOTES, 'UTF-8') . "\">reject</a>"; ?></td>
                </tr>
            </tbody>
        </table>
</div>