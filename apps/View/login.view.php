<!DOCTYPE html>
<html lang="en" class='h-100'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="apps/static/css/i.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class='h-100'>

    <?php
    include_once "apps/View/parts/header.php"
    ?>
    <div class='container-fluid'>
        <div class='d-flex justify-content-center align-items-center h-100 p-3'>
            <form class='p-5 m-4 rounded-3 bg-white' method='POST' action='/login_process'>
                <div class='display-2 text-center mb-2 p-1'><i class="bi bi-person-circle"></i></div>
                <h1 class='mb-3'>Welcome From Premire</h1>
                <div class='mb-2'>
                    <label class='form-label'>Name</label>
                    <input type="text" class='form-control placeholder-glow' name='username' placeholder="Name">
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Password</label>
                    <input type="password" class='form-control placeholder-glow' name='password' placeholder="Password">
                </div>
                <input type='submit' class='btn btn-primary w-100 p-1' name='submit' value='Login'>
                <p class='text-wrap text-md-center'> If you don't have account you can click through <a href='/register'>here</a>.</p>
            </form>
        </div>
    </div>
    <?php
    include_once "apps/View/parts/footer.php"
    ?>
</body>

</html>