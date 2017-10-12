
// Phone Number and Open Hours
$.getJSON('https://www.algaecal.com/wp-json/acf/v2/options', function(data) {
  
  // phone number
  var get_phone = data.acf.default_phone_number;
  $("#phone-number").text(get_phone);
  $("#phone-number").attr("href", "tel:" + get_phone.replace(/\D/g,'') );
  
  // check if open hours
  var get_office_hours = data.acf.office_hours;
  
  // get current day & time
  var get_date = new Date();
  var get_day = today.getDay();
  //var get_time = ;
  
});

