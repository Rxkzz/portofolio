<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    @include('nav')

    <br><br>
    <h2 class="text-center">My Project</h2>
    <br><br><br><br>
    <div class="row row-cols-1 row-cols-md-5 g-4 justify-content-center">
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('travel.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Web Travel</h5>
        <p class="card-text">bisa kalian lihat untuk source codenya dengan kliik dibawah ini</p>
        <a href="https://github.com/Rxkzz/Web-Travel"><button type="button" class="btn btn-outline-secondary">--></button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="C.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">C++</h5>
        <p class="card-text">bisa kalian lihat untuk source codenya dengan kliik dibawah ini</p>
        <a href="https://github.com/Rxkzz/Web-Travel"><button type="button" class="btn btn-outline-secondary">--></button></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('php.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PHP</h5>
        <p class="card-text">bisa kalian lihat untuk source codenya dengan kliik dibawah ini</p>
        <a href="https://github.com/Rxkzz/PHP"><button type="button" class="btn btn-outline-secondary">--></button></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('python.jpeg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Python</h5>
        <p class="card-text">bisa kalian lihat untuk source codenya dengan kliik dibawah ini</p>
        <a href="https://github.com/Rxkzz/Web-Travel"><button type="button" class="btn btn-outline-secondary">--></button></a>
      </div>
      
    </div>
  </div>
</div>

    <style>
        body{
            background: #F1F0E8;
        }

        .card {
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

.card.fade-in {
  opacity: 1;
}

    </style>
    <script>
  // Fungsi ini akan dipanggil saat halaman dimuat (refresh)
  window.addEventListener('load', function() {
    var cards = document.querySelectorAll('.card');

    // Menambahkan kelas "fade-in" ke semua elemen dengan kelas "card"
    cards.forEach(function(card) {
      card.classList.add('fade-in');
    });
  });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>