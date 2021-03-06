<!-- <?php include('includes/header.php')?> -->
<?php include('test2.php')?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/style2.css" media="all" />

  <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
  <script src="script/jquery.backDetect.js"></script>
  <script src="script/back_button.js"></script>

  <!-- Adds the carousel to this file -->
  <title>Social Dynamics Lab-Policy Lab Pilot Testing</title>

<style>
</style>
</head>
<body>
    <div class="header" id="myHeader">
        <h2 style="margin-left:35%;">Instructions</h2>
    </div>

    <div class="wrapper" id="consent">
       <form action="political_id.php" method="post">

       <p>
           <strong>
             Please read each of the following items and check the box next to them. You will be able to continue once you have read and checked off each item.
           </strong>
       </p>
       <p>
         <input type="checkbox" class="item">
         You will see 22 statements about various political and cultural beliefs. 
       </p>

       <b>
         For each statement:
       </b>
       <p>

         <input type="checkbox" class="item">
         You will see the views of previous participants from each political
         party.
       </p>
       <p>
         <input type="checkbox" class="item">
         We will ask you to indicate whether you
         personally agree or disagree with the the statement.
       </p>
       <p>
         <input type="checkbox" class="item">
         PLEASE DO NOT PRESS THE BACK BUTTON ON YOUR BROWSER! This may
         erase your data, causing you to be unpaid for your participation.
       </p>
       <!-- <p>
        <input type="checkbox" class="item">
        At the end of the game, the player with the most accurate predictions
        will win $100, divided equally in case of ties.
      </p> -->

     <!-- <b>In addition:</b></br> -->



       <p>
         <b>When you have read these instructions, please check the box below
         and press continue:</b>
         <br/>

         <input type="checkbox" class="item">
         I have carefully read the instructions and am ready to continue
         with the test.
       </p>

           <input type="submit" class="button" id="submitButton" value="Continue" disabled>
        </form>
    </div>
</body>

<script type="text/javascript">
/**
 * This will enable the submit button if and only if ALL checklist form items
 * with the class name "item" are checked.
 */
var unselectedItems = $('.item').size();
$('.item').click((e) => {
    if (e.target.checked) {
        unselectedItems--;
    } else {
        unselectedItems++;
    }
    $('#submitButton').prop('disabled', unselectedItems !== 0);
});
</script>

</html>
