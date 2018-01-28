<!DOCTYPE html>
<html>
<head>
<script src="../assets/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#tombol").click(function(){
        //ganti id
        $.post("ganti_id.php",
        {
          id: $("#id").val(),
        },
        function(data,status){
          $("#id").val(data);
        });

        //alert
        $.post("post.php",
        {
          nama: $("#nama").val(),
          id: $("#id").val(),
        },
        function(data,status){
            alert(data);
        });
    });
});
</script>
</head>
<body>

<form>
    <input type="hidden" name="id" id="id" value="1">
    Nama
    <input type="text" name="nama" id="nama">
</form>
<button id="tombol">Send an HTTP POST request to a page and get the result back</button>

</body>
</html>
