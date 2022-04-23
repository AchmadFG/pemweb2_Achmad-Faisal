<?php

class Pasien
{
    public $id;
    public $kode;
    public $nama;
    public $tmpt_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;

    public function __construct($id, $nama, $tmpt_lahir, $tgl_lahir, $email, $gender)
    {
        $this->id = $id;
        $this->kode = "P" . sprintf('%03d', $this->id);
        $this->nama = $nama;
        $this->tmpt_lahir = $tmpt_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->email = $email;
        $this->gender = $gender;
    }
}

trait BMI
{
    public $berat, $tinggi;

    public function nilaiBMI()
    {
        return number_format((float)$this->berat / ($this->tinggi / 100) ** 2, 1, '.', '');
    }

    public function statusBMI($nilai)
    {
        if ($nilai <= 18.4) {
            return "Kekurangan Berat Badan";
        } elseif ($nilai >= 18.5 && $nilai <= 23.9) {
            return "Sehat";
        } elseif ($nilai >= 24 && $nilai <= 26.9) {
            return "Kelebihan Berat Badan";
        } elseif ($nilai >= 27 && $nilai <= 29.9) {
            return "Obesitas 1";
        } elseif ($nilai >= 30) {
            return "Obesitas 2";
        }
    }
}

class BMIPasien extends Pasien
{
    use BMI;
    public $bmi;
    public $tanggal;

    public function __construct($id, $nama, $tmpt_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat)
    {
        parent::__construct($id, $nama, $tmpt_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat);
        $this->tinggi = $tinggi;
        $this->berat = $berat;
        $this->tanggal = date("Y-m-d");
    }
}