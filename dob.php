
<html>
<head>
</head>
<body>
<input aria-required="true" id="dobfield" class="form-control" required="" type="text" onclick="css()">
        <input type="text" id="age" class="form-control" required>
<script>
function GetAge(dateString) {
      var today = new Date();
      var birthDate = new Date(dateString);
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
          age--;
      }
      return age;
  }

  $(document).ready(function() {

      $("#dobfield").onblur(function() {
          var dob = $("#dobfield").val().trim();
          var calculatedDob = GetAge(dob);
          $("#age").text(calculatedDob);
      });
  })
</script>
</body>
</html>