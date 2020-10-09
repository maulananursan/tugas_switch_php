<?php 


// Buatlah sebuah program pengecekan nilai mahasiswa dengan ketentuan :
// nilai > 80 : A
// nilai > 70 dan < 80 : B
// nilai > 60 dan < 70 : C
// nilai > 0 dan < 60  : D

// Note : Wajib menggunakan Switch

$nilai = 0;

echo "Nilai : $nilai <br>";
switch (true) {
	case ($nilai > 80 && $nilai <=100 ):
		echo "Kamu mendapatkan nilai : A";
		break;
	case ($nilai > 70 && $nilai < 80):
		echo "Kamu mendapatkan nilai : B";
		break;
	case ($nilai > 60 && $nilai < 70):
		echo "Kamu mendapatkan nilai : C";
		break;
	case ($nilai >=0  && $nilai < 60):
		echo "Kamu mendapatkan nilai : D";
		break;
	default:
		echo "Kamu Harus Ujian Dulu Baru Nanyain Nilai";
		break;
}

 ?>