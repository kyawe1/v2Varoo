<!DOCTYPE html>
<html lang="en" class='h-100'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel='stylesheet' href='apps/static/css/i.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class='h-100'>
    <div class='d-flex flex-shrink-0 justify-content-between flex-column h-100'>
        <?php
        include_once "apps/View/parts/header.php";
        ?>
        <div class='contianer-fluid'>
            <h1 class='d-block m-2 p-2 text-center display-1 opacity-50'> Vission </h1>
            <div class='my-2'>
                <div class='row justify-content-center align-self-center shadow p-4 m-3 rounded-3'>
                    <div class=' col-md-5 col-sm-7 my-sm-3'>
                        <img src='apps/static/img/lotaya.svg' class='d-block img-fluid mx-auto'>
                    </div>
                    <div class='col-md-5 col-sm-12 textwarp d-block my-auto m-sm-3 p-sm-3'>
                        We made the right thing with customer. Customer always right to get the right apartment or
                        something..
                    </div>
                </div>
                <div class='row row-cols-md-1 row-cols-lg-2 p-2 m-2'>
                    <div class='col-md-6 col-sm-12'>
                        <h1 class='d-block m-2 p-2 text-center display-1 opacity-50'> Our Location </h1>

                        <img src='apps/static/img/googlemap.jpg' class='d-block mx-auto my-2 img-fluid'>
                    </div>
                    <div class='col-md-6 col-sm-12'>
                        <article>
                            <h1 class='display-4 opacity-75 p-2 m-1'>Details</h1>
                            <div class='d-block p-2 m-1'>

                                <div class='h1'>
                                    Lotaya Company Headquater
                                </div>
                                <div class='m-2 p-1 h5'>
                                    <div class='my-2'>
                                        <i class="bi bi-envelope-fill mx-1 h5"></i> Email : premire@bz.com
                                    </div>

                                    <div class='my-2'>
                                        <i class="bi bi-geo-alt-fill mx-1"></i>Candaw Min galar park,southokkalapa
                                    </div>
                                </div>
                            </div>
                        </article>
                        <form class='p-2'>
                            <div class='display-4 my-2 p-2'> To Get Update News</div>
                            <div class='mb-2'>
                                <label class='form-label'>Email</label>
                                <input type="text" name="" id="" class='form-control'>
                            </div>
                            <div class='mb-2'>
                                <input type="submit" value="submit" class='btn btn-primary w-100'>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <?php
            include_once "parts/footer.php";
            ?>
        </div>
</body>

</html>