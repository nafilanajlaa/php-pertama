<?php
//1. variable publik/global
$x = 5;
function myText(){
    // jika x didalam sini maka alkan eror
    
}
myText();
echo "<br>nilai variable x adalah $x";
?>

<script>
    var publik;

    namaFungsi();

    function namaFungsi(){
        publik = "tetap publik tapi ini dengan nilai baru";
        console.log(publik);
    }

</script>

