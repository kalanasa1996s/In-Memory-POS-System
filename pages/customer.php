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
    <script src="../js/jquery-3.4.1.min.js"></script>


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
            <!--            <h1 class="mt-4">Customer</h1>-->

            <div class="m_content">
                <div class="card-header">
                    <h3>Customer Manager</h3>
                </div>
                <div class="m_card">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Customer ID</label>
                                <input id="custID" type="text" class="form-control" placeholder="ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input id="name" type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input id="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group col-md-6">
                                <label>PhoneNumber.</label>
                                <input id="tel" type="text" class="form-control" placeholder="PhoneNumber">
                            </div>
                        </div>

                        <button id="add" type="button" onclick="addRow()" class="btn btn-primary">ADD</button>
                        <button id="update" onclick="updateRow()" type="button" class="btn btn-success">UPDATE</button>
                        <button id="cancel" type="button" class="btn btn-secondary">CANCEL</button>
                        <button id="delete" onclick="deleteRow(row)" type="button" class="btn btn-danger">DELETE
                        </button>
                    </form>
                </div>

                <div class="card-header">
                    <h3>Customers</h3>
                </div>
                <div class="m_card">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-3 float-left">
                                <input type="search" class="form-control" name="" id="" placeholder="Search by Name/ID">
                            </div>
                        </div>
                    </form>
                    <table id="tbl" class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Tel</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr onclick="displayRow(this)">
                            <td>C001</td>
                            <td>Kalana</td>
                            <td>Galle</td>
                            <td>Kalanasa1996@gmail.com</td>
                            <td>0771865498</td>
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
<script src="../js/bootstrap.min.js"></script>
<script src="../js/myScripts.js"></script>
<script>
    $("#update").hide();
    $("#cancel").hide();
    $("#delete").hide();
</script>

<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


</body>
</html>