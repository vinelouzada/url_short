<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL Encurtada</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f8ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }
    .container h1 {
      margin-bottom: 20px;
      color: #333333;
    }
    .container p {
      font-size: 18px;
      color: #333333;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Parabéns!</h1>
  <p>A URL foi encurtada com sucesso.</p>
  <p><?php echo "http://localhost:8080/" . $_GET["code"] ?></p>
</div>
</body>
</html>
