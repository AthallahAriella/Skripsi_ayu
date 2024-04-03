<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Four Boxes</title>
<style>
  .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .box-row {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 5px;
  }

  .box {
    width: 100px;
    height: 100px;
    background-color: #549a44;
    margin: 20px;
    position: relative; /* Tambahkan ini */
  }

  .box-text {
    position: absolute;
    bottom: -20px; /* Sesuaikan dengan jarak yang diinginkan */
    width: 100%; /* Memastikan teks rata kiri-kanan */
    text-align: center;
  }
</style>
</head>
<body>
<div class="container">
  <div class="box-row">
    <p > {{ Session::get('role')}}</p>
    <div class="box"><div class="box-text">Fisik</div></div>
    <div class="box"><div class="box-text">Verbal</div></div>
  </div>
  <div class="box-row">
    <div class="box"><div class="box-text">Relasional</div></div>
    <div class="box"><div class="box-text">Cyberbullying</div></div>
  </div>
</div>
</body>
</html>


