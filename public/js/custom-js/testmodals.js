<script>
  document.getElementById('one').addEventListener('click', () => {
    $('#paymentSuccessModal').modal();
  })
  document.getElementById('two').addEventListener('click', () => {
    $('#paymentFailedModal').modal();
  })
</script>