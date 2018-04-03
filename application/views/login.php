<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/login/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/login/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Kullanıcı Yetkilendirmesi</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/assets/login/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="/assets/login/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/assets/login/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
</head>

<body>
<div class="wrapper wrapper-full-page">
    <div class="full-page lock-page" filter-color="black" data-image="/assets/login/img/lock.jpeg">
        <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
        <div class="content">
            <form action="<?php echo site_url('guvenlik/giris')?>" method="post">
                <div class="card card-profile card-hidden">
                    <div class="card-avatar">
                            <img class="avatar" src="/assets/login/img/faces/avatar.png" alt="...">
                    </div>
                    <div class="card-content">
                        <img class="avatar" src="/assets/login/img/login.png" alt="...">
                        <div class="form-group label-floating">
                            <label class="control-label">Kullanıcı Adı</label>
                            <input type="text" name="login" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Şifre</label>
                            <input type="password" name="pass" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-rose btn-round">Giriş Yap</button>
                    </div>
                </div>
            </form>
        </div>
        <footer class="footer">

        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="/assets/login/js/core/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="/assets/login/js/core/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/login/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/login/js/core/material.min.js" type="text/javascript"></script>
<script src="/assets/login/js/core/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="/assets/login/js/core/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="/assets/login/js/plugins/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="/assets/login/js/plugins/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="/assets/login/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets/login/js/plugins/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="/assets/login/js/plugins/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="/assets/login/js/plugins/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="/assets/login/js/plugins/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="/assets/login/js/plugins/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="/assets/login/js/plugins/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="/assets/login/js/plugins/sweetalert2.min.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/assets/login/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="/assets/login/js/plugins/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="/assets/login/js/plugins/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="/assets/login/js/material-dashboard-angular.js"></script>
<!-- Material Dashboard Init Off Canvas Menu -->
<script src="/assets/login/js/init/initMenu.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="/assets/login/js/demo.js"></script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
