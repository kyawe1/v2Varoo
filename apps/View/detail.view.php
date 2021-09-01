<!DOCTYPE html>
<html lang="en" class='h-100 ee'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="apps/static/css/i.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class='h-100 ee'>
    <div class='d-flex flex-shrink-0 justify-content-between flex-column h-100'>
        <?php
        include_once "apps/View/parts/header.php";
        ?>
        <div class='container flex-shrink-0'>
            <div class='d-block mx-auto shadow-sm py-3'>
                <div class='d-md-flex justify-content-between'>
                    <div class='w-md-25'>
                        <img src='apps/static/img/house1.png' class='img-fluid rounded-3 rounded'>
                    </div>
                    <div class='d-block my-auto'>
                        <div class='display-5'>Gandamar house</div>
                        <table border=0 class='table table-borderless '>
                            <tbody>
                                <tr>
                                    <td colspan="2" class='text-center'>
                                        <div class='my-2'>
                                            <i class="bi bi-info-circle mx-2"></i>Infomation
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="bi bi-tag-fill mx-2"></i>Price
                                    </td>
                                    <td>
                                        <?php echo $ans->price ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="bi bi-geo-alt-fill mx-2"></i>Address
                                    </td>
                                    <td>
                                        <?php echo $ans->address ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class='p-2'>
                                        <i class="bi bi-house mx-2"></i>Type
                                    </td>
                                    <td>
                                        <?php echo $ans->type ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                            if(Authenticate::checklogin()){
                        ?>
                        <?php if (in_array($ans,Authenticate::get_user()->products)){ ?>
                            <button class='btn btn-primary w-100 rounded-3'><i class="bi bi-star-fill mx-2" name='btn-icon'></i>Interest</button>
                        <?php } else { ?>
                            <button class='btn btn-primary w-100 rounded-3'><i class="bi bi-star mx-2" name='btn-icon'></i>Interest</button>
                        <?php } }?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class='container my-2'>
            <div id="carousellable" class="carousel slide mb-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="apps/static/img/house1.png" class="d-block w-50 h-50 mx-auto" alt="apps/static/img/house1.png">
                    </div>
                    <div class="carousel-item">
                        <img src="apps/static/img/house1.png" class="d-block w-50 h-50 mx-auto" alt="apps/static/img/house1.png">
                    </div>
                    <div class="carousel-item">
                        <img src="apps/static/img/lotaya.svg" class="d-block w-50 h-50 mx-auto" alt="apps/static/img/house1.png">
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
        <hr class='opacity-25 m-1'>
        <div class='display-4'>
            More Information About House
        </div>
        <div class='d-block mx-auto'>
            <table class='table table-bordered my-2'>
                <tr>
                    <td class='p-2'>
                        No of bedrooms
                    </td>
                    <td class='p-2'>
                        <?php echo $ans->numberofrooms ?>
                    </td>
                </tr>
                <tr>
                    <td class='p-2'>
                        No of Masterrooms
                    </td>
                    <td class='p-2'>
                        <?php echo $ans->numberofbedroom ?>
                    </td>
                </tr>
                <tr>
                    <td class='p-2'>
                        No of Showers
                    </td>
                    <td class='p-2'>
                        1
                    </td>
                </tr>
                <tr>
                    <td class='p-2'>
                        Decoration and funiture Ready
                    </td>
                    <td>
                        No
                    </td>
                </tr>

            </table>
        </div>
        <hr class='disabled opacity-25'>
        <div class='text-center display-2'>
            The More You Interest
        </div>
        <div class='row row-cols-md-2 row-cols-xl-3 row-cols-sm-1 my-2 flex-shrink-0'>

            <div class='col-lg-4 col-sm-12'>

                <div class='card p-2'>
                    <a href='..html' class='text-decoration-none text-black'>
                        <div class='card-img'>
                            <img src='apps/static/img/house1.png' class='img-fluid'>
                        </div>
                        <div class='card-header text-center'>kdjaskkasjfka</div>
                        <div class='card-body'>
                            <div class='d-inline'>
                                <ul>
                                    <li class='d-inline bg-danger p-2 rounded-3 text-light'>Rent</li>
                                    <li class='d-inline bg-warning p-2 rounded-3'>Sell</li>
                                </ul>
                            </div>
                            <table border=0>
                                <tr>
                                    <td class='align-text-top'><i class="bi bi-tag-fill mx-2"></i>price</td>
                                    <td class='text-right'>100LKS</td>
                                </tr>
                                <tr>
                                    <td class='align-text-top'><i class="bi bi-geo-alt-fill mx-2"></i>address</td>
                                    <td class='text-right'>555 Ridge Rd
                                        Franklin, Georgia(GA), 30217</td>

                                </tr>
                                <tr>
                                    <td class='align-text-top'><i class="bi bi-person-circle"></i>owner</td>
                                    <td class='text-right'>hello world</td>
                                </tr>

                            </table>
                            <div class='p-1 m-1'>
                                <img src='apps/static/img/bed_black_24dp.svg' width=25 height="25"> 3
                                <img src='apps/static/img/wc_black_24dp.svg' width=25 height="25">4
                            </div>
                    </a>
                    <button class='btn btn-primary w-100'><i class="bi bi-star mx-2" name='btn-icon'></i>Interest</button>
                </div>
            </div>

        </div>



        <div class='col-lg-4 col-sm-12'>

            <div class='card p-2'>
                <div class='card-img'>
                    <a href='..html' class='text-decoration-none text-black'></a>
                    <img src='apps/static/img/house1.png' class='img-fluid'>
                </div>
                <div class='card-header text-center'>kdjaskkasjfka</div>
                <div class='card-body'>
                    <div class='d-inline'>
                        <ul>
                            <li class='d-inline bg-danger p-2 rounded-3 text-light'>Rent</li>
                            <li class='d-inline bg-warning p-2 rounded-3'>Sell</li>
                        </ul>
                    </div>
                    <table border=0>
                        <tr>
                            <td class='align-text-top'><i class="bi bi-tag-fill mx-2"></i>price</td>
                            <td class='text-right'>100LKS</td>
                        </tr>
                        <tr>
                            <td class='align-text-top'><i class="bi bi-geo-alt-fill mx-2"></i>address</td>
                            <td class='text-right'>555 Ridge Rd
                                Franklin, Georgia(GA), 30217</td>

                        </tr>
                        <tr>
                            <td class='align-text-top'><i class="bi bi-person-circle"></i>owner</td>
                            <td class='text-right'>hello world</td>
                        </tr>

                    </table>
                    <div class='p-1 m-1'>
                        <img src='apps/static/img/bed_black_24dp.svg' width=25 height="25"> 3
                        <img src='apps/static/img/wc_black_24dp.svg' width=25 height="25">4
                    </div>
                    </a>
                    <button class='btn btn-primary w-100'><i class="bi bi-star mx-2" name='btn-icon'></i>Interest</button>
                </div>
            </div>

        </div>



        <div class='col-lg-4 col-sm-12'>

            <div class='card p-2'>
                <a href='..html' class='text-decoration-none text-black'>
                    <div class='card-img'>
                        <img src='apps/static/img/house1.png' class='img-fluid'>
                    </div>
                    <div class='card-header text-center'>kdjaskkasjfka</div>
                    <div class='card-body'>
                        <div class='d-inline'>
                            <ul>
                                <li class='d-inline bg-danger p-2 rounded-3 text-light'>Rent</li>
                                <li class='d-inline bg-warning p-2 rounded-3'>Sell</li>
                            </ul>
                        </div>
                        <table border=0>
                            <tr>
                                <td class='align-text-top'><i class="bi bi-tag-fill mx-2"></i>price</td>
                                <td class='text-right'>100LKS</td>
                            </tr>
                            <tr>
                                <td class='align-text-top'><i class="bi bi-geo-alt-fill mx-2"></i>address</td>
                                <td class='text-right'>555 Ridge Rd
                                    Franklin, Georgia(GA), 30217</td>

                            </tr>
                            <tr>
                                <td class='align-text-top'><i class="bi bi-person-circle"></i>owner</td>
                                <td class='text-right'>hello world</td>
                            </tr>

                        </table>
                        <div class='p-1 m-1'>
                            <img src='apps/static/img/bed_black_24dp.svg' width=25 height="25"> 3
                            <img src='apps/static/img/wc_black_24dp.svg' width=25 height="25">4
                        </div>
                </a>
                <button class='btn btn-primary w-100'><i class="bi bi-star mx-2" name='btn-icon'></i>Interest</button>
            </div>
        </div>

    </div>

    <!-- end of main -->

    </div>
    <?php
    include_once "apps/View/parts/footer.php";
    ?>
    </div>
</body>

</html>