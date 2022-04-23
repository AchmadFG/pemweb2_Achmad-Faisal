<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hasil BMI</title>
</head>
<body>
    <div class="container">
        <?php
            require_once "class_bmi.php";
            // daftar Peserta BMI
            $daftarPasien = array(
                1 =>
                array(1, '2022-01-30', 'P001', 'Ahmad', 'Laki-Laki', 69.8, 169, 24.7, 'Kelebihan Berat Badan'),
                array(2, '2022-01-10', 'P002', 'Rina', 'Perempuan', 55.3, 165, 20.3, 'Sehat'),
                array(3, '2022-01-11', 'P003', 'Lutfi', 'Laki-Laki', 45.2, 171, 15.4, 'Kekurangan Berat Badan')
            );

            $submit = $_POST['submit'];
            $gender = $_POST['gender'];
            $nama = $_POST['nama'];
            $tmpt_lahir = $_POST['tmpt_lahir'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $berat = $_POST['berat'];
            $tinggi = $_POST['tinggi'];
            $email = $_POST['email'];

            $pasienBaru = new BMIPasien(count($daftarPasien)+1, $nama, $tmpt_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat);
            $pasienBaru->bmi = $pasienBaru->nilaiBMI();

            array_push($daftarPasien, array($pasienBaru->id, $pasienBaru->tanggal, $pasienBaru->kode, $pasienBaru->nama, $pasienBaru->gender, $pasienBaru->berat, $pasienBaru->tinggi, $pasienBaru->bmi, $pasienBaru->statusBMI($pasienBaru->bmi)));
            echo "<h2 class='fw-bold text-center pt-5 mt-5'>BMI Anda adalah <span class='text-primary'>{$pasienBaru->bmi}</span></h2>";
            echo "<h2 class='fw-bold text-center'>Status BMI Anda adalah <span class='text-primary'>{$pasienBaru->statusBMI($pasienBaru->bmi)}</span></h2>";
        ?>

        <?php
        if ($pasienBaru->bmi <= 18.4) {
        ?>
            <div style="display: flex; min-width: 97px; justify-content: center;">
                <img alt="Kekurangan Bobot" src="Assets\img\kurus.jpeg" style="object-fit: contain; height: 30%; width: 45%;">
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                <b>Sayang Sekali Kamu Kekurangan Bobot</b>
            </div>
        <?php
        }
        ?>

        <?php
        if ($pasienBaru->bmi >= 18.5 && $pasienBaru->bmi <= 23.9) {
        ?>
            <div style="display: flex; min-width: 97px; justify-content: center;">
                <img alt="Sehat" src="Assets\img\sehat.jpeg" style="object-fit: contain; height: 30%; width: 45%;">
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                <b>Alhamdulillah, Kamu Sehat</b>
            </div>
        <?php
        }
        ?>

        <?php
        if ($pasienBaru->bmi >= 24 && $pasienBaru->bmi <= 26.9) {
        ?>
            <div style="display: flex; min-width: 97px; justify-content: center;">
                <img alt="Kelebihan Bobot" src="Assets\img\gemuk.jpeg" style="object-fit: contain; height: 30%; width: 45%;">
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                <b>Wah, Kamu Kelebihan Bobot</b>
            </div>
        <?php
        }
        ?>

        <?php
        if ($pasienBaru->bmi >= 27 && $pasienBaru->bmi <= 29.9) {
        ?>
            <div style="display: flex; min-width: 97px; justify-content: center;">
                <img alt="Obesitas 1" src="Assets\img\obe1.jpeg" style="object-fit: contain; height: 30%; width: 45%;">
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                <b>Waduh, Kamu Obesitas 1</b>
            </div>
        <?php
        }
        ?>

        <?php
        if ($pasienBaru->bmi >= 30) {
        ?>
            <div style="display: flex; min-width: 97px; justify-content: center;">
                <img alt="Obesitas 2" src="Assets\img\obe2.jpeg" style="object-fit: contain; height: 30%; width: 45%;">
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                <b>Astaga, Kamu Obesitas 2</b>
            </div>
        <?php
        }
        ?>

        <table class="mt-5 display nowrap table-striped table-bordered table" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tanggal Periksa</th>
                    <th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Gender</th>
                    <th>Berat (kg)</th>
                    <th>Tinggi (cm)</th>
                    <th>Nilai BMI</th>
                    <th>Status BMI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($daftarPasien as $pasien){
                        echo "<tr>";
                        echo "<td>". $pasien[0]. "</td>";
                        echo "<td>". $pasien[1]. "</td>";
                        echo "<td>". $pasien[2]. "</td>";
                        echo "<td>". $pasien[3]. "</td>";
                        echo "<td>". $pasien[4]. "</td>";
                        echo "<td>". $pasien[5]. "</td>";
                        echo "<td>". $pasien[6]. "</td>";
                        echo "<td>". $pasien[7]. "</td>";
                        echo "<td>". $pasien[8]. "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>