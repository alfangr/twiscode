SELECT * FROM transaksi t join detail_transaksi d on t.id = d.id_transaksi GROUP BY t.id