<!DOCTYPE html>
<html>
<head>
    <title>Joblister</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <style>
  div {
    width: 500px;
  padding:25px;
    border: 5px solid gray;
    margin-top: 50px;
  margin-left: 450px;
  }
  
  button1 {
  background-color: #4CAF50;
    color: white;
  border: none;
    cursor: pointer;
  margin-left: 10;
  padding :9px;
  }
  
  </style>

</head>



<body>
<br>
<h1 style="text-align: center; font-family: HelveticaNeue">Login Admin</h1>
  <div>
   <form action="temploginserverad.php" method="post" >
    <h2 style="text-align: center;color: #1cbc9b;font-family: Helvetica Neue">Hello Admin</h2>
    User-Name: <input type="text" id="Name" autofocus="true" />
    <br><br>
    Password: <input type="password" id="pass"disabled="disabled"  />
    <br><br>
    <input type="submit" id="submit" name="submit" disabled="disabled" />

  </form>
  </div>
</body>

<script>
    $(document).ready(function () {
        $('#Name').on('input change', function () {
            if ($(this).val() == "admin") {
                $(this).prop('disabled',true);
                $('#pass').prop('disabled', false);
                 document.getElementById("pass").focus();  
            }
           
           
        });

         $('#pass').on('input change', function () {
           
                if($(this).val()=="admin")
                {
                   $(this).prop('disabled',true);
                    $('#submit').prop('disabled',false);
                }
            
           
        });





        


    });



</script>
</html>

