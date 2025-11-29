<?php
$datetime = date("Y-m-d h:i:s A"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Date & Time Button</title>
</head>
<body>

<button onclick="showDateTime()">Show Current Date & Time</button>

<script>
function showDateTime() {
    alert("Current Date & Time: <?php echo $datetime; ?>");
}
</script>

</body>
</html>
