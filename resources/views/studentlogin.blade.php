<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-success">

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RCSS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galary.php">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutdepartment.php">Department</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  QuickLinks
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="studentlogin.php">Student Login</a></li>
                  <li><a class="dropdown-item" href="facultylogin.php">Faculty login</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="galary.php">Photo Galary</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php" tabindex="-1" aria-disabled="true">About Us</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>


    <div class="container">
      <div class="row"> <br><br></div>
        <div class="row">
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <img height="100px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBVO7cj9Mlj-9acRkhFWRpTZgC-I8GJe8NUIFTZaesqj2fc64kttutO3cQeksCS12inX8&usqp=CAU" class="img-fluid" alt="...">
            </div>
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <h1 style="color: rgb(255, 255, 255);">
                       <center><b><u>
                        Login
                       </center> 
                    </u></b>
                    </h1>
                        <tr>
                            <td style="color: cornsilk;"> Student name:</td>
                            <td><input type="text" class="form-control"> </td>
                        </tr>
                        <tr>
                            <td  style="color: cornsilk;">Password:</td>
                            <td><input type="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-light">Login</button></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>