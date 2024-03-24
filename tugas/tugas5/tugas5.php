<?php 
$mahasiswa = [
  
            ["nama" => "Rendi Krisna",
              "npm" => "233040001",
              "email" => "otoy123456@gmail.com ",
              "jurusan" => "Teknik Informatika",  
              "gambar" => "1"         
            ],
            ["nama" => "Irsyaad Fadlurohman",
              "npm" => "233040029",
              "email" => "irsyaadfdlrhmn@gmail.com ",
              "jurusan" => "Ilmu Hukum",
              "gambar" => "2"
            ],
            ["nama" => "Rizki Saepuloh",
              "npm" => "233040035",
              "email" => "ikiw218@gmail.com ",
              "jurusan" => "Tata Boga",  
              "gambar" => "3"           
            ],
            ["nama" => "Amneqorni Sofian",
              "npm" => "233040017",
              "email" => "amneqorni19@gmail.com ",
              "jurusan" => "Optometri",
              "gambar" => "4"
            ],
            ["nama" => "Galih Manggala",
              "npm" => "233040036",
              "email" => "lunaticlucifer@gmail.com ",
              "jurusan" => "Fotografi",
              "gambar" => "5"
            ],
            ["nama" => "Krisna Yudi",
              "npm" => "233040006",
              "email" => "krisna.yudi@gmail.com ",
              "jurusan" => "Ilmu Hukum",
              "gambar" => "6"
            ],
            ["nama" => "Michael Damos",
              "npm" => "233040009",
              "email" => "michaeldms@gmail.com ",
              "jurusan" => "Sastra Asing",
              "gambar" => "7"
            ],
            ["nama" => "Fajar Fansyuri",
              "npm" => "233040105",
              "email" => "jayfnsyr@gmail.com ",
              "jurusan" => "Sastra Asing",
              "gambar" => "8"
            ],
             ["nama" => "Dzira Lazuardi",
              "npm" => "233040125",
              "email" => "jarottakarot@gmail.com ",
              "jurusan" => "Seni Rupa",
              "gambar" => "9"
            ],
            ["nama" => "Irfan",
              "npm" => "233040002",
              "email" => "irfantastic@gmail.com ",
              "jurusan" => "Desain Komunikasi Visual",
              "gambar" => "10"
            ]

            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    @font-face {
        font-family: "Rubik";
        src: url(font/Rubik-Regular.woff);
    }
    
    .container {
        
        width: 500px;
        height: 2500px;
        background-color: salmon;
        padding: 5px;
        border: 2px solid black;
    }

    h1 {
        font-family: "Rubik";
    }
  </style>
</head>
<body>
    <div class="container"> 
        <h1>Daftar Mahasiswa</h1>
            <?php foreach ($mahasiswa as $students) : ?>
                <ul>
                    <img src="https://randomuser.me/api/portraits/men/<?= $students['gambar'] ?>.jpg" width="150" height="150">
                    <li>Nama : <?= $students["nama"]; ?></li>
                    <li>NPM : <?= $students["npm"]; ?></li>
                    <li>Email : <?= $students["email"]; ?></li>
                    <li>Jurusan : <?= $students["jurusan"]; ?></li>
                </ul>
            <?php endforeach; ?>
    </div>
</body>
</html> 