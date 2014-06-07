


$.getJSON("http://www.google.com/calendar/feeds/p1c3rb7397rqf3jcgfmij6hp08@group.calendar.google.com/public/full?alt=json", function(calendar) {
    var codropsEvents = {
 	'MM-26-2014' :  '<span>Aurnik 3PM-5PM</span>',
 };
   
    var arr = calendar["feed"]["entry"];
    window.cal = arr;
    for (var i = 0; i < arr.length; i++) {
        if(arr[i]["gd$when"] != null) {
            var title = arr[i]["title"]["$t"];
            var date = arr[i]["gd$when"][0]["startTime"];
            date = date.substr(5,5) + "-" + date.substr(0,4);
         
            codropsEvents[date] = '<span>'+title+'</span>';
            
        }
    }
});


window.test = codropsEvents;
