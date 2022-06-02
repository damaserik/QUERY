SELECT a.id_dtl_penerimaan,a.id_penerimaan,a.tgl_dtlterima,a.jml1_dtlterima,a.jml2_dtlterima,
							a.sat1_dtlterima,g.nm_satuan AS nm_satuan1,a.sat2_dtlterima,h.nm_satuan  AS nm_satuan2,
							a.harga_dtlterima,a.subtotal_dtlterima,a.ppn_dtlterima,a.totalharga_dtlterima,
							a.id_dtl_pembelian,a.id_barang,d.nm_barang,
							a.id_group,e.nm_group,a.id_jnsbrngakt,f.no_jnsbrngakt
		FROM tbl_dtl_penerimaan AS a
		JOIN tbl_penerimaan AS b ON a.id_penerimaan=b.id_penerimaan
		JOIN tbl_dtl_pembelian AS c ON a.id_dtl_pembelian=c.id_dtl_pembelian
		JOIN tbl_nama_barang AS d ON a.id_barang=d.id_barang
		JOIN tbl_group AS e ON a.id_group=e.id_group
		JOIN tbl_barang_akutansi AS f ON a.id_jnsbrngakt=f.id_jnsbrngakt
		JOIN tbl_satuan AS g ON a.sat1_dtlterima=g.id_satuan
		JOIN tbl_satuan AS h ON a.sat2_dtlterima=h.id_satuan