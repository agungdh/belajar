<!DOCTYPE html>
<html>
<head>
<script src="../assets/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#tombol").click(function(){
        $.post("post.php",
        {
          nama: $("#nama").val(),
          npm: $("#npm").val(),
          cinta: $("#cinta").val()
        },
        function(data,status){
            cinta: $("#cinta").val('ganti');
            alert(data);
        });
    });
});
</script>
</head>
<body>

<form>
    Nama
    <input type="text" name="nama" id="nama">
    <br>
    NPM
    <input type="text" name="npm" id="npm">
    <br>
    Cinta
    <input type="text" name="cinta" id="cinta">
</form>
<button id="tombol">Send an HTTP POST request to a page and get the result back</button>

</body>
</html>
