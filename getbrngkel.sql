SELECT a.id_brngmsk,c.`id_barang`,c.nm_barang,a.tgl_brngmsk,b.`id_stok`,b.stok_masuk,b.hrg_stok
FROM tbl_barang_masuk AS a
JOIN tbl_stok_barang AS b ON a.`id_brngmsk`=b.`id_brngmsk`
JOIN `tbl_nama_barang` AS c ON b.`id_barang`=c.`id_barang`
WHERE c.nm_barang LIKE '%a%'