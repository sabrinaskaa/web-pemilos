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
                <span class="kritik-saran">Saranya Kakak >\\<</span>
                <a href="https://forms.gle/AU9wrbTUmC2YYTks5">
                <p class="link-gform mt-3" type="submit">https://forms.gle/AU9wrbTUmC2YYTks5</p>
                </a>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="mt-auto text-center fixed-bottom mb-5">
                <button class="btn btn-danger buton">Logout</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection