document.querySelectorAll('.dropdown').forEach(drop => {
    drop.addEventListener('mouseenter', function() {
        this.querySelector('.dropdown-content').style.display = 'block';
    });
    drop.addEventListener('mouseleave', function() {
        this.querySelector('.dropdown-content').style.display = 'none';
    });
});

document.querySelectorAll('.dropdown-sub').forEach(subDrop => {
    subDrop.addEventListener('mouseenter', function() {
        this.querySelector('.dropdown-sub-content').style.display = 'block';
    });
    subDrop.addEventListener('mouseleave', function() {
        this.querySelector('.dropdown-sub-content').style.display = 'none';
    });
});

const courses = {
    1: [
        { no: 1, name: "Pembentukan Karakter", sks: 2 },
        { no: 2, name: "Pendidikan Agama", sks: 2 },
        { no: 3, name: "Bahasa Indonesia", sks: 2 },
        { no: 4, name: "Matematika Komputer", sks: 3 },
        { no: 5, name: "Dasar-Dasar Pemrograman", sks: 3 },
        { no: 6, name: "Pengantar Teknologi Informasi", sks: 3 },
        { no: 7, name: "Sistem Operasi", sks: 3 },
        { no: 8, name: "Pemrograman Web 1", sks: 3 }
    ],
    2: [
        { no: 1, name: "Komunikasi Efektif", sks: 2 },
        { no: 2, name: "Basis Data", sks: 4 },
        { no: 3, name: "Bahasa Inggris 1", sks: 2 },
        { no: 4, name: "Pendidikan Pancasila dan Kewarganegaraan", sks: 2 },
        { no: 5, name: "Statistik dan Probabilitas", sks: 2 },
        { no: 6, name: "User Interface & User Experience", sks: 3 },
        { no: 7, name: "Jaringan Komputer", sks: 3 },
        { no: 8, name: "Pemrograman Web 2", sks: 3 }
    ],
    3: [
        { no: 1, name: "Kewirausahaan", sks: 2 },
        { no: 2, name: "Bahasa Inggris 2", sks: 2 },
        { no: 3, name: "Rekayasa Perangkat Lunak", sks: 3 },
        { no: 4, name: "Big Data", sks: 3 },
        { no: 5, name: "Pengantar Sistem Informasi", sks: 2 }, 
        { no: null, name: "Peminatan E-Business"},
        { no: 6, name: "Pengantar Bisnis dan Manajemen", sks: 3 },
        { no: 7, name: "Pengantar Bisnis Digital", sks: 3 },
        { no: 8, name: "Sistem Informasi AkuntansI", sks: 3 },
        { no: null, name: "Peminatan Enterprise Information System"},
        { no: 6, name: "Jaminan Kualitas Sistem Informasi", sks: 3 },
        { no: 7, name: "Sistem Informasi SDM", sks: 3 },
        { no: 8, name: "Enterprise Resource Planning", sks: 3 },
        { no: null, name: "Peminatan Visual Communication Design"},
        { no: 6, name: "Dasar-dasar Desain", sks: 3 },
        { no: 7, name: "Presentasi dan Komunikasi Visual", sks: 3 },
        { no: 8, name: "Multimedia Interaktif", sks: 3 }
    
    ],
    4: [
        { no: 1, name: "Etika Profesi", sks: 2 },
        { no: 2, name: "Manajemen Proyek", sks: 3 },
        { no: 3, name: "Kecerdasan Artifisial", sks: 3 },
        { no: 4, name: "Cloud Computing", sks: 2 },
        { no: 5, name: "Tata Kelola Teknologi Informasi", sks: 4 },
        { no: null, name: "Peminatan E-Business"},
        { no: 6, name: "Supply Chain & Production Management", sks: 3 },
        { no: 7, name: "Digital Marketing", sks: 3 },
        { no: null, name: "Peminatan Enterprise Information System"},
        { no: 6, name: "Supply Chain Management", sks: 3 },
        { no: 7, name: "Digital Marketing", sks: 3 },
        { no: null, name: "Peminatan Visual Communication Design"},
        { no: 6, name: "Desain Grafis", sks: 3 },
        { no: 7, name: "Pemodelan 3D", sks: 3 }
        
    ],
    5: [
        { no: 1, name: "(Mata Kuliah Pilihan)", sks: 3 },
        { no: 2, name: "(Mata Kuliah Pilihan)", sks: 3 },
        { no: 3, name: "(Mata Kuliah Pilihan)", sks: 3 },
        { no: 4, name: "(Mata Kuliah Pilihan)", sks: 3 },
        { no: 5, name: "(Mata Kuliah Pilihan)", sks: 3 },
        { no: 6, name: "(Mata Kuliah Pilihan)", sks: 3 },
        { no: 7, name: "(Mata Kuliah Pilihan)", sks: 3 }
    ],
    6: [
        { no: 1, name: "Keterampilan Kerjasama", sks: 3 },
        { no: 2, name: "Teknik Identifikasi Masalah", sks: 3 },
        { no: 3, name: "Analisis dan Desain Solusi", sks: 3 },
        { no: 4, name: "Pengujian Desain Solusi", sks: 3 },
        { no: 5, name: "Technopreneurship", sks: 4 },
        { no: null, name: "Jalur Magang" },
        { no: 6, name: "Proyek Kerja Praktek 1", sks: 4 },
        { no: null, name: "Jalur Studi Independen"},
        { no: 6, name: "Proyek Studi Independen 1", sks: 4 },
        { no: null, name: "Jalur Riset"},
        { no: 6, name: "Proyek Magang Penelitian 1", sks: 4 },
        { no: null, name: "Jalur Kewirausahaan"},
        { no: 6, name: "Proyek Kewirausahaan 1", sks: 4 },
        { no: null, name: "Jalur Mengajar"},
        { no: 6, name: "Proyek Asistensi Mengajar 1", sks: 4 },
        { no: null, name: "Jalur Kuliah Kerja Nyata"},
        { no: 6, name: "Proyek Kuliah Kerja Nyata 1", sks: 4 },
        { no: null, name: "Jalur Proyek Kemanusiaan"},
        { no: 6, name: "Proyek Kemanusiaan 1", sks: 4 }
       
    ],
    7: [
        { no: 1, name: "Keterampilan Kepemimpinan", sks: 3 },
        { no: 2, name: "Implementasi Solusii", sks: 3 },
        { no: 3, name: "Presentasi Proyek", sks: 3 },
        { no: 4, name: "Penulisan Dokumentasi Proyek", sks: 3 },
        { no: 5, name: "Integrasi Sistem", sks: 4 },
        { no: null, name: "Jalur Magang" },
        { no: 6, name: "Proyek Kerja Praktek 2", sks: 4 },
        { no: null, name: "Jalur Studi Independen"},
        { no: 6, name: "Proyek Studi Independen 2", sks: 4 },
        { no: null, name: "Jalur Riset"},
        { no: 6, name: "Proyek Magang Penelitian 2", sks: 4 },
        { no: null, name: "Jalur Kewirausahaan"},
        { no: 6, name: "Proyek Kewirausahaan 2", sks: 4 },
        { no: null, name: "Jalur Mengajar"},
        { no: 6, name: "Proyek Asistensi Mengajar 2", sks: 4 },
        { no: null, name: "Jalur Kuliah Kerja Nyata"},
        { no: 6, name: "Kuliah Kerja Nyata 2", sks: 4 },
        { no: null, name: "Jalur Proyek Kemanusiaan"},
        { no: 6, name: "Proyek Kemanusiaan 2", sks: 4 }
    ],
    8: [
        { no: 1, name: "Tugas Akhir ", sks: 3 }
  
    ]
};

function showCourses(semester) {
    const container = document.getElementById('courses-container');
    container.innerHTML = '';

    const table = document.createElement('table');

    const headerRow = document.createElement('tr');
    const headers = ['No', 'Mata Kuliah', 'SKS']; 
    headers.forEach(headerText => {
        const header = document.createElement('th');
        header.textContent = headerText;
        headerRow.appendChild(header);
    });
    table.appendChild(headerRow);

    courses[semester].forEach(course => {
        const row = document.createElement('tr');

        // Loop untuk setiap properti pada mata kuliah
        Object.keys(course).forEach(key => {
            const cell = document.createElement('td');
            if (key === 'no') {
                // Tampilkan nomor urut jika properti adalah 'no' dan bukan null
                if (course[key] !== null) {
                    cell.textContent = course[key];
                }
            } else {
                // Tampilkan teks langsung jika bukan 'no'
                cell.textContent = course[key];
            }
            row.appendChild(cell);
        });

        table.appendChild(row);
    });

    container.appendChild(table);
}

document.addEventListener("DOMContentLoaded", function() {
    showCourses(3); // Tampilkan semester 3 saat halaman dimuat
});

