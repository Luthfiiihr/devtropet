@extends('layouts.program')
@section('content')


<section id="program-studi">
    <h2>Program Studi Bisnis Digital</h2>
    <p><a href="/profileBD" style="color: blue;">Bisnis Digital</a> adalah  rumpun ilmu terapan yang mengaplikasikan bagaimana proses merancang suatu bisnis digital. 
        Ilmu yang akan diperoleh dari jurusan ini merupakan perpaduan dari bidang ilmu manajemen, ilmu bisnis, sistem informasi, hingga teknik informatika.</p>

        <p>Jurusan Bisnis Digital sendiri mencakup banyak bidang, sehingga mata kuliah yang dipelajari pun sangat beragam. 
            Mahasiswa akan mendapatkan ilmu menarik yang berkaitan dengan start-up digital, big data, hingga artificial intelligence (AI). Makanya, dosen yang akan mengajar di jurusan ini pun berasal dari berbagai bidang, mulai dari ekonomi, teknik informatika, komunikasi, hingga hukum.</p>

    <h2>Peminatan BD</h2>
    <ul>
        <li>E-Business</li>
        <li>Enterprise Information System</li>
        <li>Visual Communication Design</li>
    </ul>


    <h2>Profil Lulusan</h2>
    <ul>
        <li>Digital Marketing Spesialis</li>
        <li>Analisis bussiness intellegence</li>
        <li>Fintech Praktisir</li>
        <li>Product Digital Praktisi</li>
        <li>Enterpreneur Digital</li>
        <li>Startup</li>
    </ul>
</section>

<section id="kurikulum">
    <h2>Semester</h2>
    <div class="semester-selector">
        <button onclick="showCourses(1)">Semester 1</button>
        <button onclick="showCourses(2)">Semester 2</button>
        <button onclick="showCourses(3)">Semester 3</button>
        <button onclick="showCourses(4)">Semester 4</button>
        <button onclick="showCourses(5)">Semester 5</button>
        <button onclick="showCourses(6)">Semester 6</button>
        <button onclick="showCourses(7)">Semester 7</button>
        <button onclick="showCourses(8)">Semester 8</button>
    </div>
    <div id="courses-container"></div>
</section>
<script src="assets1/programSI.js"></script>
@stop