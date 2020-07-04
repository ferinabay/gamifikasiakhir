<!DOCTYPE html><html lang="en"><meta charset="UTF-8"><link rel="icon" type="image/png" href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/polinema logo.png"><style>
	table {
		border-collapse: collapse;
		width: 80%;
		margin: 0 auto;
	}

	table th {
		border: 1px solid #FFF;
		padding: 3px;
		font-weight: bold;
		text-align: center;
		
	}

	table td {
		border: 1px solid #FFF;
		vertical-align: top;
	}

	p.uppercase {
		text-transform: uppercase;
	}

	p.lowercase {
		text-transform: lowercase;
	}

	p.capitalize {
		text-transform: capitalize;
	}
	.kop {
		line-height: 0.2;
	}
	.address-kampus {
		font-size: 13px;
	}
</style><form action="<?= site_url() ?>/mhs_c/prev" method="POST">
	<table>
		<?php foreach ($datakompen as $key) { ?>
			<tr>
				<td>
					<center><img src="./assetKu/startbootstrap-blk/assets/img/polinema-trans.png" width="90px" height="90px" style="margin-top:30px;"></center>
				</td>

				<td class="kop" style="width:350px">
					<center>
						<p style="text-align: center">KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</p>
						<h4 style="text-align: center">POLITEKNIK NEGERI MALANG</h4>
						<h4 style="text-align: center">JURUSAN TEKNOLOGI INFORMASI</h4>
						<h4 class="uppercase" style="text-align: center">PROGRAM STUDI <?php echo $key['prodi_mhs'] ?></h4>
						<p class="address-kampus" style="text-align: center">Jl. Soekarno Hatta PO BOX 04 Malang Telp.(0341) 404424 pes. 1122  </p>
						<p class="address-kampus" style="text-align: center">laman: http://www.polinema.ac.id</p>
					</center>
				</td>

				<td>
					<center><img src="./assetKu/startbootstrap-blk/assets/img/iso.png" width="90px" height="90px" style="margin-top:30px;"></center>
				</td>
			</tr>

			<tr>
				<th colspan="3">_______________________________________________________________________________________</th>
			</tr>

			<tr>
				<th colspan="3"><br><u><b>BERITA ACARA KOMPENSASI PRESENSI</b></u></th>
			</tr>

			<tr>
				<td>
					Nama Pengajar
				</td>
				<td colspan="2">
					<?php echo " : ";
					echo $key['nama_pengajar']; ?>
				</td>
			</tr>

			<tr>
				<td>
					NIP
				</td>
				<td colspan="2">
					<?php echo " : ";
					echo $key['nip']; ?>
				</td>
			</tr>

			<tr>
				<th colspan="3"><br><b>Memberikan rekomendasi kompensasi kepada :</b></th>
			</tr>

			<tr>
				<td>
					Nama Mahasiswa
				</td>
				<td colspan="2">
					<?php echo " : ";
					echo $key['nama_mhs']; ?>
				</td>
			</tr>

			<tr>
				<td>
					NIM
				</td>
				<td colspan="2">
					<?php echo " : ";
					echo $key['nim']; ?>
				</td>
			</tr>

			<tr>
				<td>
					Kelas
				</td>
				<td colspan="2">
					<?php echo " : ";
					echo $key['kelas']; ?>
				</td>
			</tr>

			<tr>
				<td>
					Semester
				</td>
				<td colspan="2">
					<?php echo " : ";
					echo $key['semester']; ?>
				</td>
			</tr>

			<tr>
				<td>
					Pekerjaan
				</td>
				<td colspan="2">
					<?php echo " : ";
					echo "Pengisian Konten Website JTI" ?>
				</td>
			</tr>

			<tr>
				<td>
					Jumlah Jam
				</td>
				<td colspan="2">
					<?php echo " : ";
					echo $key['jumlah_jam']; ?>
				</td>
			</tr>

			<tr>
				<th colspan="3">_______________________________________________________________________________________</th>
			</tr>

			<tr>
				<td>
					Mengetahui<br>
					Ka. Program Studi
				</td>
				<td></td>
				<td>
					Malang, ..................<br>
					Yang memberikan rekomendasi,
				</td>
			</tr>

			<tr>
				<td>
					<br><br><br>
					(.............................)<br>
					NIP.
				</td>
				<td></td>
				<td>
					<br><br><br>
					(.............................)<br>
					NIP.
				</td>
			</tr>


	</form>
	</table>
	<p style="text-align: center"><a href="<?= base_url() ?>index.php/cetak_c/cetakpdf/<?php echo $key['id_kmp'] ?>"> </a></p>
<?php } ?></html>