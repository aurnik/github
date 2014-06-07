


//dont ever delete this object or you will have serious problesm && dont add inside document.ready
var codropsEvents = {
 
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



