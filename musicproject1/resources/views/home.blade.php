@extends('layout.template')
  
@section('content')
<main>


<div class="container">
            <!-- section 1 -->
            <section></section>
            <div class="row">
                <div class="col-4">
                    <div class="card w-85 border-0 mt-50">
                        <div class="card-body">
                            <h1 class="card-title" id="welcome-title">Welcome to CookSnap</h1>
                            <a href="#" class="btn mt-120 explore" id="button">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <img class="mt-30" src="img/section1.png" alt="" width="100%">
                </div>
            </div>
            </section>
        </div>

            <!-- section 2 -->
            <section>
            <div class="row">
                <div class="col-5">
                    <img src="img/section2.png" alt="" width="100%">
                </div>
                <div class="col-7">
                    <div class="card w-85 border-0 mt-50">
                        <div class="card-body">
                            <h1 class="card-title" id="subjudul">About Us</h1>
                            <h1 class="card-title" id="welcome-title">CookSnap</h1>
                            <p class="mt-30">Memasak adalah salah satu hal yang diperlukan dalam 
                                kehidupan sehari - hari. Namun sering kali kita kehabisan resep, 
                                sehingga muncul pertanyaan harus masak apa hari ini? </p>
                            <p class="mt-10">Resep kita bisa menjadi solusi masalah ini, kalian 
                                bisa melihat berbagai resep masakan mulai dari yang simple dan pemula 
                                friendly yang tentunya lengkap dengan bahan dan penjelasan.</p>
                            <a href="#" class="btn mt-50 explore" id="button">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            </section>

        <!-- section 3 -->
        <section>
            <div class="container mt-50">
                <h1 class="card-title d-flex justify-content-center" id="subjudul">Some of Out</h1>
                <h1 class="card-title d-flex justify-content-center" id="welcome-title">Resep Favorit</h1>
                <div class="contaianer">
                    <div class="row mt-50">
                        <div class="col-4">
                            <div class="card border-0">
                                <img class="card-img-top" src="img/salted_egg.png" width="50%">
                                <div class="card-body">
                                <h5 class="card-title">Rice with Salted Egg Chicken</h5>
                                <p class="card-text">Menu makanan berupa nasi dengan crispy chicken 
                                    yang dibalur saus kental creamy yang terbuat dari telur asin. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-0">
                                <img class="card-img-top" src="img/ramen.png" width="100%">
                                <div class="card-body">
                                <h5 class="card-title">Japanese Ramen</h5>
                                <p class="card-text">Masakan mi kuah yang berasal dari China, 
                                    Orang Jepang juga menyebutnya sebagai chuka soba atau shina soba yang dalam bahasa Jepang berarti mie</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-0">
                                <img class="card-img-top" src="img/vegetable_soup.png" width="100%">
                                <div class="card-body">
                                <h5 class="card-title">Vegetable Soup</h5>
                                <p class="card-text">Soup ini bisa mempunyai rasa yang berbeda 
                                    tergantung dari bahan bahan yang digunakan, kalian bisa membuat soup yang creamy maupun bening. Sayuran yang digunakan pun relatif.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                
        <!-- section 4 -->
        <section>
            <div class="cocntainer">
                <div class="row mt-50 d-flex align-items-center justify-content-center">
                    <div class="col-5 card-title d-flex justify-content-center">
                        <div class="card border-0">
                            <h1 class="card-title" id="welcome-title">Contact Us</h1>
                            <img class="card-img-top w-10 mt-30" src="img/phone_ikon.png">
                            <h1 class="card-title mt-10" id="subjudul">+62 1234 5678 9101</h1>
                            <img class="card-img-top w-10 mt-30" src="img/email_ikon.png">
                            <h1 class="card-title mt-10" id="subjudul">cooksnap@gmail.com</h1>
                    </div>
                    </div>
                        <div class="col-7">
                        <img src="img/section4.png" alt="" class="w-80">
                    </div>
                </div>
            </div>
        </section>

        <!-- section 5 -->
        <section>
            <div class="container">
                <h1 class="card-title d-flex justify-content-center" id="subjudul">Review</h1>
                <h1 class="card-title d-flex justify-content-center" id="welcome-title">Testimoni Pengguna</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div id="satu" class="carousel-item active d-flex justify-content-center text-center">
                        <div class="card w-50 border-0 mt-30 d-flex justify-content-center">
                                <img style="margin-left: auto; margin-right: auto;" class="d-flex justify-content-center" src="img/testi.png" width="20%">
                                <div class="card-body">
                                <h2 class="card-title">Rachel</h2>
                                <h5 class="card-title">Ibu Rumah Tangga</h5>
                                <p class="card-text">Sangat membantu menemukan resep rumahan yang simpel. Adanya pilihan 
                                kategori memudahkan saya untuk memilih menu resep masakan harian 
                                untuk keluarga. Hasilnya pun kebanyakan memuaskan sesuai selera lidah saya.</p>
                                </div>
                        </div>
                        </div>
                        <div id="dua" class="carousel-item">
                        <div class="card w-50 border-0 mt-30 d-flex justify-content-center">
                                <img style="margin-left: auto; margin-right: auto;" class="d-flex justify-content-center" src="img/testi2.png" width="20%">
                                <div class="card-body">
                                <h2 class="card-title">Aisyah</h2>
                                <h5 class="card-title">Guru</h5>
                                <p class="card-text">Paling cocok sama resep di sini. Mudah diikuti dan rasanya enak-enak.</p>
                                </div>
                        </div>
                        </div>
                        <div id="tiga" class="carousel-item">
                        <div class="card w-50 border-0 mt-30 d-flex justify-content-center">
                                <img style="margin-left: auto; margin-right: auto;" class="d-flex justify-content-center" src="img/testi3.png" width="20%">
                                <div class="card-body">
                                <h2 class="card-title">Gita</h2>
                                <h5 class="card-title">Sales</h5>
                                <p class="card-text">Suka banget scroll-scroll menu makanan di sini, selalu pengen recook!</p>
                                </div>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <div class="row mb-150"></div>
                </div>
            </div>
        </section>
  <!-- <div class="content">
      <h1>Welcome to MusicMe</h1>
      <p>MusicMe adalah platform untuk belajar dan berbagi tentang musik. Kami menyediakan berbagai kursus, chord, dan informasi seputar dunia musik.</p>
      <button class="next-learning" onclick="window.location.href='{{ route('course') }}'">Next Learning</button>
  </div> -->
</main>

<link rel="stylesheet" href="css/home.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection
