@extends('Layouts.app')

@section('title', 'Beranda - RedConnect')

@section('content')
    <!-- Hero Section -->
<section class="bg-red-50 py-16 px-6 mt-12">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center md:items-start py-16 px-6 gap-12">
        <!-- Gambar -->
        <div class="md:w-1/2 w-full flex justify-center md:justify-start">
            <div class="w-full md:w-96 rounded-full overflow-hidden shadow-lg">
                <img src="{{ asset('asset/img/logo fordats.jpg') }}" alt="Logo Donor Darah Indonesia" class="object-cover w-full h-72 md:h-96" />
            </div>
        </div>
        <!-- Teks -->
        <div class="md:w-1/2 space-y-5">
            <h1 style="color: #625757;" class="text-4xl font-bold leading-tight">Selamat Datang di ForDatS.</h1>
            <p class="text-gray-700 text-lg leading-relaxed text-justify">
                ForDats hadir agar dapat memudahkan anda dalam mengolah data.....
            </p>
        </div>
    </div>
</section>


    <!-- Script Carousel -->
    <script>
        function scrollCarousel(direction) {
            const carousel = document.getElementById("carousel");
            const scrollAmount = carousel.offsetWidth;
            carousel.scrollBy({
                left: scrollAmount * direction,
                behavior: 'smooth'
            });
        }
    </script>
@endsection
