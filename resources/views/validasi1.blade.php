<html>
    <head>
        <title>
Pendaftaran ISE 
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function hello()
            {
                alert("Selamat Anda mendapatkan hadiah 1 Miliar !");
            }
        </script>
        <script>
            function validasi()
            {
                var nrp = document.getElementById("nrp").value ;
                var nama= document.getElementById("nama").value ;
                
                //cek kotaknya sudah diisi belum, klo kosong gk lanjut
                if (nrp.length == 0) 
                {
                    Swal.fire({
                    title: "Kesalahan input",
                    text: "NRP tidak boleh kosong",
                    icon: "warning"
                    });
                    return false ;
                }

                if (nama.length == 0) 
                {
                    Swal.fire({
                    title: "Kesalahan input",
                    text: "Nama tidak boleh kosong",
                    icon: "error"
                    });
                    return false ;
                    }
                
                
                if (/\d/.test(nama)) {
                    Swal.fire({
                    title: "Kesalahan input",
                    text: "Masa namamu ada angkanya",
                    icon: "question"
                    });
                    return false;
                }

                
                //ngecek namanya itu minimal 2 huruf
                if (nama.length < 2) {
                    Swal.fire({
                    title: "Kesalahan input",
                    text: "Namamu cuma 1 huruf saja?",
                    icon: "question"
                    });
                    return false;
                }

                //default return true ;
            }
        </script>
        </head>
    <body>
<div class="container">
    <form action="https://www.google.co.id" method="get" onsubmit="return validasi();">
        <b5>Form Pendaftaran ISE</b5>
        NRP :
        <input type="text" name="nrp" id="nrp" class="form-control" placeholder="Silahkan diisi 10 digit NRP, harus angka, harus diisi">
        <br>
        Nama :
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Isikan nama peserta yang valid">
        <input type="submit" class="btn btn-success" value="Daftar">

    </form>
</div>        
    </body>
</html>