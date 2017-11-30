$(document).ready(function(){
    $("#search").click(function(){
        var token = $('#token').val();
        var url = encodeURIComponent(token);
        //console.log(url);
        $.get("api_connection.php?search_query="+url,function(data,status){
            var obj = $.parseJSON(data);
            var i = 0;
            var tweet_no = 1;
            // console.log(obj)
            $('#pagination-demo').twbsPagination({
                totalPages: 10,
                visiblePages: 10,
                next: 'Next',
                prev: 'Prev',
                onPageClick: function (event, page) {
                    tweet_no = (page-1)*10;
                    showTweets(tweet_no);
                }
            });
            //console.log(tweet_no);
            function showTweets(tweet_no){
            for(i=0;i<10;i++){
                // console.log(tweet_no);
                console.log(obj[tweet_no].text);  
                $("#tweet"+i+"").text(obj[tweet_no+i].text);
                $("#url"+i+"").attr("src",obj[tweet_no+i].url);
                $("#card"+i+"").addClass("card");
                $("#card-body"+i+"").addClass("card-body");
                $("#tweet"+i+"").addClass("card-text");
                $("#button"+i+"").addClass("btn-primary");
                $("#button"+i+"").text("Add to Queue");
                
            }   
            };           
        });
    });
});