CREATE TABLE transaksi (
    id int,
    tanggal_order datetime,
    status_pelunasan enum('lunas', 'pending'),
    tanggal_pembayaran datetime,
    PRIMARY KEY (id)
);

INSERT INTO transaksi VALUES (1, '2020-12-01 11:30:00', 'lunas', '2020-12-01 12:00:00');
INSERT INTO transaksi VALUES (2, '2020-12-02 10:30:00', 'pending', NULL);