$(document).ready(function () {
    $("#btnsearch").click(function (e) {
        var txtInput = $("#srchInv").val();
        $("#infoinvaccr").html("Nama Barang : " + txtInput);
        $.ajax({
            type: "POST",
            url: "/assets/scripts/ajax/getcurl.php",
            data: "",
            success: function (response) {
                $("#infoinvaccr").html("<br/>Response<br/> " + response);
            }
        });
    });
});