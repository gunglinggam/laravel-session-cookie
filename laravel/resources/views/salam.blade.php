<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Halaman Salam</title>
   <!-- Bootstrap 5 CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
      body {
         background: linear-gradient(135deg, #f3f3f3, #cfcfcf);
         height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
      }
      .card {
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      }
      .btn-custom {
         background-color: #b1afaf;
         color: rgb(0, 0, 0);
         transition: 0.3s;
      }
      .btn-custom:hover {
         background-color: #cacaca;
      }
   </style>
</head>
<body>

   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-6">
            <div class="card text-center">
               <h1 class="mb-3">Selamat Datang, <span class="text-primary">{{$name}}</span>!</h1>
               <form method="POST" action="/submit-name">
                  @csrf
                  <div class="mb-3">
                     <input type="text" name="name" class="form-control" placeholder="Isi nama Anda" required>
                  </div>
                  <button type="submit" class="btn btn-custom w-100">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
