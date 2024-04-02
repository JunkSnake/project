<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Факты о котиках</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="height: 200px;">
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Cat Fact</strong>
      <small>Сейчас</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="catFact" id="catFact">
      :D
    </div>
  </div>
</div>
<script src="js/bootstrap.js"></script>
<script>
fetch('https://catfact.ninja/fact')
    .then(response => response.json())
    .then(data => {
        document.getElementById('catFact').textContent = data.fact;
    })
    .catch(error => {
        console.error('Ошибка при получении данных:', error);
        document.getElementById('catFact').textContent = 'Ошибка при загрузке факта о котах.';
    });
</script>
</body>
</html>