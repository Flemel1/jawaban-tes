SELECT mahasiswa.mhs_nama, MAX(nilai.nilai) as "nilai" FROM tb_mahasiswa mahasiswa 
JOIN tb_mahasiswa_nilai nilai ON mahasiswa.mhs_id = nilai.mhs_id
JOIN tb_matakuliah matakuliah ON nilai.mk_id = matakuliah.mk_id
WHERE matakuliah.mk_kode = "MK303"

