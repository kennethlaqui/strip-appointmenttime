$(document).ready(function()
{  
 // function to get all records from table
 function getAll(){
  
  $.ajax
  ({
   url: 'getlocation.php',
   data: 'action=showAll',
   cache: false,
   success: function(r)
   {
    $("#display").html(r);
   }
  });   
 }
 
 getAll();
 // function to get all records from table
 
 
 // code to get all records from table via select box
 $("#getlocation").change(function()
 {    
  var id = $(this).find(":selected").val();
  
  var dataString = 'action='+ id;
 
    
  $.ajax
  ({
   url: 'getlocation.php',
   data: dataString,
   cache: false,
   success: function(r)
   {
    $("#display").html(r);
   } 
  });
 })
 
 
 
 $.ajax({
    type: 'POST',
    url: '../getlocation.php',
    success: function(result) {
        console.log(result);
        $('#apntdate').datetimepicker({
            format: 'DD/MM/YYYY - H:mm',
            minDate: new Date(),
            daysOfWeekDisabled: [result]
        });
    }
});
 // code to get all records from table via select box
});