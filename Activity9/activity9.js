
function changeSpeaker(jsonFile) {


     $.getJSON(jsonFile, function(data){
         $.each(data, function() {
             $.each(this, function(key, value) {
                $("#month").html(value.month);
                $("#title").html(value.title);
                $("#speaker").html(value.speaker);
                $("#image").attr("src", value.image);
                $("#text").html(value.text);
             });
         });
     });
}