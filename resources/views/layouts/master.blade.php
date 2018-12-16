<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <title>@yield('title')</title>
</head>
<body>
    {{--  HEADER  --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="image/logo.png" alt="" width="600" height="250">
            </div>
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <table border="0">
                        <tr>
                            <td width="100px" class="hvr-shrink "><a class="navbar-brand d-flex justify-content-center" href="#">Home</a></td>
                            <td>
                                <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
                            </td>
                        </tr>
                    </table>
                </nav>
            </div>
            <div class="col-12">
                <div class="batas"></div>
            </div>
            
        </div>
        @yield('konten')
    </div>



    
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
@yield('js')