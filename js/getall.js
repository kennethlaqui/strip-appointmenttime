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
 
 $("#numericdayweek").change(function()
 {    
  var id = $(this).find("#getlocation").val();
  var numeric_date = $(this).find("#numericdayweek").val();
  var dataString = 'action='+ id ;
  var dataString_numeric = 'numericdayweek='+numeric_date;
  $.ajax
  ({
   url: 'getlocation.php',
   data: {dataString,
   dataString_numeric},
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