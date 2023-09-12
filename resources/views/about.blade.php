<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    img{
      border-radius : 50%;
    }
    h1{
      padding: 10s%;
    }
    body{
      background: #F1F0E8;
    }
    .container{
      display: flex;
      justify-content: center;
    }
    .foto{
      padding-left: 20rem;
    }

    /* Animasi Keyframes */
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Gaya awal untuk elemen teks */
.animasi-gambar {
  opacity: 0; /* Mulai dengan keadaan tersembunyi */
  animation: fadeIn 1.5s ease-in-out forwards; /* Gunakan animasi fadeIn selama 1,5 detik */
}
.txt {
  overflow: hidden;
  position: relative;
}

.teranimasi {
  position: relative;
  animation: slideRightToLeft 2s ease-in-out infinite;
}

@keyframes slideRightToLeft {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(0);
  }
}

  </style>
</head>
<body>

  <br><br><br><br><br><br><br><br><br>
  <div class="container">
  <div class="row">
        <div class="col-lg-6 foto">
    <img src="{{asset('ak.jpg')}}" class="img-fluid animasi-gambar" alt="..." width="290" height="230">
    </div>
    <div class="col-lg-6 txt">
    <h1 class="text-start teranimasi" id="animated-text">こんにちは、リズキです</h1>
  <h2 class="text-start teranimasi">Designer, Backend Developer & Fotografer</h2>
  <p class="text-start teranimasi">I design and code beautifully simple things, and i love what i do</p>
  <button type="button" class="btn btn-secondary animasi-gambar">Check out my CV</button>
    </div>
    <h1 class="animasi-gambar">こんにちは</h1>
        <button onclick="typeWriter()" class="animasi-gambar">Click</button>
        <p id="typing"></p>
        <script>
            var i = 0;
            var txt = 'Welcome to My Portofolio';
            var speed = 50;
            
            function typeWriter() {
              if (i < txt.length) {
                document.getElementById("typing").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
              }
            }
        </script>


<style>
  .col-lg-6 {
    overflow: hidden;
    position: relative;
  }

  .text-start {
    position: relative;
    animation: slideRightToLeft 2s ease-in-out;
  }

  @keyframes slideRightToLeft {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(0);
    }
  }
</style>
<script>
  // Fungsi ini akan dipanggil saat halaman dimuat (refresh)
  window.addEventListener('load', function() {
    // Menambahkan kelas "animate" pada elemen dengan kelas "text-start"
    var animatedText = document.getElementById('animated-text');
    animatedText.classList.add('animate');
  });
</script>

  </div>

</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</form>
</html>
