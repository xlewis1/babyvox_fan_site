<?php
$facts = array(
    "Baby V.O.X stands for 'Baby Voices of Xpression'.",
    "They debuted in 1997 and helped pioneer the early Korean Wave across Asia!",
    "Their hit single 'Get Up' topped the Korean music charts in 1999.",
    "They were one of the first K-pop groups to hold concerts in China and Vietnam."
);

$selected_fact = $facts[rand(0, count($facts) - 1)];
?>
<!DOCTYPE html>
<html>
<head>
<title>✨ Random Fact ✨</title>
<style>
  body { background-color: #ECE9D8; font-family: "Comic Sans MS", sans-serif; margin: 10px; }
  .box { border: 2px outset #FFFFFF; padding: 10px; background-color: #FFF0F5; text-align: center; }
</style>
</head>
<body>

<div class="box">
  <font color="#000080" size="2"><b><?php echo $selected_fact; ?></b></font>
  <br><br>
  <button onclick="window.close()">Close Window</button>
</div>

</body>
</html>
