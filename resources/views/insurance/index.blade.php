<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <title>Insurance</title>
    <style>
        .insurance__page {
            padding-left: 15px;
            padding-right: 15px;
        }

        .insurance__title,
        .insurance__container {
            margin: 30px 20px 40px 20px;
        }

        .insurance--search {
            margin-bottom: 30px;
        }

        .seacrh--title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .input-group {
            padding: 0 10px;
        }

        .btn--blue {
            background-color: rgb(0, 91, 137);
        }

        .product__insurance--info{
            font-size: 16px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 10px;
        }

        .info{
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .info--title{
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="insurance__page">
        <div class="insurance__title">
            <h2>Kiểm tra bảo hành</h2>
        </div>
        <div class="insurance__container">
            <div class="insurance--search">
                <p class="seacrh--title">
                    Kiểm tra hàng chính hãng & hạn bảo hành
                </p>
                <form action="{{ route('insurance.search') }}" method="GET">
                    @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="code" placeholder="code" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn--blue" type="button">Tìm kiếm</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>