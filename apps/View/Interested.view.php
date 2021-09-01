<!DOCTYPE html>
<html lang="en" class='h-100'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interested</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="apps/static/css/i.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>


<body class='h-100'>
    <div class='d-flex flex-shrink-0 justify-content-between flex-column h-100'>
        <?php
        include_once 'apps/View/parts/header.php';
        ?>
        <div class='container flex-shrink-0'>
            <div class='display-2 opacity-50 text-center p-3 m-2'>
                Interested Items
            </div>
            <div class='row-cols-1'>
                <?php
                foreach ($array as $a) :
                ?>
                    <div class='col'>
                        <div class='d-lg-flex m-2 p-2 shadow-sm  justify-content-lg-evenly flex-shrink-0'>
                            <?php if (!isset($a->product->coverphoto)) :?>
                            <div class='col-md-7 flex-shrink-0 m-2'>
                                <img src='apps/static/img/house1.png' class='img-fluid'>
                            </div>
                            <?php else :?>
                            <div class='col-md-7 flex-shrink-0 m-2'>
                                <img src='<?php echo $a->product->get_photo()?>' class='img-fluid'>
                            </div>
                            <?php endif ?>
                            <div class='d-block my-auto'>
                                <div class='my-3'>
                                    <div class='d-inline my-3'>
                                        <ul>
                                            <li class='d-inline bg-success p-2 rounded-3 text-light'><i class="bi bi-check-lg mx-2"></i>Avaliable</li>
                                            <li class='d-inline bg-warning p-2 rounded-3'><?php echo $a->product->sale_type ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <table border=0 class='table table-borderless '>
                                    <tbody>
                                        <tr>
                                            <td class='h5 text-center' colspan='2'>
                                                <?php echo $a->product->name ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="bi bi-house-fill mx-2"></i>Type
                                            </td>
                                            <td>
                                                <?php echo htmlspecialchars($a->product->type); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="bi bi-tag-fill mx-2"></i> Price
                                            </td>
                                            <td>
                                                <?php echo $a->product->price ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="bi bi-geo-alt-fill mx-2"></i>Address
                                            </td>
                                            <td>
                                                <?php echo htmlspecialchars($a->product->address); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class='d-block mx-auto'>
                                    <a href='/detail?product_id=<?php echo $a->product->id ?>'><button class='btn btn-info py-2 my-2'><i class="bi bi-info-circle me-lg-2 m-sm-1"></i> More info
                                        </button></a>
                                    <button class='btn btn-primary py-2 my-2'><i class="bi bi-person-check me-lg-2 m-sm-1"></i>Check</button>
                                    <a href='/interested/delete?interested_id=<?php echo $a->id ?>'>
                                        <button class='btn btn-warning py-2 my-2' name='btn-delete'><i class="bi bi-trash me-lg-2 m-sm-1"></i>Delete</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end of one -->
                    <?php
                endforeach;
                    ?>

                    </div>
                    <!-- endofcolumn -->
            </div>
            <!-- endofbody -->
        </div>
    
    <?php
    include_once 'apps/View/parts/footer.php';
    ?>
    
    </div>
</body>

</html>