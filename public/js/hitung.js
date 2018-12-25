$('#gerakan1, #gerakan2, #gerakan3').on('input',function() {
  var gerakan1 = parseInt($('#gerakan1').val());
  var gerakan2 = parseInt($('#gerakan2').val());
  var gerakan3 = parseInt($('#gerakan3').val());
  $('#total_gerakan').val(( (gerakan1 + gerakan2 + gerakan3) / 3 ? (gerakan1 + gerakan2 + gerakan3) / 3 : 0));
  var total_gerakan =  $('#total_gerakan').val();

  if(total_gerakan > 8.1 ){
  $('#gerakan').val(('A'));
  }
  else if (total_gerakan > 6.1){
  $('#gerakan').val(('B'));
  }
  else if (total_gerakan > 3){
  $('#gerakan').val(('C'));
  }
  else if (total_gerakan > 1){
  $('#gerakan').val(('D'));
  }
  else {
    $('#gerakan').val(('E'));
  }
});

$('#vokal1, #vokal2, #vokal3').on('input',function() {
  var vokal1 = parseInt($('#vokal1').val());
  var vokal2 = parseInt($('#vokal2').val());
  var vokal3 = parseInt($('#vokal3').val());
  $('#total_vokal').val(( (vokal1 + vokal2 + vokal3) / 3 ? (vokal1 + vokal2 + vokal3) / 3 : 0));
  var total_vokal =  $('#total_vokal').val();

  if(total_vokal > 8.1 ){
  $('#vokal').val(('A'));
  }
  else if (total_vokal > 6.1){
  $('#vokal').val(('B'));
  }
  else if (total_vokal > 3){
  $('#vokal').val(('C'));
  }
  else if (total_vokal > 1){
  $('#vokal').val(('D'));
  }
  else {
    $('#vokal').val(('E'));
  }
});

$('#n_sikap').on('input',function() {
  var n_sikap = parseInt($('#n_sikap').val());
  $('#total_sikap').val(( n_sikap ? n_sikap : 0));
  var total_sikap =  $('#total_sikap').val();

  if(total_sikap > 4 ){
  $('#sikap').val(('A'));
  }
  else if (total_sikap > 3){
  $('#sikap').val(('B'));
  }
  else if (total_sikap > 2){
  $('#sikap').val(('C'));
  }
  else if (total_sikap > 1){
  $('#sikap').val(('D'));
  }
  else {
    $('#sikap').val(('E'));
  }
});

$('#n_konsen').on('input',function() {
  var n_konsen = parseInt($('#n_konsen').val());
  $('#total_kosen').val(( n_konsen ? n_konsen : 0));
  var total_kosen =  $('#total_kosen').val();

  if(total_kosen > 4 ){
  $('#konsen').val(('A'));
  }
  else if (total_kosen > 3){
  $('#konsen').val(('B'));
  }
  else if (total_kosen > 2){
  $('#konsen').val(('C'));
  }
  else if (total_kosen > 1){
  $('#konsen').val(('D'));
  }
  else {
    $('#konsen').val(('E'));
  }
});
