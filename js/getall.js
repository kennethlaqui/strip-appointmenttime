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
	alert('success in getting all data');
   }
  });   
 }
 
 getAll();
 // function to get all records from table
 
 
 // code to get all records from table via select box
 $("#getlocation").change(function()
 {    
  var id = $(this).find(":selected").val();
 
  var dataString = 'action='+ id ;
    
  $.ajax
  ({
   url: 'getlocation.php',
   data: dataString,
   cache: false,
   success: function(r)
   {
    $("#display").html(r);
	alert('success in getting other locations');
   } 
  });
 })
 
 /*
 $("#dayofweek").change(function()
 {    
  var dayofweekval = $(this).find(":selected").val();

  var dataStringdy = 'dayofweek='+ dayofweekval;
    
  $.ajax
  ({
   url: 'getlocation.php',
   data: dataStringdy,
   cache: false,
   success: function(r)
   {
    $("#display").html(r);
	alert('success in day of week');
   },
   error: function(){
	alert('failed to connect in dayofweek');
   }
  });
 })
 */
 
 

 // code to get all records from table via select box
});