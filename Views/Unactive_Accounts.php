<?php
session_start();
include '../Models/Account.php';
if (isset($_SESSION['Account']) && unserialize($_SESSION['Account'])->AccountType != "Moderator") {
    header("Location: ../views/Account");
}
$accounts = unserialize($_SESSION['accounts']);
?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MarAu </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        body {
            font-family: Helvetica;
            -webkit-font-smoothing: antialiased;
            background:#110f16;
        }

        h2 {
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: white;
            padding: 30px 0;
        }

        /* Table Styles */

        .table-wrapper {
            margin: 10px 70px 70px;
            box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2);
        }

        .fl-table {
            border-radius: 5px;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }

        .fl-table td,
        .fl-table th {
            text-align: center;
            padding: 8px;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
            background: #0076bd;
        }


        .fl-table thead th:nth-child(odd) {
            color: #ffffff;
            background: #bd150b;
        }

        .fl-table tr:nth-child(even) {
            background: #F8F8F8;
        }

        /* Responsive */

        @media (max-width: 767px) {
            .fl-table {
                display: block;
                width: 100%;
            }

            .table-wrapper:before {
                content: "Scroll horizontally >";
                display: block;
                text-align: right;

                font-size: 11px;
                color: white;
                padding: 0 0 10px;
            }

            .fl-table thead,
            .fl-table tbody,
            .fl-table thead th {
                display: block;
            }

            .fl-table thead th:last-child {
                border-bottom: none;
            }

            .fl-table thead {
                float: left;
            }

            .fl-table tbody {
                width: auto;
                position: relative;
                overflow-x: auto;
            }

            .fl-table td,
            .fl-table th {
                padding: 20px .625em .625em .625em;
                height: 60px;
                vertical-align: middle;
                box-sizing: border-box;
                overflow-x: hidden;
                overflow-y: auto;
                width: 120px;
                font-size: 13px;
                text-overflow: ellipsis;
            }

            .fl-table thead th {
                text-align: left;
                border-bottom: 1px solid #f7f7f9;
            }

            .fl-table tbody tr {
                display: table-cell;
            }

            .fl-table tbody tr:nth-child(odd) {
                background: none;
            }

            .fl-table tr:nth-child(even) {
                background: transparent;
            }

            .fl-table tr td:nth-child(odd) {
                background: #F8F8F8;
                border-right: 1px solid #E6E4E4;
            }

            .fl-table tr td:nth-child(even) {
                border-right: 1px solid #E6E4E4;
            }

            .fl-table tbody td {
                display: block;
                text-align: center;
            }
        }
    </style>


</head>

<body>

    <h2><a class="btn text-white" href="../Controller/activate_account.php">Pending Accounts</a></h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Account ID</th>
                    <th>Account Type</th>
                    <th>Username</th>
                    <th>EmailAddress</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($accounts as $account) {
                    echo "<tr>
                        <td>$account->AccountId</td>
                        <td>$account->AccountType</td>
                        <td>$account->Username</td>
                        <td>$account->EmailAddress</td>
                        <td><a class='btn btn-dark btn-sm' href='../Controller/activate_account.php?id=$account->AccountId'>Approve</a></td>
                    </tr>";
                }
                ?>

            <tbody>
        </table>
    </div>


</body>
<script src='../js/bootstrap.min.js'></script>