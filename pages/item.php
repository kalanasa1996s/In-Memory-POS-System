<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/17/2019
 * Time: 9:41 AM
 */

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <script src="https://kit.fontawesome.com/7802c5be07.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <link rel="stylesheet" href=" ../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/simple-sidebar.css">
    <link rel="stylesheet" href="../css/Dashbord.css">
    <link rel="stylesheet" href="../fontawesome-free-5.8.2-web/css/all.css">


</head>
<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar  open-->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">POS SYSTEM</div>
        <div class="list-group list-group-flush">
            <a href="dashbord.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="customer.php" class="list-group-item list-group-item-action bg-light">Customer</a>
            <a href="item.php" class="list-group-item list-group-item-action bg-light">Item</a>
            <a href="placeOrder.php" class="list-group-item list-group-item-action bg-light">Order</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Logout</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper end -->

    <!--    ////////////////////////////////////////////////////////////////////////////body start////////////////////////////////////////////-->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Messages
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">All Messages</a>
                            <a class="dropdown-item" href="#">Sent Message</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">New Message</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--//////////////////////////////////////////////////////body 01//////////////////////////////////////////////////////////////-->

        <div class="container-fluid">


            <div class="m_content">

                <div class="m_card">
                    <form>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Item ID</label>
                                <input id="custID" type="text" class="form-control" placeholder="Item ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Item Name</label>
                                <input id="name" type="text" class="form-control" placeholder="Item Name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>QTY</label>
                                <input id="custID" type="text" class="form-control" placeholder="QTY">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cost Price</label>
                                <input id="name" type="text" class="form-control" placeholder="Cost Price">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Selling Price</label>
                                <input type="text" class="form-control" placeholder="Selling Price">
                            </div>
                        </div>


                        <button id="add" type="button" onclick="addRow()" class="btn btn-primary">ADD</button>
                        <button id="update" onclick="updateRow()" type="button" class="btn btn-success">UPDATE</button>
                        <button id="cancel" type="button" class="btn btn-secondary">CANCEL</button>
                        <button id="delete" onclick="deleteRow(row)" type="button" class="btn btn-danger">DELETE
                        </button>
                    </form>
                </div>


                <div class="m_card">
                    <form action="">
                        <div class="form-row">
                        </div>
                    </form>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Item ID</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">QTY</th>
                            <th scope="col">Cost Price</th>
                            <th scope="col">Selling Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr onclick="displayRow(this)">
                            <td>I001</td>
                            <td>Lux</td>
                            <td>1000</td>
                            <td>23.50</td>
                            <td>50.50</td>
                        </tr>

                        <tr>
                            <td>I002</td>
                            <td>Sunlight</td>
                            <td>1000</td>
                            <td>24.50</td>
                            <td>55.50</td>
                        </tr>

                        <tr>
                            <td>I004</td>
                            <td>Lux</td>
                            <td>1000</td>
                            <td>23.50</td>
                            <td>60.50</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

        <!--        //////////////////////////////////////////////////////body 01//////////////////////////////////////////////////////////////-->

    </div>
    <!-- /#page-content-wrapper -->

</div>

<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="../js/jquery/jquery.min.js"></script>
<script src="../bootstarp/js/bootstrap.bundle.min.js"></script>

<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/myScripts.js"></script>
<script>
    $("#update").hide();
    $("#cancel").hide();
    $("#delete").hide();
</script>

</body>
</html>