
<?php
if($_POST["feedback"]) {
mail("begroupproject17@gmail.com", "feedback",
$_POST["feedback"]. "From:mahadevtamhanekar51@gmail.com");
}
?>