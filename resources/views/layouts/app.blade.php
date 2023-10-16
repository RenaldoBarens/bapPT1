<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>SIAK | @yield('title')</title>
    <style>
            body {
            margin: 0;
            padding: 0;
            }
        
            nav a {
                color: #fff;
                text-decoration: none;
                padding: 10px;
                display: inline-block;
            }
        
            nav a:hover {
                background-color: red;
            }
        
            .fixed-header,
            .fixed-footer {
                width: 100%;
                position: fixed;
                background: #333;
                padding: 5px;
                color: #fff;
            }
        
            .fixed-header {
                top: 0;
            }
        
            .fixed-footer {
                bottom: 0;
                text-align: center;
            }
        
        
            .content {
                width: 100%;
                padding-top: 60px;
                padding-bottom: 50px;
            }
        

    </style>

</head>

<body>
    
    <div class="fixed-header">
     
        <a href="/">Home</a>
        <a href="/profil">Profil</a>
        <a href="/mahasiswa">Mahasiswa</a>
        <a href="/matakuliah">Mata Kuliah</a>
    </div>

    <div class="content">

        @yield('content')
    </div>

    <div class="fixed-footer">
        Copyright &copy; 2021
    </div>
    
</body>
</html>