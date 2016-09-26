$("document").ready(function(){

var url = 'https://www.bitcointoyou.com/api/ticker.aspx';

$.ajax({
   type: 'GET',
    url: url,
    async: false,
    jsonpCallback: 'ble',
    contentType: "application/json",
    dataType: 'jsonp',
    success: function(json) {
      console.log(json)
    },
    error: function(e) {
      console.log(e)
    }
});


})
