<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Control Panel</title>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- custom style -->
    <link href="assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/css.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="assets/js/script.js" type="text/javascript"></script>

</head>

<body>

    <div class="container padding-y">
        <div class="card mx-auto" style="max-width: 420px; margin:100px;">
            <div class="card-body text-center">
                <h4 class="card-title mb-4">Control Panel</h4>

                <form action="assets/PHP/controlengines.php" method="post">
                    <div class="form-group">
                        <label for="engine1">Engine 1</label>
                        <input name="e1"  class="form-range slider" type="range" min="0" max="180" step="1" value="90">
                    </div>
                    <div class="form-group">
                        <label for="engine2">Engine 2</label>
                        <input name="e2" class="form-range slider" type="range" min="0" max="180" step="1" value="90">
                    </div>
                    <div class="form-group">
                        <label for="engine3">Engine 3</label>
                        <input name="e3" class="form-range slider" type="range" min="0" max="180" step="1" value="90">
                    </div>
                    <div class="form-group">
                        <label for="engine4">Engine 4</label>
                        <input name="e4" class="form-range slider" type="range" min="0" max="180" step="1" value="90">
                    </div>
                    <div class="form-group">
                        <label for="engine5">Engine 5</label>
                        <input name="e5" class="form-range slider" type="range" min="0" max="180" step="1" value="90">
                    </div>
                    <div class="form-group">
                        <label for="engine6">Engine 6</label>
                        <input name="e6" class="form-range slider" type="range" min="0" max="180" step="1" value="90">
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="hidden" name="switch1" value="off">
                        <input type="checkbox" name="switch1" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">OFF/ON</label>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>

                </form>

                <br>
                <hr>
                <br>

                <form action="assets/PHP/controldirection.php" method="post">
                    <div class="form-group">
                    <input name="path" type="submit" value="forward">
                    </div>
                    <div class="form-group">
                    <input name="path" type="submit" value="left">
                    <input name="path" type="submit" value="stop">
                    <input name="path" type="submit" value="right">
                    </div>
                    <div class="form-group">
                    <input name="path" type="submit" value="backward">
                    </div>
                </form>

            </div>
        </div>
    <div>

</body>

</html>