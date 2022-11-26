<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d508f9c7b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Wasit</title>
</head>
<body>
    
    <main>
        <div class="container-home">
            <div class="one mb-2">
                <div class="kiri">
                    <button class="btn btn-light btn-back"><i class="fa-solid fa-circle-arrow-left"></i></button>
                </div>

                <div class="tengah">
                    <button class="btn btn-light btn-play" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-circle-play"></i></button>
                    <!-- <div class="score">

                        <div class="tim-kiri pt-4">
                            <p>Madura United</p>
                            <h1>0</h1>
                        </div>

                        <div class="tengah pt-4">
                            <h4>VS</h4>
                        </div>

                        <div class="tim-kanan pt-4">
                            <p>Sumenep FC</p>
                            <h1 style="padding-left: 40px">0</h1>
                        </div>

                    </div> -->
                </div>

                <div class="kanan">
                    <button class="btn btn-light btn-warning"><i class="fa-solid fa-triangle-exclamation"></i></button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih tim pada posisi kanan</h1>
                            </div>
                            <div class="modal-body">
                                <button class="btn btn-dark w-100" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#modal1">
                                    <h1>Samsudin(MU)</h1>
                                    <h1>Joko(MU)</h1>
                                </button>

                                <button class="btn btn-dark mt-3 w-100" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#modal1">
                                    <h1>Sugiri(SF)</h1>
                                    <h1>Widodo(SF)</h1>
                                </button>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Server-->
                <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Server</h1>
                            </div>
                            <div class="modal-body">
                                <button class="btn btn-dark w-100" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                                    <h1>Samsudin(MU)</h1>
                                </button>
                                
                                <button class="btn btn-dark w-100 mt-2" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                                    <h1>Joko(MU)</h1>
                                </button>

                                <button class="btn btn-dark w-100 mt-2" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                                    <h1>Sugiri(SF)</h1>
                                </button>

                                <button class="btn btn-dark w-100 mt-2" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                                    <h1>Widodo(SF)</h1>
                                </button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Back</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Receiver -->
                <div class="modal fade" id="penerima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Receiver</h1>
                            </div>
                            <div class="modal-body">
                                <a href="play.php" class="btn btn-dark w-100">
                                    <h1>Sugiri(SF)</h1>
                                </a>

                                <a href="play.php" class="btn btn-dark w-100 mt-3">
                                    <h1>Widodo(SF)</h1>
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal1">Back</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="two">
                <div class="kiri">
                    <div class="atas">
                        <button class="btn btn-light"><i class="fa-solid fa-minus"></i> <img src="assets/img/cock.png" alt=""></button>
                    </div>
                    <div class="bawah">
                        <button class="btn btn-light"><h1>SCORE</h1></button>
                    </div>
                </div>
                
                <div class="tengah">
                    <div class="lapangan">
                        <img src="assets/img/lapangan.jpg" alt="">
                        <div class="player1-a">
                            <h4>Samsudin</h4>
                        </div>
                        <div class="player1-b">
                            <h4>Joko</h4>
                        </div>
                        <div class="player2-a">
                            <h4>Sugiri</h4>
                        </div>
                        <div class="player2-b">
                            <h4>Widodo</h4>
                        </div>
                    </div>

                    <div class="skor">
                        <!-- <table class="table table-bordered border-dark">
                            <thead>
                                <tr>
                                    <td>Samsudin</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Joko</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Sugiri</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Widodo</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </thead>
                        </table> -->
                    </div>
                </div>

                <div class="kanan">
                    <div class="atas">
                        <button class="btn btn-light"><i class="fa-solid fa-plus"></i> <img src="assets/img/cock.png" alt=""></button>
                    </div>
                    <div class="bawah">
                        <button class="btn btn-light"><h1>SCORE</h1></button>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>