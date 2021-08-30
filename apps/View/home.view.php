<!DOCTYPE html>
<html lang="en" class='h-100'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <div class='container my-2'>
            <div id="carousellable" class="carousel slide mb-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="apps/static/img/house1.png" class="d-block w-50 h-50 mx-auto" alt="./house1.png">
                    </div>
                    <div class="carousel-item">
                        <img src="./house1.png" class="d-block w-50 h-50 mx-auto" alt="./house1.png">
                    </div>
                    <div class="carousel-item">
                        <img src="./lotaya.svg" class="d-block w-50 h-50 mx-auto" alt="./house1.png">
                    </div>

                </div>
                <button class='carousel-control-next' type="button" data-bs-target='#carousellable' data-bs-slide='prev'>
                    <span class='carousel-control-next-icon'></span>
                    <span class='visually-hidden'>Previous</span>
                </button>
                <button class='carousel-control-prev' type='button' data-bs-target='#carousellable' data-bs-slide='next'>
                    <span class='carousel-control-prev-icon'>
                    </span>
                    <span class='visually-hidden'>Previous</span>
                </button>
            </div>
        </div>
        <h1 class='d-block m-2 p-2 text-center display-1 opacity-50'> Vission </h1>
        <div class='my-2'>
            <div class='row row-cols-sm-1 row-cols-md-2 shadow p-4 m-3 rounded-3'>
                <div class='col-sm-12 col-md-5'>
                    <img src='apps/static/img/lotaya.svg' class='d-block img-fluid mx-auto'>
                </div>
                <div class=' col-sm-12 col-md-5 textwarp  my-auto'>
                    We made the right thing with customer. Customer always right to get the right apartment or
                    something..
                </div>
            </div>
            <div class='my-2  p-5'>
                <div class='d-flex justify-content-center align-self-center shadow p-4 m-3 rounded-3'>
                    <div class='textwarp d-block my-auto'>
                        <div class='m-2 display-5'>
                            If you wanna find more you can click through
                        </div>
                        <div class='d-block m-3 p-1'>
                            <a href='./showroom.php' class='text-decoration-none text-light w-100'><button class='btn btn-primary w-100 p-2 display-5'> <i class="bi bi-stack"></i> Find More &gt; </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class='d-block m-2 p-2 text-center display-1 opacity-50'> Comment Session </h1>
            <div id="carouselExampleIndicators" class="carousel slide m-1" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class='row row-cols-sm-1 row-cols-lg-2 shadow p-4 m-3 rounded-3'>
                            <div class='col-lg-5 col-sm-12'>
                                <img src='OIP.jpg' class='img-fluid d-block my-auto'>
                            </div>
                            <div class='col-lg-5 col-sm-12 textwarp  my-auto'>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magnam culpa, quis eos
                                sunt
                                perspiciatis voluptatem, consequatur doloribus odio saepe nam numquam optio quos sed
                                nulla!
                                Numquam dolore recusandae provident.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <?php
            include_once "apps/View/parts/footer.php";
            ?>
        </div>
</body>

</html>