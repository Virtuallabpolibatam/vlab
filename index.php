<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <Link rel="stylesheet" href="assets/css/style-index.css">

</head>

<body>
    <div class="Register">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="Admin()">Admin</button>
                <button type="button" class="toggle-btn" onclick="Laboran()">Laboran</button>
                <button type="button" class="toggle-btn" onclick="Mahasiswa()">Mahasiswa</button>
                <button type="button" class="toggle-btn" onclick="Dosen()">Dosen</button>
                <button type="button" class="toggle-btn" onclick="Guest()">Guest</button>
            </div>
            <form id="Admin" class="input-group">
                <div class="profile">
                    <img src="assets/Img/icon/profile.png">
                </div>
                <button type="button" class="submit-btn">
                    <a href="login/login_admin.php">Login</a>
                </button>
            </form>
            <form id="Laboran" class="input-group">
                <div class="profile">
                    <img src="assets/Img/icon/profile.png">
                </div>
                <button type="button" class="submit-btn">
                    <a href="login/login_laboran.php">Login</a>
                </button>
            </form>
            <form id="Mahasiswa" class="input-group">
                <div class="profile">
                    <img src="assets/Img/icon/profile.png">
                </div>
                <button type="button" class="submit-btn">
                    <a href="login/login_mahasiswa.php">Login</a>
                </button>
            </form>
            <form id="Dosen" class="input-group">
                <div class="profile">
                    <img src="assets/Img/icon/profile.png">
                </div>
                <button type="button" class="submit-btn">
                    <a href="login/login_dosen.php">Login</a>
                </button>
            </form>
            <form id="Guest" class="input-group">
                <div class="profile">
                    <img src="assets/Img/icon/profile.png">
                </div>
                <button type="button" class="submit-btn">
                    <a href="login/login_guest.php">Login</a>
                </button>
        </div>
    </div>

    <script>
        var u = document.getElementById("Admin");
        var v = document.getElementById("Laboran");
        var w = document.getElementById("Mahasiswa");
        var x = document.getElementById("Dosen");
        var y = document.getElementById("Guest");
        var z = document.getElementById("btn");

        function Admin() {
            u.style.left = "250px";
            v.style.left = "900px";
            w.style.left = "1550px";
            x.style.left = "2200px";
            y.style.left = "2800px";
            z.style.left = "0px";
        }

        function Laboran() {
            u.style.left = "-400px";
            v.style.left = "250px";
            w.style.left = "900px";
            x.style.left = "1550px";
            y.style.left = "2200px"
            z.style.left = "150px";
        }

        function Mahasiswa() {
            u.style.left = "-1050";
            v.style.left = "-400px";
            w.style.left = "250px";
            x.style.left = "900px";
            y.style.left = "1550px"
            z.style.left = "300px";
        }

        function Dosen() {
            u.style.left = "-1700px";
            v.style.left = "-1050px";
            w.style.left = "-400px";
            x.style.left = "250px";
            y.style.left = "900px"
            z.style.left = "450px";
        }

        function Guest() {
            u.style.left = "-2350px";
            v.style.left = "-1700px";
            w.style.left = "-1050px";
            x.style.left = "-400px";
            y.style.left = "250px"
            z.style.left = "600px";
        }
    </script>
</body>

</html>