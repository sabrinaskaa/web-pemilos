@extends('layout.main')
@section('container')
    <main class="mt-5">
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
        <div class="saran-text-row d-flex align-items-center">
            <div class="saran-text-card mt-3">
                <span class="kritik-saran">Kasih kata-kata mutiaranya dong</span>
                <a href="https://forms.gle/h79vZ7tSuQpmiGs99">
                <p class="link-gform mt-3" type="submit">https://forms.gle/h79vZ7tSuQpmiGs99</p>
                </a>
            </div>
        </div>
        <footer class="mt-auto text-white- text-center fixed-bottom mb-4">
            <a href="https://youtu.be/dQw4w9WgXcQ"><button class="btn btn-danger">ADMIN-SITE</button></a>    
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection