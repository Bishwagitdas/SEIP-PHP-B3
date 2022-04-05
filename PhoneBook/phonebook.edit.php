<?php 
session_start();


if(!array_key_exists('action', $_GET) || $_GET['action']!='edit')
{
    die('<h3 align="center" style="color:red">NOT ALLOWED! <a href="phonebook.php">BACK</a></h3>');
}

// var_dump($_GET['id']);
// var_dump($_SESSION['all_numbers'][$_GET['id']]);
$contact = $_SESSION['all_numbers'][$_GET['id']];

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>PhoneBook!</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <h3 class="text-center">PHONEBOOK</h3>
                </div>
                <div class="col-4 offset-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Save new</div>
                        <div class="card-body">
                            <form action="phonebook.update.php" method="POST">
                                    <div class="form-group mb-2">
                                        <label for="firstName">Contact ID</label>
                                        <input type="text" name="contactID" value="<?=$_GET['id']?>" id="firstName" class="form-control form-control-lg" readonly>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="firstName">First Name</label>
                                        <input type="text" name="firstName" value="<?=$contact['firstName']?>" id="firstName" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="lastName" value="<?=$contact['lastName']?>" id="lastName" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" name="phoneNumber" value="<?=$contact['phoneNumber']?>" id="phoneNumber" class="form-control form-control-lg">
                                    </div>
                                    <button class="btn btn-success" type="submit">SAVE</button>
                                    <button class="btn btn-secondary float-end" type="button" onclick="javascript:window.history.back();">BACK</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>