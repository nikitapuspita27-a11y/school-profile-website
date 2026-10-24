<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
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
    background-image: linear-gradient(rgba(0, 0, 0, 0.13), rgba(0,0,0,0.3)), 
    url('gambar/gedung71.png'); 
    background-position:center; 
    background-repeat:no-repeat; 
    background-size:cover; 
    background-attachment:fixed; 
    margin:0; 
    padding:20px; 
}

body::before{
    content:"";
    position:fixed;
    inset:0;
    background:
        linear-gradient(
            rgba(37, 100, 235, 0.16),
            rgba(0,0,0,.35)
        );
    z-index:-1;
}

@keyframes muncul{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.content{
    width:95%;
    margin:auto;
    animation: muncul 1s ease;
}

h1{
    color: white;
    text-shadow: 0 0 15px rgba(37,99,235,.8);
    text-align: center;
    font-size:45px;
    margin-bottom: 10px;
}

p{
    color: #dbeafe;
    text-align: center;
    font-size: 18px;
    margin-bottom: 30px;
}

/* Tombol tambah */
.btn-tambah{
display:inline-block; 
background: linear-gradient(
        135deg,
        #22c55e,
        #16a34a
    );
color:white; 
padding:12px 18px; 
border-radius:8px; 
text-decoration:none; 
font-weight:bold; 
transition:0.3s;
}

.btn-tambah i{
    margin-right: 5px;
}

.btn-tambah:hover{
    background: linear-gradient(135deg,#00c853,#00e676);
    color: #fff;
    box-shadow: 0 8px 20px rgba(34,197,94,.5);
    transform: scale(1.05);
}

.search-box{
    position: relative;
    width: 400px;
}

.search-box i{
    position: absolute;
    left: auto;
    top: 43%;
    transform: translateY(-50%);
    color: #777;
    font-size: 18px;
    padding-left: 10px;
}

.search-box input{
    width: 100%;
    padding: 12px 15px 12px 45px; 
    border: none;
    border-radius: 10px;
    font-size: 16px;
    box-sizing: border-box;
    padding-left: 35px !important;
    background: rgba(255,255,255,.95);
    border: 2px solid #bfdbfe;
}

.search-box input:focus{
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 5px rgba(37,99,235,0.3);
}

/* Tabel */
table{
    width:100%; 
    border-collapse: collapse; 
    background: rgba(255,255,255,0.95); 
    backdrop-filter: blur(3px); 
    border-radius: 12px; 
    overflow: hidden; 
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Header tabel */
table th{
    background: linear-gradient(
        135deg,
        #2563eb,
        #1d4ed8
    );
    color: white;
    border: 1px solid #d1d5db;
    padding: 14px;
    text-align: center;
    font-size: 15px;
}

/* Isi tabel */
table td{
    padding: 12px;
    border: 1px solid #d1d5db;
    border-bottom: 1px solid #ddd;
    font-size: 14px;
}

/* Warna selang-seling */
table tr:nth-child(even){
    background: #f8fafc;
    transition: 0.3s;
}

table tr:nth-child(odd){
    background: #ffffff;
    transition: 0.3s;
}

/* Hover baris */
table tr:hover{
    background: #dbeafe;
}

/* Tombol edit */
.btn-edit{
    background: linear-gradient(
        135deg,
        #fbbf24,
        #f59e0b
    );
    color:white;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:5px;
    padding:6px 12px;
    font-size:14px;
    border-radius:6px;
    text-decoration:none;
    transition:.3s;
}

.btn-edit:hover {
    background:#e0b12d;
    transform:scale(1.05);
}

/* Tombol hapus */
.btn-hapus{
    background: linear-gradient(
        135deg,
        #ef4444,
        #dc2626
    );
    color:white;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:5px;
    padding:6px 12px;
    font-size:14px;
    border-radius:6px;
    text-decoration:none;
    transition:.3s;
}

.btn-hapus:hover{
    background:#bb2d3b;
    transform:scale(1.05);
}

table th:first-child{
    border-top-left-radius: 12px;
}

table th:last-child{
    border-top-right-radius: 12px;
}

table td:last-child{
    width: 140px;
    white-space: nowrap;
}

.container{
    width: 450px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

h2{
    text-align: center;
    color: #1e3a5f;
    margin-bottom: 25px;
}

label{
    font-weight: bold;
    color: #333;
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
    border-color: #2563eb;
    outline: none;
    box-shadow: 0 0 5px rgba(37,99,235,0.3);
}

button{
    width: 100%;
    background: #2563eb;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover{
    background: #1d4ed8;
    transform: scale(1.02);
}
</style> 
</head>
<body>

<div class="content">
    <h1><i class="fas fa-user-graduate"></i> BIODATA SISWA</h1>
    <p>SMK NEGERI 71 JAKARTA</p>

        <br><br>

        <a class="btn-tambah" href="tambah.php">
            <i class="fa-solid fa-plus"></i>
            Tambah Data
        </a>

        <br><br>

        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="searchInput" placeholder="Cari Data Siswa...">
        </div>

        <table>
            <tr>
                <th>NIS</th>
                <th>NAMA SISWA</th>
                <th>KELAS</th>
                <th>TANGGAL LAHIR</th>
                <th>Aksi</th>
            </tr>

            <?php
            $data = mysqli_query($conn, "SELECT * FROM siswa");

            while($d = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?php echo $d['NIS']; ?></td>
                <td width="70%">
                    <?php echo $d['NAMA']; ?>
                </td>

                <td>
                    <?php echo $d['KELAS']; ?>
                </td>

                <td>
                    <?php echo $d['TANGGAL_LAHIR']; ?>
                </td>

                <td>
                    <a class="btn-edit" href="edit.php?NIS=<?php echo $d['NIS']; ?>"
                    onclick="return confirm('Yakin ingin mengubah data ini?');">
                    <i class="fa-solid fa-pen-to-square"></i> Edit
                    </a>

                    <a class="btn-hapus" href="hapus.php?NIS=<?php echo $d['NIS']; ?>"
                    onclick="return confirm('Yakin ingin menghapus data ini?');">
                    <i class="fa-solid fa-trash"></i> Hapus
                </a>
                </td>
            </tr>

            <?php
            }
            ?>

        </table>
    </div>

    <script>
document.getElementById("searchInput").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("tbody tr");

    rows.forEach(row => {
        let text = row.textContent.toLowerCase();

        if(text.includes(filter)){
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});
</script>
</body>
</html>