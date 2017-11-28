$(document).ready(function(){
    $("#search").click(function(){
        $.get("api_connection.php?search_query="+token,function(data,status){
            console.log(data);
        });
    });
});