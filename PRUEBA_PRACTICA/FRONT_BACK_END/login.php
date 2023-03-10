<?php
include("./src/login.php");

?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type='text/javascript'>
    </script>
    <style>
        body {
            /*webgradients/*/
            background-image: linear-gradient(to top, #4fb576 0%, #44c489 30%, #28a9ae 46%, #28a2b7 59%, #4c7788 71%, #6c4f63 86%, #432c39 100%);
        }

        button {
            /* margin-left: 1.9rem;   */
            width: 100%;
        }

        a {

            font-size: 13px;
            text-decoration: none;
        }

        .card {
            /* background-color: rgb(111, 186, 247); */
            background-color: #21232A;
            margin-top: 4rem;
            height: 29.5rem;

        }

        .logo {
            margin-top: 2rem;
            height: 90px;
            width: 190px;
        }

        .login {

            width: 40%;
            height: 20%;
            /* display: flex; */
            /* margin-left: 5.5rem; */
        }
    </style>

</head>

<body>
    



    <div class="form-row" style="display: flex; align-items: center;  justify-content: center; margin-top: 5rem;">


        <section>
            <!--poner en el centro la ventana de login-->

            <div class="col-md-12">
                <div class="card" data-aos="fade-up" data-aos-duration="2000" style="width: 20rem">

                    <div class="card-body">
                        <div class="form-row" style="display: flex; align-items: center;  justify-content: center;">

                            <img class="login" src="./img/login.svg" alt="">
                        </div>


                        <h5 class="card-title">Login Here</h5>
                        <form name="iniciarsesion" method="POST">
                            <div class="form-group">
                                <label for="User">Usuario</label>
                                <input type="user" class="form-control" name="user" placeholder="Ingrese su usuario" required>
                                <br>
                                <label for="Password">Contrase??a</label>
                                <input type="password" class="form-control" maxlength="20" name="password" placeholder="Ingrese su contrase??a" required>
                                <br>
                                <button style="font-size: 17px; border-radius: 25px; margin-bottom:14px" class=" btn btn-primary" type="submit">Ingresar</button>
                                <a href="#">??Olvidaste tu contrase??a?</a><br>

                                <a href="#">??No tienes cuenta?</a>
                                <!-- <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div> -->

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>
    </div>
    <script>
        AOS.init();
    </script>

</body>


</html>
