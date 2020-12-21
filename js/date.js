var today = new Date(); 
var date = today.toJSON().slice(0, 10); 
var nDate = date.slice(8, 10) + '/' + date.slice(5, 7) + '/' + date.slice(0, 4); 
$('#date').val(nDate); 
  



