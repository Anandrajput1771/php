<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
<input type="email"  id="email"/>
<button>check email</button>
<p></p>
<script>
    $(document).ready(function(){
        $("button").click(function () {
                var email = $("#email").val();
            $.ajax({
                url:"as.php?name=",
                type: "GET",
                data:{
                    email:email 
                }
                success: function(response){
                    alert(response);
                    $("p").html(response);
                    console.log(response);
                }
         } )
            
        });
    });
</script>
    
</body>
</html>