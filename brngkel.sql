SELECT a.id_dtlbrngkel,a.id_brngkel,a.tgl_brngkel,a.id_stok,a.id_barang,b.nm_barang,a.subhrg_dtlbrngkel,
a.tgl_brngmsk,a.id_bagian
FROM tbl_dtl_barang_keluar AS a
JOIN tbl_nama_barang AS b ON a.`id_barang`=b.`id_barang`