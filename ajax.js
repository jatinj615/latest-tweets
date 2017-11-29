$(document).ready(function(){
    $("#search").click(function(){
        var token = $('#token').val();
        var url = encodeURIComponent(token);
        //console.log(url);
        $.get("api_connection.php?search_query="+url,function(data,status){
            //console.log(data)
            var obj = $.parseJSON(data);
            var i = 0;
            $.each(obj,function(key,value){
                $("#tweet"+i+"").text(value.text);
                $("#url"+i+"").attr("src",value.url);
                i++;
            });
        });
    });
});