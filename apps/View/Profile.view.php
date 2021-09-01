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

    <?php include_once 'apps/View/parts/header.php'; ?>

    <div class='container p-2'>
    <div class='display-2 text-center mb-2 p-1'><i class="bi bi-person-circle"></i></div>
                <h1 class='mb-3 text-center'>Your Profile</h1>
                <div class='mb-2'>
                    <label class='form-label'>Name</label>
                    <input type="text" class='form-control placeholder-glow' name='username' placeholder="Name" readonly value=<?php echo $user->username ?>>
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Email</label>
                    <input type="email" class='form-control placeholder-glow' name='email' placeholder="Email" readonly value=<?php echo $user->email ?? "mmm" ?>>
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Password</label>
                    <input type="password" class='form-control placeholder-glow' name='password' placeholder="Password" readonly value="******">
                </div>  
</div>
</div>
<?php include_once 'parts/footer.php'; ?>
                
</body>