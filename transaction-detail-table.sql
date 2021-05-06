CREATE TABLE detail_transaksi (
    id int NOT NULL,
    id_transaksi int NOT NULL,
    harga int,
    jumlah int,
    subtotal int,
    PRIMARY KEY (id),
    FOREIGN KEY (id_transaksi) REFERENCES transaksi(id)
);

INSERT INTO detail_transaksi VALUES (1, 1, 20000, 2, 40000);
INSERT INTO detail_transaksi VALUES (2, 2, 25000, 4, 100000);