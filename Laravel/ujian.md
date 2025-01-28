📢 MONTHLY EXAM IN JANUARY 📅

🔔 DEADLINE: 
Pastikan semua tugas selesai sebelum pergantian bulan!

🎥 CONTENT CREATION: 
Gunakan OBS untuk membuat konten yang menarik. Semakin menarik penyampaian dan pemahamannya, maka semakin *perfect hasilnya!*

💡 KREATIVITAS: 
Gunakan kreativitas masing-masing! Kamu boleh menggunakan sumber daya apapun seperti PPT.

👥 KEPROAKTIFAN: 
Pastikan setiap ketua proaktif kepada timnya.

🎬 FORMAT SOAL: 
Setiap 1 soal untuk 1 episode video.

---

SOAL VIDEO UJIAN:

1. Apa itu Laravel?
2. Kenapa mesti pakai Laravel?
3. Jelaskan konsep MVC.
4. Tutorial instalasi Laravel.
5. Setup Laravel ke DB.
6. Jelaskan semua tentang migrasi.
7. Jelaskan semua tentang model.
8. Jelaskan semua tentang factory.
9. Jelaskan semua tentang seeder.
10. Jelaskan semua tentang ORM:
    - Has Many 
    - HasOne 
    - BelongsTo 
    - One To Many 
    - ManyToMany 
    - Polymorphics
11. Jelaskan semua tentang Tinker.
12. Praktikan semua dengan penjelasan dari penggabungan penggunaan fitur Laravel untuk membuat sebuah sistem yang kompleks dengan:
    - ERD 
    - Migrasi 
    - Model 
    - Factory 
    - Seeder 
    - Generate Data Dummy 
    - Test Tinker 

Jelaskan kegunaan dan workflow dari sistem yang dibuat (Jangan gunakan ERD pada ujian mingguan).

---

🌟 MOTIVASI: 
php
public function sukses($myself, $skill, $kesempatan, $paksa, $bisa, $terbiasa, $luarbisa): bool {
    // Manipulasi parameter langsung
    $myself = strtoupper($myself);
    $peluang = (count($skill) * 0.1) + (array_sum($kesempatan) * 0.1) + ($paksa * 0.05) + ($terbiasa * 0.05) + ($luarbisa * 0.02);
    $bisa = $bisa || $paksa > 3;

    return $peluang >= 0.95;
}

// Contoh penggunaan
$myself = “L”;
$skill = ["logika", "pemrograman", "analisis"];
$kesempatan = [0.3, 0.4, 0.2];
$paksa = 5;
$bisa = false;
$terbiasa = 10;
$luarbisa = 15;

$result = sukses($myself, $skill, $kesempatan, $paksa, $bisa, $terbiasa, $luarbisa);

echo $result ? "Selamat $myself, Anda telah mencapai sukses!
" : "$myself, tetap semangat! Tingkatkan usaha untuk mencapai sukses.
";
