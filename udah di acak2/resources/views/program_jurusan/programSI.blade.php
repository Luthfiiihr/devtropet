@extends('layouts.program')
@section('content')

<section id="program-studi">
    <h2>Program Studi Sistem Informasi</h2>
    <p><a href="/profileSI" style="color: blue;">Sistem Informasi</a> adalah merupakan ilmu yang mengedepankan analisa-analisa data sesuai dengan fakta-fakta yang terjadi. 
        Sistem informasi berfokus pada pra-development pada suatu teknologi yang dibuat serta melakukan evaluasi selama development berlangsung.</p>

    <h2>Peminatan SI</h2>
    <ul>
        <li>Bisnis Sistem Enterprise</li>
        <li>User Experience</li>
        <li>E-Bussiness</li>
    </ul>

    <h2>Profil Lulusan</h2>
    <ul>
        <li>Enterprise Resource Planning (ERP)</li>
        <li>IT Planner</li>
        <li>UX Researcher / Designer</li>
        <li>Project Management</li>
        <li>Personal Freelancer IT,</li>
        <li>Dosen / Praktisi Sistem Informasi</li>
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