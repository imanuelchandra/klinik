var x = 1;

function cek(){
    $.ajax({
        url: "http://localhost/klinik/index.php/notifikasi/cekpesan",
        cache: false,
        success: function(msg){
           $("#notifikasi").html(msg);
        }
    });
    var waktu = setTimeout("cek()",3000);
}

$(document).ready(function(){
    cek();
    $("#pesan").click(function(){
        $("#loading").show();
        if(x==1){
            $("#pesan").css("background-color","#000000");
            x = 0;
        }else{
            $("#pesan").css("background-color","#000000");
            x = 1;
        }
        $("#info").toggle();
        $.ajax({
            url: "http://localhost/klinik/index.php/notifikasi/lihatpesan",
            cache: false,
            success: function(msg){
                $("#loading").hide();
                $("#konten-info").html(msg);
            }
        });

    });
    $("#content").click(function(){
        $("#info").hide();
        $("#pesan").css("background-color","#000000");
        x = 1;
    });
});