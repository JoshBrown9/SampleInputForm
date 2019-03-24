<!DOCTYPE html>
<html>
<head>
<script>
function formValidate() {
 var fname = document.forms["myForm"]["fname"].value;
 var lname = document.forms["myForm"]["lname"].value;
 var pos = document.forms["myForm"]["pos"].value;
 var phone = document.forms["myForm"]["phone"].value;
 var email = document.forms["myForm"]["email"].value;
 if (fname == "") {
    alert("First Name must be filled out");
    return false;
  }
 if(lname == ""){
    alert("Last Name must be filled out");
    return false;
}
if(pos == ""){
  alert("Position must be filled out");
  return false;
}
if(phone == ""){
  alert("Phone Number must be filled out");
  return false;
}
if(email == ""){
  alert("Email must be filled out");
  return false;
}
}
</script>
</head>
<body>
    <form name="myForm" action="assign2B.php" method="get" onsubmit="return formValidate()">
         First Name <input type="text" name="fname"><br>
         Last Name <input type="text" name="lname"><br>
         Position <input type="text" name="pos"><br>
        Phone Number <input type="text" name="phone"><br>
        Email <input type="text" name="email"><br>
        Active <input type="checkbox" name="active" value="on"><br>
        <input type="submit" value="submit">
    </form>
    </body>
</html>
