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
<body>
    <?php
        include_once "apps/View/parts/header.php";
        ?>
    <div class='container p-2'>
        <table class='table'>
            <tr>
                <td>
                    No
                </td>
                <td>
                    Username
                </td>
                <td>
                    Email
                </td>
                <td>
                    
                </td>
            </tr>
            
            <?php foreach($array as $a) : ?>
            <tr>
                <td>
                    <?php echo $i++ ?>
                </td>
                <td>
                    <?php echo $a->username ?>
                </td>
                <td>
                    <?php echo $a->email ?>
                </td>
                <td>
                    <button class='btn btn-primary'>freeze</button>
                    <button class='btn btn-primary'>delete</button>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
        
    </div>
    <?php
        include_once "apps/View/parts/footer.php";
        ?>
</body>
</html>