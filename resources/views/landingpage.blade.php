<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:wght@400;700&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <title>BaliHaven</title>
</head>

<body class="bg-[#E8F5F7]">
    <header class="p-6 bg-[#E8F5F7] border-b-4 border-solid border-[#1EAEDB]">
        <nav class="block w-full px-4 mx-auto">
            <div class="container flex flex-wrap items-center justify-between mx-auto">

                <a href="#" class="mr-4 block cursor-pointer py-1.5">
                    <span class="font-pacifico text-5xl">
                        <span class="text-[#6BAE75]">Bali</span><span class="text-[#1EAEDB]">Haven</span>
                    </span>
                </a>


                <div class="hidden lg:block">
                    <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                        <li
                            class="flex items-center p-1 text-sm gap-x-2 text-[#6BAE75] font-bold font-playfair-display hover:text-[#1EAEDB]">
                            <a href="#home" class="flex items-center">Home</a>
                        </li>
                        <li
                            class="flex items-center p-1 text-sm gap-x-2 text-[#6BAE75] font-bold font-playfair-display hover:text-[#1EAEDB]">
                            <a href="#tempatwisata" class="flex items-center">Tempat Wisata</a>
                        </li>
                        <li
                            class="flex items-center p-1 text-sm gap-x-2 text-[#6BAE75] font-bold font-playfair-display hover:text-[#1EAEDB]">
                            <a href="#akomodasi" class="flex items-center">Akomodasi</a>
                        </li>
                        <li
                            class="flex items-center p-1 text-sm gap-x-2 text-[#6BAE75] font-bold font-playfair-display hover:text-[#1EAEDB]">
                            <a href="#kontak" class="flex items-center">Tips & Kontak</a>
                        </li>
                        <li class="flex items-center p-1 text-sm gap-x-2 font-playfair-display">
                            <a href="{{ route(name: 'login') }}"
                                class="flex items-center bg-[#1EAEDB] text-white px-4 py-2 rounded-3xl font-bold hover:bg-[#6BAE75] transition-colors">
                                Login
                            </a>
                        </li>


                    </ul>
                </div>


            </div>
        </nav>
    </header>


    <section id="home" class="pt-20 mb-20 bg-cover bg-center"
        style="background-image: url('{{asset('images/hp1.jpg')}}');">
        <div class="container xl:w-[1400px] xl:px-6 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-3/5">
                    <h1 class="text-[#E8F5F7] font-bold text-2xl lg:text-4xl font-playfair"><br>Search Your Next</h1>

                    <h2 class="text-[#E8F5F7] font-bold text-2xl lg:text-8xl font-playfair">Dream<br>Vacation</h2>
                    <p class="text-[#E8F5F7] mb-10 leading-relaxed lg:text-lg font-poppins">
                        <br>Selamat datang di BaliHaven. Website ini akan membantu kalian untuk menemukan destinasi
                        terbaik yang ada di Bali, have an amazing holiyeay!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="tempatwisata" class="py-20 mb-10 bg-[#1EAEDB]">
        <div class="container xl:w-[1400px] xl:px-6 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="text-[#ffffff] mb-6 text-center lg:text-4xl font-playfair font-bold">Destinasi Wisata
                        Populer</h1>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                    <img src="{{asset('images/kutabitch.jpg')}}" alt="Destinasi 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 font-playfair text-[#1EAEDB] text-center">KUTA BEACH
                            PARADISE</h2>
                        <p class="hidden group-hover:block text-[#6BAE75] font-poppins transition-opacity duration-300">
                            Pantai Kuta adalah salah satu pantai paling terkenal di Bali. Dikenal dengan ombaknya yang
                            cocok untuk berselancar, pantai ini juga menawarkan pemandangan matahari terbenam yang
                            menakjubkan. Di sekitar pantai, terdapat berbagai bar, restoran, dan pusat perbelanjaan yang
                            menambah daya tariknya.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                    <img src="{{asset('images/tanahlot.jpg')}}" alt="Destinasi 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 font-playfair text-[#1EAEDB] text-center">TANAH LOT</h2>
                        <p class="hidden group-hover:block text-[#6BAE75] font-poppins transition-opacity duration-300">
                            Tanah Lot adalah kuil Hindu yang terletak di atas batu karang besar di tepi pantai. Kuil ini
                            dianggap sebagai salah satu tempat paling sakral di Bali dan menawarkan pemandangan matahari
                            terbenam yang spektakuler. Legenda lokal juga mengelilingi kuil ini, menambah daya tarik
                            mistisnya.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                    <img src="{{asset('images/nusa.jpg')}}" alt="Destinasi 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 font-playfair text-[#1EAEDB] text-center">NUSA PENIDA</h2>
                        <p class="hidden group-hover:block text-[#6BAE75] font-poppins transition-opacity duration-300">
                            Terletak di sebelah timur Bali, Nusa Penida adalah surga bagi pecinta alam. Pantai-pantai
                            seperti Kelingking Beach dan Crystal Bay menawarkan pemandangan spektakuler dan keindahan
                            bawah laut yang luar biasa.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                    <img src="{{asset('images/uluwatu.jpg')}}" alt="Destinasi 4" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 font-playfair text-[#1EAEDB] text-center">PURA LUHUR
                            ULUWATU</h2>
                        <p class="hidden group-hover:block text-[#6BAE75] font-poppins transition-opacity duration-300">
                            Pura Luhur Uluwatu adalah salah satu dari 20 tempat wisata untuk dikunjungi di Bali yang
                            menawarkan pengalaman spiritual dan estetika yang luar biasa. Lebih lanjut, Pura Uluwatu,
                            adalah permata yang berada di tebing setinggi 76 meter, menghadap Samudra Hindia. Dengan
                            arsitektur khas Bali dan pemandangan laut yang memukau, pura ini adalah salah satu destinasi
                            yang tidak boleh dilewatkan di Bali.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="akomodasi" class="py-20 bg-[#E8F5F7]">
        <div class="container xl:w-[1400px] xl:px-6 mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-[#6BAE75] mb-6 px-4 lg:text-4xl font-playfair font-bold">Akomodasi Terbaik</h1>
                <p class="text-[#1EAEDB] font-poppins text-lg">Temukan rekomendasi akomodasi terbaik di Bali dengan
                    pilihan hotel, resort, dan tempat penginapan lainnya yang sesuai dengan liburan impianmu.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <div class="p-6">
                        <h2 class="text-[#6BAE75] text-xl font-semibold mb-2 font-playfair">Kuta Beach Paradise</h2>
                        <p class="text-[#1EAEDB] mb-4 font-poppins">Penginapan nyaman dekat Pantai Kuta, ideal untuk
                            menikmati sunset.</p>
                        <a href="https://www.tripadvisor.co.id/Hotel_Review-g297697-d9842370-Reviews-Kuta_Beach_Stay-Kuta_Kuta_District_Bali.html"
                            target="_blank" class="text-[#1EAEDB] font-poppins hover:underline ">
                            Kunjungi Google
                        </a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <div class="p-6">
                        <h2 class="text-[#6BAE75] text-xl font-semibold mb-2 font-playfair">Tanah Lot Hotels</h2>
                        <p class="text-[#1EAEDB] mb-4 font-poppins">Dekat pura ikonik Tanah Lot, pilihan hotel dengan
                            pemandangan laut.</p>
                        <a href="https://www.tripadvisor.co.id/HotelsNear-g2283829-d379340-Tanah_Lot_Temple-Beraban_Bali.html"
                            target="_blank" class="text-[#1EAEDB] font-poppins hover:underline">
                            Lihat Daftar Harga Hotel
                        </a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <div class="p-6">
                        <h2 class="text-[#6BAE75] text-xl font-semibold mb-2 font-playfair">Nusa Penida Stay</h2>
                        <p class="text-[#1EAEDB] mb-4 font-poppins">Akomodasi eksotis di Nusa Penida, pilihan untuk
                            liburan tropis.</p>
                        <a href="https://www.tripadvisor.co.id/Hotels-g2538506-Nusa_Penida_Bali-Hotels.html"
                            target="_blank" class="text-[#1EAEDB] font-poppins hover:underline">
                            Kunjungi Google
                        </a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <div class="p-6">
                        <h2 class="text-[#6BAE75] text-xl font-semibold mb-2 font-playfair">Pura Luhur Uluwatu Hotels
                        </h2>
                        <p class="text-[#1EAEDB] mb-4 font-poppins">Hotel-hotel indah di sekitar Pura Uluwatu, terkenal
                            dengan pemandangan tebing.</p>
                        <a href="https://www.tripadvisor.co.id/HotelsNear-g1380108-d592779-Uluwatu_Temple-Pecatu_Bukit_Peninsula_Bali.html"
                            target="_blank" class="text-[#1EAEDB] font-poppins hover:underline">
                            Lihat Daftar Harga
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="kontak" class="py-20 bg-[#E8F5F7]">
        <div class="container xl:w-[1400px] xl:px-6 mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-[#6BAE75] mb-6 px-4 lg:text-4xl font-playfair font-bold">Tips dan Kontak Kami</h1>
                <!-- Warna judul -->
                <p class="text-[#1EAEDB] font-poppins text-lg">Dapatkan tips bermanfaat untuk perjalanan Anda dan
                    hubungi kami jika ada pertanyaan lebih lanjut.</p> <!-- Warna deskripsi -->
            </div>

            <!-- Tips Wisatawan -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-12">
                <h3 class="text-[#6BAE75] text-2xl font-playfair mb-4 font-semibold">Tips serta Saran untuk Wisatawan
                </h3>
                <!-- Warna sub-judul -->
                <ul class="list-disc list-inside text-[#1EAEDB] font-poppins space-y-4"> <!-- Warna teks list -->
                    <li><span class="font-semibold">Pakaian yang Tepat</span><br>Bali memiliki iklim tropis, sehingga
                        disarankan untuk memakai pakaian yang nyaman, ringan, dan bernapas seperti kaus katun dan celana
                        pendek.</li>
                    <li><span class="font-semibold">Perlindungan Matahari</span><br>Sinar matahari di Bali sangat kuat,
                        jadi
                        penting untuk menggunakan tabir surya dengan SPF tinggi, topi, dan kacamata hitam untuk
                        melindungi kulit dan mata Anda dari paparan langsung matahari.</li>
                    <li><span class="font-semibold">Minum Air yang Cukup</span><br>Jangan lupa untuk tetap terhidrasi
                        dengan
                        baik, terutama karena suhu tropis yang tinggi. Minumlah air mineral yang aman atau air minum
                        kemasan untuk menghindari dehidrasi.</li>
                    <li><span class="font-semibold">Etika Budaya</span><br>Hormati budaya dan adat istiadat setempat.
                        Kenakan pakaian yang sopan saat mengunjungi tempat-tempat suci, dan hindari tindakan atau
                        perkataan yang dianggap tidak pantas atau mengganggu.</li>
                    <li><span class="font-semibold">Jaga Lingkungan</span><br>Bali adalah surga alam yang indah, oleh
                        karena
                        itu, kita semua memiliki tanggung jawab untuk menjaganya. Tolong jangan buang sampah sembarangan
                        dan hindari penggunaan plastik sekali pakai sebisa mungkin. Dukunglah upaya pelestarian
                        lingkungan setempat dengan memilih aktivitas yang ramah lingkungan.</li>
                </ul>
            </div>

            <!-- Kontak WhatsApp -->
            <div class="bg-[#ffffff] rounded-xl shadow-lg p-8 text-center"> <!-- Latar belakang baru -->
                <h3 class="text-[#6BAE75] text-2xl font-playfair mb-4 font-bold">Kontak Kami</h3>
                <p class="text-[#1EAEDB] font-poppins mb-6">Jika Anda memiliki pertanyaan atau butuh bantuan, hubungi
                    kami
                    melalui WhatsApp:</p>
                <a href="https://wa.me/6287770913919" target="_blank" class="inline-block">
                    <img src="{{asset('images/walogo.jpeg')}}" alt="Logo WhatsApp Baru" class="mx-auto w-16 h-16 mb-4">
                </a>
            </div>

        </div>
    </section>


    <footer class="p-6 bg-[#1EAEDB] text-center text-[#ffffff] font-poppins">
        <span>Copyright &copy; BaliHaven - 2024</span>
    </footer>


</body>

</html>