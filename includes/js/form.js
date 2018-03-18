var site = 'default';
function getssids(site){
  $.getJSON("api/getwlans.php?site=" + site, function(data) {
    $("#ssid").html('');
    $.each(data, function(){
      $("#ssid").append('<option value="'+ this[0] +'">'+ this[0] +' - '+ this[1] +'</option>')
    })
  })
};
function escape_string (string) {
  var to_escape = ['\\', ';', ',', ':', '"'];
  var hex_only = /^[0-9a-f]+$/i;
  var output = "";
  for (var i=0; i<string.length; i++) {
    if($.inArray(string[i], to_escape) != -1) {
      output += '\\'+string[i];
    } else {
      output += string[i];
    }
  }
  return output;
};
function generate (getsite, getssid) {
  $.getJSON("api/getwlan.php?site=" + getsite + "&ssid=" + getssid , function(data) {
    $.each(data, function(){
      var ssid = this[0];
      var hidden = false;
      if (this[1] == 'open') {
        var enc = 'nopass';
      } else if (this[1] == 'wpapsk') {
        var enc = 'WPA';
      } else if (this[1] == 'wep') {
        var enc = 'WEP';
      }
      if (enc != 'nopass') {
        var key = this[2];
      } else {
        var key = '';
      }
      var qrstring = 'WIFI:S:'+escape_string(ssid)+';T:'+enc+';P:'+escape_string(key)+';';
      if (hidden) {
        qrstring += 'H:true';
      }
      qrstring += ';';
      $('#qrcode').empty();
      $('#qrcode').qrcode(qrstring);
      $('#showssid').text('SSID: '+ssid);
      $('#save').show();
      $('#print').css('display', 'inline-block');
      var canvas = $('#qrcode canvas');
      if (canvas.length == 1) {
        var data = canvas[0].toDataURL('image/png');
        var e = $('#export');
        e.attr('href', data);
        e.attr('download', ssid+'-qrcode.png');
        e.css('display', 'inline-block');
      }
    })
  })
};
$(document).ready(function(){
  $.getJSON("api/getsites.php", function(data) {
    $("#sites").html('');
    $.each(data, function(){
      $("#sites").append('<option value="'+ this[0] +'">'+ this[1] +'</option>')
    })
  })
});
$(document).ready(function(){
  $("#sites").change(function() {
    getssids($( "#sites option:selected" ).val());
  });
  $("#ssid").change(function() {
    generate($( "#sites option:selected" ).val(), $( "#ssid option:selected" ).val());
  });
  $('[data-toggle="tooltip"]').tooltip();
});