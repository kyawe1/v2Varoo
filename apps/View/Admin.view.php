<!DOCTYPE html>
<html lang="en" class='h-100'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel='stylesheet' href='/apps/static/css/i.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body class='h-100'>
    <div class='d-flex flex-shrink-0 justify-content-between flex-column h-100'>
        <?php include_once 'apps/View/parts/header.php'; ?>
        <div class='container d-flex justify-content-center align-content-center'>
        <div class='row row-cols-1'> 
        <div class='col lh-5 m-3 text-center'>
        <a href='/create/product'>
            <button class='btn btn-primary'>Create Product</button>
        </a>
        </div>
        <!-- <div class='col lh-5 m-3 text-center'>
        <a href='/admin/appointment'>
            <button class='btn btn-info'>Check Appointment</button>
        </a>
        </div> -->
</div>
    </div>
        <?php include_once 'apps/View/parts/footer.php'; ?>
    </div>