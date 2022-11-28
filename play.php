<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d508f9c7b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/play.css">
    <title>Wasit</title>
</head>
<body>
    
    <main>
        <div class="container-home">
            <div class="one mb-2">
                <div class="kiri-1">
                    <button class="btn btn-warning btn-tantangan-kiri" data-bs-toggle="modal" data-bs-target="#tantangan_kiri">2</button>
                    <h5>Tantangan tersisa</h5>
                </div>
                
                <div class="kiri-2">
                    <button class="btn btn-primary btn-back"><i class="fa-solid fa-reply"></i></button>
                </div>

                <div class="tengah">
                    <button class="btn btn-light btn-play" id="play"><i class="fa-solid fa-circle-play"></i></button>
                    <div class="score">

                        <div class="atas">
                            <div class="kiri">
                                <center>
                                    <h1>1 - 1</h1>
                                </center>
                            </div>
                            <div class="kanan">
                                <center>
                                    <h1>1 - 1</h1>
                                </center>
                            </div>
                        </div>

                        <div class="bawah">
                            <div class="tim-a">
                                <input class="form-control" type="number" name="" id="player_kiri" disabled>
                            </div>

                            <i class="fa-solid fa-minus pt-4"></i>

                            <div class="tim-b">
                                <input class="form-control" style="text-align: right;" type="number" name="" id="player_kanan" disabled>
                            </div>
                            
                        </div>

                    </div>
                </div>

                <div class="kanan-1">
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pelanggaran"><i class="fa-solid fa-triangle-exclamation"></i></button>
                </div>

                <div class="kanan-2">
                    <button class="btn btn-warning btn-tantangan-kanan" data-bs-toggle="modal" data-bs-target="#tantangan_kanan">2</button>
                    <h5>Tantangan tersisa</h5>
                </div>

                <!-- modals -->
                
                <!-- Modal tantangan kiri-->
                <div class="modal fade" id="tantangan_kiri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tantangan Samsudin/Joko</h1>
                            </div>

                            <div class="modal-body">
                                <button class="btn btn-success w-100" style="font-size: 30px">Sukses</button>
                                <button class="btn btn-danger w-100 mt-2" style="font-size: 30px">Gagal</button>
                                <button class="btn btn-primary w-100 mt-2" style="font-size: 30px">Tidak ada keputusan</button>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 20px;">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal tantangan kanan-->
                <div class="modal fade" id="tantangan_kanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tantangan Sugiri/Widodo</h1>
                            </div>
                            
                            <div class="modal-body">
                                <button class="btn btn-success w-100" style="font-size: 30px">Sukses</button>
                                <button class="btn btn-danger w-100 mt-2" style="font-size: 30px">Gagal</button>
                                <button class="btn btn-primary w-100 mt-2" style="font-size: 30px">Tidak ada keputusan</button>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 20px;">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modal Pelanggaran -->
                <div class="modal fade" id="pelanggaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            </div>
                            <div class="modal-body">
                                <div class="pelanggaran-pemain">
                                    <div class="row col-md-12">
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100px; height: 100px;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/yellowcard.jpg" alt="" style="width: 100px; height: 100px;">
                                            <p>Kartu kuning</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100%; height: 100px;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100%;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100%;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100%;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100%;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100%;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100%;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/img/redcard.jpg" alt="" style="width: 100%;">
                                            <p>Kartu Merah</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
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
                        <button class="btn btn-light" id="score_kiri"><h1>SCORE</h1></button>
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
                        <table class="table table-bordered border-dark">
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
                        </table>
                    </div>
                </div>

                <div class="kanan">
                    <div class="atas">
                        <button class="btn btn-light"><i class="fa-solid fa-plus"></i> <img src="assets/img/cock.png" alt=""></button>
                    </div>
                    <div class="bawah">
                        <button class="btn btn-light" id="score_kanan"><h1>SCORE</h1></button>
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