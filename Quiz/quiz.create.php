<?php
  $submit_url = "../includes/quiz.inc.php";
  if (isset($_GET['uqid']))
    $submit_url = $submit_url."?uqid=".$_GET['uqid'];
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

<link rel="stylesheet" href="quiz_edit.css">

<script
src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>
<script type="text/javascript" src="quiz_creation.js"></script>

<!-- Quiz Editable -->
<div class="row m-5">
  <div class="col-6">
    <div class="form-name-container">
      <input type="text" form="form-editable" id="quiz-name" name="quiz-name" placeholder="Enter the Quiz Name" form="form-editable" required>
    </div>
    <form id="form-editable" action=<?php echo $submit_url ?> method="post" class="quiz-form" onsubmit="return validateQuiz();">
      <p id="form-editable-prompt" class="form-quiz-prompt">
        Get started by Clicking the 'Add Question' button
      </p>
      <div id="form-editable-buttons">
        <button type="button" id="add-question"> Add New Question </button>
        <button type="button" id="remove-question" hidden> Remove Last Question </button>
      </div>
      <div id="form-buttons">
        <input type="submit" name="save" value="Save">
      </div>
    </form>
  </div>

<!-- Quiz Preview -->
  <div class="col-6">
    <div class="sidenav">
    <form id="form-preview" class="quiz-form">
      <p id="form-preview-prompt" class="form-quiz-prompt">Add questions to see preview</p>
    </form>
  </div>
  </div>

</div>