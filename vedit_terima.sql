SELECT a.id_penerimaan,a.nota_terima,a.id_pembelian,e.nota_beli,a.tgl_terima,a.id_supplier,
				b.nm_supplier,a.id_bagian,c.nm_bagian,a.srtjalan_terima,
				a.tgljalan_terima,a.tgljt_terima,a.ket_terima
				FROM tbl_penerimaan AS a
				JOIN tbl_supplier AS b ON a.id_supplier=b.id_supplier
				JOIN tbl_bagian AS c ON a.id_bagian=c.id_bagian
				JOIN tbl_dtl_penerimaan AS d ON a.id_penerimaan=a.id_penerimaan
				JOIN tbl_pembelian AS e ON a.id_pembelian=e.id_pembelian
			WHERE a.id_penerimaan = 'TR20030001'
			LIMIT 1