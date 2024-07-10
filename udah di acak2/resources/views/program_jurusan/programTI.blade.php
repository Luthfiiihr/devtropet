@extends('layouts.program')
@section('content')
    <section id="program-studi">
                <h2>Program Studi Teknik Informatika</h2>
                <p><a href="/profileTI" style="color: blue;">Teknik Informatika</a> adalah rumpun ilmu terapan yang mengaplikasikan bagaimana proses merancang suatu aplikasi website atau aplikasi mobile serta merancang infrastruktur teknologi, dengan kata lain Informatika merupakan ilmu yang mempelajari terkait penggunaan komputer untuk mengatur dan menganalisis data yang berukuran besar, baik data maupun informasi pada mesin berbasis komputasi.</p>
                <p>Dibawah ini adalah mata kuliah yang anda pelajari di kampus STT Terpadu Nurul Fikri prodi teknik informatika:</p>

                <h2>Peminatan TI</h2>
                <ul>
                    <li>Software Engineering</li>
                    <li>Network Engineering</li>
                    <li>Data Engineering</li>
                    <li>Cyber Security</li>
                </ul>

                <h2>Profil Lulusan</h2>
                <ul>
                    <li>Full Stack Developer</li>
                    <li>Front End & Back End Developer</li>
                    <li>Mobile Developer ( Android/IOS )</li>
                    <li>Game Developer</li>
                    <li>Cyber Security Analyst</li>
                    <li>Data Scientist</li>
                    <li>System Analyst</li>
                    <li>Cloud Engineer / Network Engineer</li>
                    <li>Dosen IT / Praktisi Akademis IT</li>
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
            <script src="assets1/programTI.js"></script>
@stop