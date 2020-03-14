

<p id="demo"></p>

<!DOCTYPE html>
<html>
<body>

<input type="text" name="users" id="users" onkeyup="myFunction()">
<p id="demo"></p>

<script>
function myFunction() {
var x = document.getElementById("users").value;
document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>