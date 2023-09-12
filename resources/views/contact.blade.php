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

<div class="container">
    <h2 class="text-center">Contact Me</h2>
    <p class="text-center">Feel free to get in touch with me through the contact form or connect with me on social media.</p>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('contact') }}" method="POST">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <h4>Contact Information</h4>
                <p><strong>Email:</strong> <a href="mailto:rizkialhabsi6@gmail.com">rizkialhabsi6@gmail.com</a></p>
                <p><strong>Phone:</strong> +62 856 4545 3211</p>
            </div>
            <div class="mb-3">
                <h4>Social Media</h4>
                <ul class="list-unstyled">
                <a href="https://www.instagram.com/rixkyzx"><img src="{{asset('ig.png')}}" class=""  width="50" height="45" target="_blank" alt="..."></a>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
      body{
      background: #F1F0E8;
    }
    
</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>