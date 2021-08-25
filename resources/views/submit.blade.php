<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==========     Bootstrap CDN     ========== -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- ==========     Font awesome icons     ========== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- ==========     CSS File     ========== -->
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/navbar.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive-style.css" rel="stylesheet" type="text/css" />

    <title>Pemilihan Ketua Osis</title>
</head>
<body>

    <!-- ==========     start #main-site     ========== -->
    <main>
        <div class="success-card-row d-flex align-items-center">
            <div class="success-card">
                <i class="far fa-thumbs-up"></i>
                <span class="success-title">Anda berhasil memilih!</span>
            </div>
        </div>
        <div class="success-text-row d-flex align-items-center">
            <div class="success-text-card">
                <span class="success-text">Terimakasih atas partisipasinya.</span>
            </div>
        </div>
        
        <div class="success-text-row d-flex align-items-start mt-4">
            <div class="col-md-5">
                <form>
                    <div class="mb-3" style="">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Ketik nama">
                    </div>
                    <div class="mb-3">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" placeholder="Ketik Pesan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>

        {{-- <footer class="mt-auto text-white- text-center fixed-bottom mb-4">
            <p>Dibuah oleh dampva <a href="https://www.instagram.com/awshitpostid/">@awshitpostid</a></p>    
        </footer> --}}
          
    </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>