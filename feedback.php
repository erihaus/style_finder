<?php include("includes/init.php");
$title = "Feedback";
$show_first_feedback = FALSE;
$show_second_feedback = FALSE;

$show_form = TRUE;

$is_valid = TRUE;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $first_response = $_POST['first'];
  $second_response = $_POST['second'];
  $third_response = $_POST['third'];
  $fourth_response = $_POST['fourth'];
  if (empty($first_response)) {
    $show_first_feedback = TRUE;
    $is_valid = FALSE;
  }

  if (empty($second_response)) {
    $show_second_feedback = TRUE;
    $is_valid = FALSE;
  }
  $show_form = !$is_valid;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Feedback</title>
  <link rel="stylesheet" href="styles/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php include("includes/header.php"); ?>
  <table id="quiz">
    <tr>
      <td>

      </td>
      <td>
        <p> Let me know what you think of this website! Did you find it useful? <br>What would you like to see in the future?</p>

      </td>
      <td></td>
    </tr>
    <tr>
      <td>

      </td>
      <td>
        <?php if ($show_form) { ?>
          <?php if ($show_first_feedback) { ?>
            <p class="error"> Please select a value.</p>
          <?php } ?>

          <form action="feedback.php" method="post" novalidate>
            <label for="first">When looking for clothing, what do you care most about?</label><br><br>
            <input type="text" id="first" name="first" value="<?php echo htmlspecialchars($first_response) ?>" />
            <br><br>
            <?php if ($show_second_feedback) { ?>
              <p class="error"> Please select a value.</p>
            <?php } ?>
            <label for="second">Where will you buy clothing from in the future?</label><br><br>
            <input type="text" id="second" name="second" value="<?php echo htmlspecialchars($second_response) ?>" />

            <br><br>
            <label for="third">Do you know what your style is? If so, what is your style?</label><br><br>
            <input type="text" id="third" name="third" value="<?php echo htmlspecialchars($third_response) ?>" />
            <br><br>
            <label for="fourth">Let me know if you have any other feedback!</label><br><br>
            <input type="text" id="fourth" name="fourth" value="<?php echo htmlspecialchars($fourth_response) ?>" /> <br><br>
            <input type="submit" id="submit" />
          </form>
        <?php } else { ?>
          <div id="confirmation">
            <h1> Thank you for your feedback! </h1><br>
            <p>You entered:</p><br>
            <p class="bold">When looking for clothing, what do you care most about?</p>
            <p><?php echo htmlspecialchars($first_response); ?></p><br>
            <p class="bold">Where will you buy clothing from in the future?</p>
            <p><?php echo htmlspecialchars($second_response); ?></p><br>
            <p class="bold">Do you have a better sense of your style after visiting this website?</p>
            <p><?php echo htmlspecialchars($third_response); ?></p><br>
            <p class="bold">Let me know if you have any other feedback!</p>
            <p><?php echo htmlspecialchars($fourth_response); ?></p><br>
          </div>
        <?php } ?>

      </td>
      <td></td>
    </tr>
  </table>

  <?php include("includes/footer.php"); ?>
</body>

</html>
