<!DOCTYPE html>
<html lang="en" class='h-100'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="/apps/static/css/i.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class='h-100'>

    <?php
    include_once "parts/header.php"
    ?>
    <div class='container-fluid  '>
        <div class='d-flex justify-content-center align-items-center h-100 p-3'>
            <form class='p-5 m-4 rounded-3 bg-white' action='/create/product_process' method='POST' enctype="multipart/form-data">
                <div class='display-2 text-center mb-2 p-1'>
                    <img src='/apps/static/img/house1.png' class='img-fluid' id='preview' height="200" wdith=200 />
                </div>
                <h1 class='mb-3'>Create The Product</h1>
                <div class='mb-2'>
                    <label class='form-label'>Cover Photo</label>
                    <input type="file" class='form-control placeholder-glow' name='coverphoto' id='cv'>
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Name</label>
                    <input type="text" class='form-control placeholder-glow' name='name' placeholder="Name">
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Type</label>
                    <input type="text" class='form-control placeholder-glow' name='type' placeholder="Building Type">
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Sale Type</label>
                    <input type="text" class='form-control placeholder-glow' name='sale_type' placeholder="Sale Type">
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Address</label>
                    <textarea class='form-control placeholder-glow' name='address' placeholder="Address"></textarea>
                </div>
                <div class='mb-2'>
                    <label class='form-label'>price</label>
                    <input type="text" class='form-control placeholder-glow' name='price' placeholder="Price">
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Number Of Rooms</label>
                    <input type="text" class='form-control placeholder-glow' name='numberofrooms' placeholder="Number Of Rooms">
                </div>
                <div class='mb-2'>
                    <label class='form-label'>Number Of Bedroom</label>
                    <input type="text" class='form-control placeholder-glow' name='numberofbathroom' placeholder="Number Of Bedrooms">
                </div>
                <div class='mb-2 d-flex justify-content-between'>
                    <label class='form-label'>Funiture Ready</label>
                    <div>
                    <input type="radio" name='funitureready' id='y' class='form-radio' value='Y'>Yes
                    <input type="radio" name='funitureready' id='y'  class='form-radio' value='N'>No
                    </div>
                </div>
                <input type='submit' class='btn btn-primary w-100 p-1' value='Add'>
                
            </form>
        </div>
    </div>
    <?php
    include_once "parts/footer.php"
    ?>
    <script src='/apps/static/js/preview.js' defer></script>
</body>

</html>