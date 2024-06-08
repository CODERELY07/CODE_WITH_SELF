<?php
    require_once '../connection/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit List Name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="edit">
                <div class="input-group mb-3 d-flex align-items-center">
                    <label class="p-3"for="">Edit List</label>
                    <input class="form-control" type="text" name="newlist" id="newlist">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="save-edit" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
    <div class="container my-5">
        <h2 class="text-center text-primary my-5">Todo List</h2>
        <div class="card p-4">
            <form id="form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter your List" aria-label="Enter your List" aria-describedby="basic-addon1" id="addList">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" id="add" type="submit" name="add">Add</button>
                    </div>
                </div>
            </form>
            <div id="list"></div>
            <div id="done"></div>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./jquery/functions.js">
    </script>
</body>
</html>