$(document).ready(function() {
  $( "#birthday" ).datepicker();
    var cities = [  "ActionScript","AppleScript","Asp","JavaScript","Lisp","Perl","PHP","Python" ];
    $( "#city" ).autocomplete({source: cities });
}); 