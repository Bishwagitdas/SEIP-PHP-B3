<pre>

<?php 
session_start();
// session_destroy();
// var_dump('POST', $_POST);

try
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        // echo 'this request is from FORM';
    
        // print_r($_POST);
        // var_dump(array_key_exists('firstName', $_POST), $_POST['firstName']);
        // var_dump(gettype($_POST['firstName']));
        // var_dump('string lengh grater than ZERO', strlen($_POST['firstName'])>0);
        // var_dump('string  empty', empty($_POST['firstName']));

        if(!array_key_exists('firstName', $_POST) || empty($_POST['firstName']))
            throw new Exception('<p style="color:red;">Please input First Name.</p>');
        
        if(!array_key_exists('lastName', $_POST) || empty($_POST['lastName']))
            throw new Exception('<p style="color:red;">Please input Last Name.</p>');
        
        if(!array_key_exists('phoneNumber', $_POST) || empty($_POST['phoneNumber']))
            throw new Exception('<p style="color:red;">Please input Phone Number.</p>');

        // $_SESSION[] = $_POST;
        
        // var_dump('SESSION', array_key_exists('all_numbers', $_SESSION));
        if(!array_key_exists('all_numbers', $_SESSION))
            $_SESSION['all_numbers'] = [];

        $_SESSION['all_numbers'][] = $_POST;
        unset($_POST);
    }
    if($_SERVER['REQUEST_METHOD']=='GET' && array_key_exists('action', $_GET) && $_GET['action']=='edit')
    {
        // echo 'this request is from URL';
        echo 'we are going to edit a contact';

    }
    
    
    // print_r($_SESSION['all_numbers']);



}
catch(Exception $e)
{
    echo $e->getMessage();
}



?>
</pre>



<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>PhoneBook</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <h3 class="text-center">PHONEBOOK</h3>
                </div>
                <div class="col-4">

                    <div class="card">
                        <div class="card-header bg-primary text-white">Save new</div>
                        <div class="card-body">
                            <form action="" method="POST">
                                    <div class="form-group mb-2">
                                        <label for="firstName">First Name</label>
                                        <input type="text" name="firstName" value="<?=$_POST['firstName']??'';?>" id="firstName" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="lastName" value="<?=$_POST['lastName']??'';?>" id="lastName" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" name="phoneNumber" value="<?=$_POST['phoneNumber']??'';?>" id="phoneNumber" class="form-control form-control-lg">
                                    </div>
                                    <button class="btn btn-success" type="submit">SAVE</button>
                                </form>
                        </div>
                    </div>

                </div>


                <div class="col-8">

                    <div class="card">
                        <div class="card-header bg-primary text-white">All Numbers</div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>#SL_No</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(array_key_exists('all_numbers', $_SESSION)):?>
                                    <?php
                                        $serial = 0; 
                                        foreach($_SESSION['all_numbers'] as $key=>$contact):
                                            ++$serial;
                                    ?>
                                    <tr>
                                        <td><?=$serial?></td>
                                        <td><?=$contact['firstName']?></td>
                                        <td><?=$contact['lastName']?></td>
                                        <td><?=$contact['phoneNumber']?></td>
                                        <td class="text-center">
                                            <a href="phonebook.edit.php?action=edit&id=<?=$key;?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a onclick="javascript:if(!confirm('Are you sure?'))return false;" href="phonebook.delete.php?action=delete&id=<?=$key;?>" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                    <?php else:?>
                                    <tr>
                                        <td colspan="5" class="text-center">NO CONTACTS AVAILABLE</td>
                                    </tr>
                                    <?php endif;?>
                                </tbody>
                            </table>
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