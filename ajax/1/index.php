<!DOCTYPE html>
<html>
<head>
<script src="../assets/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.post("post.php",
        {
          nama: "AgungDH",
          npm: "15753003"
        },
        function(data,status){
            alert(data);
        });
    });
});
</script>
</head>
<body>

<button>Send an HTTP POST request to a page and get the result back</button>

</body>
</html>
