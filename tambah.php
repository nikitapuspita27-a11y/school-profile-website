<!DOCTYPE html>
    <html>
        <head>
            <title>Tambah Data</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    font-family: Arial, Helvetica, sans-serif;
    background-image:
    linear-gradient(
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
    ),
    url('gambar/lobby71.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 20px;
}

.container{
    width: 450px;
    margin: auto;
    background: rgba(255,255,255,0.2);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    animation:fadeIn .8s ease;
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

h2{
    text-align: center;
    color: #1e3a5f;
    margin-bottom: 25px;
}

label{
    font-weight: bold;
    color: #000000;
}

input[type="text"],
input[type="date"],
select{
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
    box-sizing: border-box;
}

input:focus,
select:focus{
    outline: none;
    border: 2px solid #021333;
    box-shadow: 0 0 15px rgba(77,166,255,.7);
    transform: scale(1.02);
}

button{
    width: 100%;
    color: white;
    padding: 12px;
    font-size: 15px;
    cursor: pointer;
    background: linear-gradient(135deg,#1d4ed8,#0066ff);
    border:none;
    border-radius:10px;
    transition:.3s;
}

button:hover{
    background: linear-gradient(135deg,#1d4ed8,#0066ff);
    transform:translateY(-3px);
    box-shadow:0 8px 20px rgba(0,102,255,.5);
}

.kembali {
    display: inline-block;
    margin-bottom: 5px;
    text-decoration: none;
    color: #0d47a1;
    font-weight: bold;
    font-size: 15px;
    transition: 0.3s;
}

.kembali:hover {
    color: #fff;
    text-shadow:
        0 0 5px #4da6ff,
        0 0 10px #4da6ff,
        0 0 20px #4da6ff,
        0 0 40px #4da6ff;
    transform: scale(1.05);

}
        </style>
        </head>
        <body>
        <div class="container"> 
        <h2>Tambah Data Siswa</h2>

        <form method="POST" action="simpan.php">

        <label><i class="fas fa-id-card"></i> NIS</label>
        <input type="text" name="NIS">
        <br><br>

        <label><i class="fas fa-user"></i> Nama</label>
        <input type="text" name="NAMA">
        <br><br>

        <label><i class="fas fa-users"></i> Kelas</label>
        <select name="KELAS">

            <option value="">--Pilih Kelas--</option>

            <option value="X RPL 1">X RPL 1</option>
            <option value="X RPL 2">X RPL 2</option>

            <option value="X DKV 1">X DKV 1</option>
            <option value="X DKV 2">X DKV 2</option>

            <option value="X ANM 1">X ANM 1</option>
            <option value="X ANM 2">X ANM 2</option>
        </select>
        <br><br>

        <label><i class="fas fa-calendar"></i> Tanggal Lahir</label>
        <input type="date" name="TANGGAL_LAHIR">
        <br><br>

        <button type="submit">Simpan</button>

        <br><br>

        <center><a href="index.php" class="kembali">← Kembali ke Biodata Siswa</a></center>

        </form>
        </div>

        </body>
    </html>