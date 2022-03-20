<script type="text/javascript">
 var validNumber = new RegExp(/^\d*\.?\d*$/);
 var lastValid = document.getElementById('ho_mobile','so_mobile').value;
 function validate(elem) {
   if (validNumber.test(elem.value)) {
     lastValid = elem.value;
   } else {
     elem.value = lastValid;
   }
 }
</script>

<script type="text/javascript">
 var validAlpha = new RegExp(/^[a-zA-Z ]*$/);
 var lastValidA = document.getElementById('auth_person').value;
 function validateA(elem) {
   if (validAlpha.test(elem.value)) {
     lastValidA = elem.value;
   } else {
     elem.value = lastValidA;
   }
 }
</script>
<script>
  $( function() {
    $( ".datepicker" ).datepicker({
      dateFormat: 'dd-mm-yy',
      yearRange: '1980:2050',
      changeYear: true,
      changeMonth: true,
    });
  } );
 </script>
