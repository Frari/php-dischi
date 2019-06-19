var $ = require('jquery');


$(document).ready(function(){

  var source   = $('#template-disco').html();
  var template = Handlebars.compile(source);

  $.ajax({
    'url':'http://localhost:8888/php-dischi/data.php',
    'method':'GET',
    'success': function(data){
      var dischi = JSON.parse(data);
      for (var i = 0; i < dischi.length; i++) {
        var disco = dischi[i];
        var context = {
          copertina: disco['cover'],
          titolo: disco['titolo'],
          artista: disco['artista'],
          anno: disco['anno']
        };
        var html = template(context);
        $('container').append(html);
      }
    },
    'error': function(){
      alert('errore');
    }
  })
});
