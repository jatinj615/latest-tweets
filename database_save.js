
function saveDatabase(i){
    var url =  $("#url"+i+"").attr('src');
    var text = $("#tweet"+i+"").text();
    $.post('database.php',{
        txt : text,
        img_url : url
    },function(data,status){
        console.log(data);
    })
}
