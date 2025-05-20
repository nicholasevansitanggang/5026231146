<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>soal6</title>
        <style>
            .image-container {
                width: 100%;
                max-width: 120px; 
                height: 130px; 
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .image-container img {
                max-height: 100px; 
                width: auto;
                height: auto;
            }
            .custom-card {
                width: 100%;
                max-width: 110px;
                height: 130px; 
                border-radius: 10px; 
                border: 2px solid rgb(198, 198, 198);
                display: flex;
                flex-direction: column;
                justify-content: space-between; 
                align-items: center;
                text-align: center;
                margin: 0px; 
            }
            .custom-card img {
                width: 170px;
                height: 50px;
                padding: 5px; 
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                object-fit:contain;
            }

            .row {
                --bs-gutter-x: 2px;
                --bs-gutter-y: 2px;
                margin-left: -1px;
                margin-right: -1px;
            }

            .col-3 {
                padding-left: 2px;
                padding-right: 2px;
            }
            .custom-card .card-body {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-between; 
                padding: 5px;
            }
            .custom-card .card-title,
            .custom-card .card-text {
                font-size: 10px;
                text-align: left;
            }
            .card-header {
                font-weight: bold;
                color: white;
                font-size: 6px;
                text-align: left;
                padding: 5px 10px;
                height: auto;
                display: inline-block;
                align-items:center;
                justify-content: center;
                background: rgb(37, 106, 255);
                border-top-left-radius: 10px; 
                border-top-right-radius: 10px;
            }
            .custom-button {
        background-color: #010101; 
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-size: medium;
        border: 2px solid white;
        border-radius: 40px;
        padding: 2px 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        width: 130px; 
        height: 30px;
    }

    .custom-button:hover {
        background-color: #23272b;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
    }
    .card-horizontal {
        display: flex;
        flex-direction: row;
        background-color: rgb(255, 250, 250); 
        border-radius: 10px; 
    }
    .card-horizontal .card-img-top {
        width: 110px;
        height: 80px;
        object-fit: cover;
        border-radius: 10px; 
        padding-left: 10px;
    }
    .card-horizontal .card-body {
        padding-left: 15px;
    }
    .caption {
        text-align: center;
        font-size: 12px;
        color: white; 
        margin-top: 5px;
    }
    .centered-container {
        display: flex;
        justify-content: center; 
        align-items: center;
        width: 100%; 
        margin-top: 20px; 
    }
</style>

    </head>
    <body>
        <div class="container-fluid mt-3">
            <img src="logo.png" class="rounded-circle border border-dark p-1" alt="Cinque Terre" width="45" height="45"> 
        </div>
        <div class="container-fluid p-0 mt-3">
            <img class="img-fluid w-100" src="gambaratas.png" alt="image-container">
        </div>
        <div class="container-fluid p-0">
            <div class="img-fluid w-100" style="background-color: #d6d6d6; height: 30px;"></div>
        </div>
        <div class="container-fluid mt-3">
            <div class="text-center">
                <p class="h6 font-weight-bold" style="color: rgb(17, 20, 50); font-family: 'Poppins', sans-serif;">FEATURED EQUIPMENT</p>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row justify-content-between">
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <div class="card-header">Mostly Borrowed</div>
                        <img class="card-img-top" src="ligtningsony.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Lighting Set Sony</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <img class="card-img-top" src="kamera2.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Canon Lens EFS 18-135mm</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <img class="card-img-top" src="kamera3.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Sony PXW-Z90T XDCAM camcorder</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <div class="card-header">Mostly Borrowed</div>
                        <img class="card-img-top" src="kamera4.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Canon EOS 40000</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container-fluid mt-3">
            <div class="text-center">
                <p class="h6 font-weight-bold" style="color: rgb(17, 20, 50); font-family: 'Poppins', sans-serif;">CAMERA & LENS</p>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row justify-content-between">
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <img class="card-img-top" src="kamera1.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Lighting Set Sony</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <img class="card-img-top" src="kamera2.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Lighting Set Sony</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <img class="card-img-top" src="kamera3.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Lighting Set Sony</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <div class="card-header">Mostly Borrowed</div>
                        <img class="card-img-top" src="kamera4.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Lighting Set Sony</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row justify-content-between">
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <img class="card-img-top" src="kamera5.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Instax mini11</h6>
                            <p class="card-text"> 🔴 19 November 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <img class="card-img-top" src="kamera6.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Instax slim-go</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <div class="card-header">Mostly Borrowed</div>
                        <img class="card-img-top" src="kamera7.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Canon EOS 80D</h6>
                            <p class="card-text"> 🔴 20 November 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card custom-card">
                        <img class="card-img-top" src="kamera8.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title">Lighting Set Sony</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-2 mb-5">
            <button type="button" class="btn custom-button float-right">
                Click More <i class="fas fa-arrow-right"></i>
            </button> 
        </div>
        <div class="container-fluid mt-5">
            <div class="text-center">
                <p class="h6 font-weight-bold" style="color: rgb(17, 20, 50); font-family: 'Poppins', sans-serif; text-align: center;">BARANG SEDANG DIPINJAM</p>
            </div>
        </div>
        <div class="container-fluid centered-container mb-3">
            <div class="card card-horizontal" style="width: 370px; height: 150px; align-items: center;">
                <div style="text-align: center;">
                    <img class="card-img-top" src="kamera4.png" alt="Card image">
                    <div class="caption" style="color: rgb(17, 20, 50); font-family: 'Poppins', sans-serif;  font-size: 7px; font-weight:lighter; margin-top: 5px;">
                        E17_YANUAR - CREW ITS TV
                    </div>
                </div>
                <div class="card-body" style="width: 65%; padding-left: 15px;">
                    <h6 class="card-title" style="
                        color: rgb(17, 20, 50); 
                        font-family: 'Poppins', sans-serif; 
                        text-align: left; 
                        font-size: 12px; 
                        font-weight:600; 
                        margin-bottom: 5px;">
                        Liputan Pengukuhan Proffesor
                    </h6>
        
                    <h6 class="card-text" style="
                        color: rgb(17, 20, 50); 
                        font-family: 'Poppins', sans-serif; 
                        text-align: left; 
                        font-size: 10px; 
                        font-weight: lighter;
                        margin-top: 8px;">
                        Disewakan pada tanggal
                    </h6>
        
                    <h6 class="card-text" style="
                        color: rgb(17, 20, 50); 
                        font-family: 'Poppins', sans-serif; 
                        text-align: left; 
                        font-size: 10px; 
                        font-weight: lighter; 
                        margin-top: 0px;">
                        20/11/2024 - 21/11/2024
                    </h6>
        
                    <h6 class="card-text" style="
                        color: rgb(17, 20, 50); 
                        font-family: 'Poppins', sans-serif; 
                        text-align: left; 
                        font-size: 10px; 
                        font-weight: lighter; 
                        margin-top: 8px;">
                        <span style="color: blue; font-weight: bold;">07.00 - 19.00</span>
                    </h6>
        
                    <p class="card-text" style="
                    color: rgb(17, 20, 50); 
                    font-family: 'Poppins', sans-serif; 
                    text-align: left; 
                    font-size: 8px; 
                    font-weight: lighter; 
                    margin-top: 0px;">
                    List Barang 
                    <span style="font-weight: bold;font-size: 10px;">Canon EO400D, Tripod...</span>
                    </p>
                    <div style="
            position: absolute;
            bottom: 10px;
            right: 10px;">
            <button style="
                background-color: transparent;
                border: none;
                border-radius: 50%;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;">
                ➔
            </button>
        </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>