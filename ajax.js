$(document).ready(function(){
    $("#search").click(function(){
        var token = $('#token').val();
        $.get("api_connection.php?search_query="+token,function(data,status){
            var obj = $.parseJSON(data);
            $.each(obj,function(key,value){
                console.log(value.url)
            });
        });
    });
});