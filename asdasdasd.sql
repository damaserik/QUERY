SELECT b.id_dtlbrngkel,a.id_brngkel,a.tgl_brngkel,b.id_barang,c.nm_barang,b.stok_brngkel,
b.harga_dtlbrngkel,b.id_brngmsk,b.subhrg_dtlbrngkel,d.id_stok,d.stok_masuk,d.stok_keluar,d.tgl_brngmsk
FROM tbl_barang_keluar AS a
JOIN tbl_dtl_barang_keluar AS b ON a.id_brngkel=b.id_brngkel
JOIN tbl_nama_barang AS c ON b.id_barang=c.id_barang
JOIN tbl_stok_barang AS d ON b.id_stok=d.id_stok
JOIN tbl_barang_masuk AS e ON d.id_brngmsk=e.id_brngmsk
GROUP BY b.id_dtlbrngkel,a.id_brngkel,a.tgl_brngkel,b.id_barang,c.nm_barang,b.stok_brngkel,
b.harga_dtlbrngkel,b.id_brngmsk,b.subhrg_dtlbrngkel,d.id_stok,d.stok_masuk,d.stok_keluar,d.tgl_brngmsk
