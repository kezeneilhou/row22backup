@if(Session::has('error'))
<script type="text/javascript">
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong! Please try again.',
});
</script>
@endif

@if(Session::has('profileStored'))
<script type="text/javascript">
  Swal.fire({
  icon: 'success',
  title: 'Great',
  text: 'Your profile has been updated successfully. Account will be activated on approval of DITC.',
});
</script>
@endif

@if(Session::has('applicationSubmitted'))
<script type="text/javascript">
  Swal.fire({
  icon: 'success',
  title: 'Great',
  text: 'Your application has been submitted, pending approval from DC.',
});
</script>
@endif
