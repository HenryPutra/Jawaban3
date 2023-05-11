$(document).ready(function () {
    $("#btnsearch").click(function (e) {
        var txtInput = $("#srchInv").val();
        $("#infoinvaccr").html("Nama Anda: " + txtInput);
        $.ajax({
            type: "POST",
            url: "https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtP",
            data: {
                input: txtInput
            },
            success: function (response) {
                var data = JSON.parse(response);
                var resultHtml = "<br/>Kode Barang: " + data.kode_barang + "<br/>" +
                    "Nama Barang: " + data.nama_barang + "<br/>" +
                    "Group Barang: " + data.group_barang + "<br/>" +
                    "Harga Jual: " + data.harga_jual + "<br/>" +
                    "Quantity: " + data.quantity + "<br/>";
                $("#infoinvaccr").html(resultHtml);
            }
        });
    });
});