<!DOCTYPE html>
<html lang="id">
<head>
    <title>SMKN 71 Jakarta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    overflow:hidden;
}

.hero{
    position:relative;
    width:100%;
    height:100vh;
    overflow:hidden;
    display:flex;
    justify-content:center;
    align-items:center;
}

.bg-video{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -2;
}

.overlay{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    z-index: -1;
}

.content{
    text-align:center;
    color:white;
}

.content h1{
    font-size:48px;
    font-weight:700;
    margin-bottom:10px;
}

.content h2{
    font-size:36px;
    color:#3b82f6;
    margin-bottom:15px;
}

.subjudul{
    font-size:18px;
    letter-spacing:4px;
    margin-bottom:25px;
}

.jurusan{ 
    display:flex; 
    justify-content:center; 
    align-items:center; 
    gap:20px; 
    flex-wrap:nowrap; 
    margin-bottom:30px; 
}

.card{
    display:flex;
    align-items:center;
    padding:12px 18px;
    gap:8px;
    width:auto;
    height:auto;
    background:rgba(255,255,255,0.15);
    border-radius:15px;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
    background:rgba(255,255,255,0.25);
}

.card img{
    width:55px;
    height:55px;
    background:#fff;
    object-fit:contain;
}

.card span{
    font-size:20px;
    font-weight:700;
    color:white;
    margin-left:0;
}

.audio-control {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 10;
    background-color: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: #fff;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    font-size: 18px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

.audio-control:hover {
    background-color: rgba(255, 255, 255, 0.4);
    transform: scale(1.1);
}

.btn{
    display:inline-block;
    text-decoration:none;
    background:#2563eb;
    color:white;
    padding:16px 40px;
    border-radius:50px;
    font-size:20px;
    font-weight:bold;
    transition:0.3s;
    box-shadow:0 8px 20px rgba(0,0,0,0.4);
}

.btn:hover{
    background:#1d4ed8;
    transform:scale(1.05);
}

    @keyframes fade{
    from{
        opacity:0;
        transform:translateY(40px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}

    @media(max-width:768px){
    .content h1{
        font-size:45px;
    }

    .content h2{
        font-size:30px;
    }

    .subtitle{
        font-size:15px;
    }

    .logo-item{
        width:140px;
    }

    .btn{
        font-size:16px;
        padding:14px 25px;
    }
}
</style>
</head>
<body>
<div class="hero">
    <video id="bg-video" class="bg-video" autoplay loop muted playsinline>
        <source src="gambar/vidsmkn71.mp4" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <button class="audio-control" id="audioBtn" title="Nyalakan Suara">
        <i id="audioIcon" class="fa-solid fa-volume-xmark"></i>
    </button>

    <div class="content">
        <h1>SELAMAT DATANG</h1>
        <h2>DI SMKN 71 JAKARTA</h2>
        <p class="subjudul">KONSENTRASI KEAHLIAN :</p>

        <script>
        const video = document.getElementById('bg-video');
        const audioBtn = document.getElementById('audioBtn');
        const audioIcon = document.getElementById('audioIcon');

        audioBtn.addEventListener('click', function() {
            if (video.muted) {
                video.muted = false; 
                audioIcon.className = 'fa-solid fa-volume-high';
                audioBtn.setAttribute('title', 'Matikan Suara');
            } else {
                video.muted = true;
                audioIcon.className = 'fa-solid fa-volume-xmark'; 
                audioBtn.setAttribute('title', 'Nyalakan Suara');
            }
        });
    </script>

        <div class="jurusan">

            <div class="card">
                <img src="gambar/logorpl.png">
                <span>RPL</span>
            </div>

            <div class="card">
                <img src="gambar/logodkv.png">
                <span>DKV</span>
            </div>

            <div class="card">
                <img src="gambar/logoanm.png">
                <span>ANM</span>
            </div>
        </div>

        <a href="index.php" class="btn">
            <i class="fa-solid fa-user-graduate"></i>
            Biodata Siswa
        </a>

    </div>
</div>
</body>
</html>