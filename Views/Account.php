<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MarAu </title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/account-style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">

</head>
<?php
session_start();
include '../Models/Account.php';
if (!isset($_SESSION['Account'])) {
    header("Location: ../views/login");
} else $account = unserialize($_SESSION['Account']);
?>

<body>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class=" offset-xl-1 col-xl-7 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                    <h6 class="f-w-600"><?= $account->fName . " " . $account->mName . " " . $account->lName ?></h6>
                                    <p><?= $account->AccountType ?></p>
                                    <?php
                                    if ($account->Status == 1)
                                        echo "<p>Account Activated</p>";
                                    else
                                        echo "<p>Account Is Not Activated</p>";
                                    ?>
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                    <h6 class="f-w-600"><a href="../Controller/logout.php">log out</a></h6>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Information</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400"><?= $account->EmailAddress ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Username</p>
                                            <h6 class="text-muted f-w-400"><?= $account->Username ?></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Contact Email</p>
                                            <h6 class="text-muted f-w-400"><?= $account->ContactEmail ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Gender</p>
                                            <h6 class="text-muted f-w-400"><?= $account->Gender ?></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Country</p>
                                            <h6 class="text-muted f-w-400"><?= $account->Country ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Birth Date</p>
                                            <h6 class="text-muted f-w-400"><?= $account->BirthDate ?></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">General Information</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Balance</p>
                                            <h6 class="text-muted f-w-400"><?= $account->Balance ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Strikes</p>
                                            <h6 class="text-muted f-w-400"><?= $account->Strikes ?></h6>
                                        </div>
                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10 d-flex justify-content-end">
                                        <li><a href="#!" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="facebook" data-bs-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="twitter" data-bs-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="instagram" data-bs-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src='../js/bootstrap.min.js'></script>