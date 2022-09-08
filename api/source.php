$(function () {
    $.ajax({
        url: "data/source.json",
        dataType: 'json',
        type: 'get',
        cache: false,
        success: function (data) {
            /*console.log(data);*/
            $('#table').bootstrapTable({
                data: data
            });
        },
        error: function (d) {
            /*console.log("error");*/
            alert("404. Please wait until the File is Loaded.");
        }
    });
});