<html>
<head>
  <title>CSC578 AJAX PHP</title>
  <script>
    function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "<option>no suggestion</option>";
        return;
      }
      else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "gethint.php?q="+str, true);
        xmlhttp.send();
      }
    }
  </script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">Search:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
  <select id="txtHint">
    <option>No Suggestion</option>
  </select>
</form>
<!--<p>Suggestions: <span id="txtHint"></span></p>-->
</body>
</html>