<script>
var requestOptions = {
  method: 'GET',
  redirect: 'follow'
};

fetch("http://c9x.io/BrxAPI/api/read.php", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));

</script>