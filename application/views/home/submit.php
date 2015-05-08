<div class="container">
    <div>
        <h3>Submit a Question</h3>
        <form action="<?php echo URL; ?>listener" method="POST">
            <label>Question:</label>
            <input autofocus type="text" name="question" value="" required />
            <input type="submit" name="submit_question" value="Update" />
        </form>
    </div>
		<div class="prevent_refresh"></div>
</div>

