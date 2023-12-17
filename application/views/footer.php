<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script type="text/javascript" src="<?php echo base_url('application/assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('application/assets/js/bootstrap.min.js'); ?>"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

    <!-- Additional CSS for the footer -->
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .wrapper {
            flex: 1;
        }

        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 20px 0;
            margin-top: auto;
            width: 100%;
            position: relative;
        }

        /* Menyesuaikan agar footer tetap berada di tengah vertikal */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <!-- Konten utama halaman -->
    <div class="wrapper">
        <!-- ... (Tambahkan konten utama Anda di sini) -->
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <p>Email: aneudimaskeysa@its.com</p>
                    <p>Phone: +123 456 789</p>
                </div>
                <div class="col-md-4">
                    <h4>Follow Us</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="text-grey"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-grey"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-grey"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Newsletter</h4>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button" style="background-color: rgba(192, 192, 192, 0.5); color: white;font-weight: bold;">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; <?php echo date('Y'); ?> Your Blog. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer Section -->
</body>

</html>