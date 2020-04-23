function getEventList() {
  $.ajaxSetup({
    headers: {
      'Authorization': 'Bearer ZLTC23FXL5TM3SVDSEW5'
    }
  });
  $.getJSON("https://www.eventbriteapi.com/v3/organizations/1615706325/events/?order_by=start_asc&status=live&time_filter=current_future", function(data) {

      var HTMLstr = "";
      for (var i = 0; i < data.events.length; i++) {
        var name = data.events[i].name.text; //zrow[i].getAttribute("ows_ID")
        var descript = shorten(data.events[i].description.text, 300);

        var url = data.events[i].url;
        var start = new Date(data.events[i].start.utc);
        var end = new Date(data.events[i].end.utc);

        var options = { weekday: 'long', year: 'numeric', month: 'short', day: 'numeric', hour:"numeric", hour12:true};
        var optionsShort = {hour:"numeric", hour12:true};

        var dateStr = "";
        if (start.getFullYear() === end.getFullYear() && start.getMonth() === end.getMonth() && start.getDate() === end.getDate()){
          dateStr = start.toLocaleString("en-US", options) + " - " + end.toLocaleTimeString("en-US", optionsShort);
        }
        else{
          dateStr = start.toLocaleString("en-US", options) + " - " + end.toLocaleString("en-US", options)
        }


          HTMLstr += '<div class="col-sm-6 col-lg-4 mb-4"><div class="card shadow h-100"><div class="card-body d-flex flex-column"><h4 class="card-title">'+name+'</h4><p class="card-text">' + descript + '</p><div class="mt-auto"><h5>'+dateStr+'</h5><a class="btn btn-primary" href="'+url+'" target="_blank"">Learn More</a></div></div></div></div>';
      }

      $('#eventbriteStuff').html(HTMLstr);


    });

  }

  function shorten(str, maxLen, separator = ' ') {
    if (str.length <= maxLen) return str;
      return str.substr(0, str.lastIndexOf(separator, maxLen))+"...";
    }
