CREATE TABLE detail_transaksi (
    id int NOT NULL,
    id_transaksi int NOT NULL,
    harga int,
    jumlah int,
    subtotal int,
    PRIMARY KEY (id),
    FOREIGN KEY (id_transaksi) REFERENCES transaksi(id)
);