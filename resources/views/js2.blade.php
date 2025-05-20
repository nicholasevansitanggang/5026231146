<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title></title>
        <script>
            function validasi() {
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;
                if (nrp.length == 0){
                    //alert("NRP harus diisi");
                    swal("Pesan!", "NRP harus diisi", "error");
                    document.getElementById("nrp").focus();
                    return false;
                }
                //defaultnya return true
                if (nama.length == 0){
                    //alert("NRP harus diisi");
                    swal("Pesan!", "Nama harus diisi", "error");
                    document.getElementById("nama").focus();
                    return false;
                }
                else if (nrp.length < 10){
                    //alert("NRP harus diisi");
                    swal("Pesan!", "NRP kurang dari 10", "error");
                    document.getElementById("nrp").focus();
                    return false;
                }
                else if (nrp.length > 10){
                    //alert("NRP harus diisi");
                    swal("Pesan!", "NRP lebih 10", "error");
                    document.getElementById("nrp").focus();
                    return false;
                }
                swal("Sukses!", "Message Sent!", "success");
                return false;
            }
        </script>
    </head>
    <body>
        <div class="container">
            <h1>My First Bootstrap Page</h1>
            <p>This is some text.</p>
            <p>
                <form id="'frmDaftar" method="get" action="https://google.com" onsubmit="return validasi();">
                NRP :
                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isikan 10 digit NRP, harus diisi">
                <br>
                Nama : 
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan nama">
                <br>
                <input type="submit" class="btn btn-success mt-2" value="Daftar">  </button>
                </form>
            </p>
        </div>
    </body>
</html>