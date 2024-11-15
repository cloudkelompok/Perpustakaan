<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Identitas</title>
    <style>
        .jumbotron{
            padding-top: 2rem; 
            background-color: #e2edff
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center ">
        <img src="https://i.pinimg.com/564x/ef/68/3f/ef683f71723db15637f2b21441f4bffe.jpg" alt="" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Andreas Hirata</h1>
        <p class="lead">Mahasiswa | Teknik Informatika</p>
    </div>
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
            <div class="col-4">
                Saya mahasiswa S1 Teknik Informatika yang memiliki spesialis dalam bidang manajemen database dan web developer. Telah mendesain dan mengembangkan 3 sistem untuk meningkatkan efisiensi kerja.
            </div>
            <div class="col-4">
                Memiliki jiwa kepemimpinan, manajemen waktu dan komunikasi yang baik. Ahli menggunakan SQL, Node, Ruby on Rails, React. Sedang mencari perusahaan teknologi startup untuk bertumbuh bersama dan mengembangkan keahlian dalam bidang IT.
            </div>
        <div class="btn-box mt-3 ">
            <a class="btn btn-info" href="<?php echo route('pendidikan')?>" role="button">Pendidikan</a>
            <a class="btn btn-info" href="<?php echo route('skill')?>" role="button">Skill</a>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\perpus\resources\views/cv/identitas.blade.php ENDPATH**/ ?>