<!DOCTYPE html>
<html lang="en" class='h-100'>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom</title>
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
        <div class='display-3 opacity-75 p-2 m-2 text-center'> Showroom </div>
        <div class='container-fluid my-2 py-2'>
            <div class='row row-cols-md-2 row-cols-sm-1'>
                <div class='col-lg-3 col-md-4 col-sm-12 top-0 position-lg-sticky d-block '>
                    <div class='m-2 p-1'>
                        <form class='' action='/find' method='GET'>
                            <div class='input-group'>
                                <input type="text" class='form-control' name='name'>
                                <input type="submit" class='btn btn-primary' name='submit' value="Submit">
                            </div>
                        </form>

                        <div class=' display-5'>Categories</div>
                        <div class='opacity-50'>
                            <div class='p-2 m-1'>
                                <span class='border border-1 border-dark p-1 rounded-2 lh-lg'>Apartment</span>
                                <span class='border border-1 border-dark p-1 rounded-2 lh-lg'>Lone Chin</span>
                                <span class='border border-1 border-dark p-1 rounded-2 lh-lg'>Housing</span>
                                <span class='border border-1 border-dark p-1 rounded-2 lh-lg'>Condo</span>
                            </div>
                        </div>

                        <div class=' display-5'>Popular Search</div>
                        <div class='opacity-50'>
                            <div class='p-2 m-1'>
                                <span class='border border-1 border-dark p-1 rounded-2 lh-lg'>Apartment</span>
                                <span class='border border-1 border-dark p-1 rounded-2 lh-lg'>Lone Chin</span>
                                <span class='border border-1 border-dark p-1 rounded-2 lh-lg'>Housing</span>
                                <span class='border border-1 border-dark p-1 rounded-2 lh-lg'>Condo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($ans as $m) { ?>
                    <div class='col-md-3 col-sm-12'>
                        <div class='card py-2'>
                            <a href='/detail?<?php echo "product_id=" . $m->id ?>' class='text-decoration-none text-black'>
                                <div class='card-img'>
                                    <img src='./house1.png' class='img-fluid'>
                                </div>
                                <div class='card-header text-center'><?php echo htmlspecialchars($m->type) ?></div>
                                <div class='card-body'>
                                    <div class='d-inline'>
                                        <ul>
                                            <li class='d-inline bg-danger p-2 rounded-3 text-light'>Rent</li>
                                            <li class='d-inline bg-warning p-2 rounded-3'><?php echo htmlspecialchars($m->sale_type) ?></li>
                                        </ul>
                                    </div>
                                    <table border=0 class='w-100'>
                                        <tr>
                                            <td class='align-text-top'><i class="bi bi-tag-fill"></i>price</td>
                                            <td class='text-right'><?php echo $m->price ?></td>
                                        </tr>
                                        <tr>
                                            <td class='align-text-top'><i class="bi bi-geo-alt-fill"></i>address</td>
                                            <td class='text-right'><?php echo $m->address ?></td>

                                        </tr>
                                    </table>
                                    <div class='p-1 m-1'>
                                        <img src='static/img/bed_black_24dp.svg' width=25 height="25"> <?php echo $m->numberofbedroom ?>
                                        <img src='static/img/wc_black_24dp.svg' width=25 height="25"> <?php echo $m->numberofrooms ?>
                                    </div>
                            </a><a href='/interested/add?product_id=<?php echo $m->id ?>'>
                                <button class='btn btn-primary w-100' value=<?php echo $m->id ?>><i class="bi bi-star mx-2" name='btn-icon'></i>Interest</button>
                            </a>
                        </div>

                    </div>
                    <!-- endofcolumn -->
                <?php } ?>
            </div>
        </div>
        <!-- endofmain -->
    </div>

    <?php
    include_once "apps/View/parts/footer.php";
    ?>

    </div>
    </div>
</body>

</html>