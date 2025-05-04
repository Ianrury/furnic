-- Active: 1727836521955@@127.0.0.1@3306@php_login_test
-- Active: 1745562774050@@192.168.1.238@9356@web-furnice

-- DML
INSERT INTO users (token, nama_user, password, jabatan_user, role_akses)
VALUES 
('abc123token', 'Admin Satu', 'admin123', 'Admin Utama', 1),
('xyz789token', 'User Dua', 'user123', 'Staff Operasional', 2);

INSERT INTO kategori (id_parent_kategori, nama) VALUES
(NULL, 'Living'),
(NULL, 'Bedroom'),
(NULL, 'Kitchen'),
(NULL, 'Dinning');


ALTER TABLE product
ADD COLUMN beli INT;


ALTER TABLE product
ADD COLUMN diskon VARCHAR(20);



INSERT INTO product 
(nama_product, id_kategori, uom, qty, nama_vendor, foto, deskripsi, spesifikasi, tipe_product)
VALUES
('Sofa Minimalis', 1, 'pcs', 10, 'Vendor A', 'sofa.jpg', 'Sofa nyaman untuk ruang tamu', 'Material: Kayu, Busa, Kain', 'Furniture'),
('Meja TV Kayu', 2, 'pcs', 5, 'Vendor B', 'meja_tv.jpg', 'Meja TV dari kayu jati', 'Ukuran: 120x40x50 cm', 'Furniture'),
('Rak Dinding', 3, 'pcs', 20, 'Vendor A', 'rak.jpg', 'Rak tempel dinding minimalis', 'Material: MDF', 'Dekorasi'),
('Tempat Tidur Queen', 4, 'pcs', 7, 'Vendor C', 'bed.jpg', 'Ranjang queen size nyaman', 'Ukuran: 160x200 cm', 'Furniture'),
('Lemari Pakaian 3 Pintu', 3, 'pcs', 4, 'Vendor D', 'lemari.jpg', 'Lemari besar untuk kamar tidur', 'Material: Kayu solid', 'Furniture'),
('Meja Rias', 2, 'pcs', 3, 'Vendor B', 'meja_rias.jpg', 'Meja rias dengan cermin bulat', 'Desain elegan modern', 'Furniture'),
('Meja Makan 4 Kursi', 2, 'set', 6, 'Vendor A', 'meja_makan.jpg', 'Meja makan untuk keluarga kecil', 'Material: Kayu solid', 'Furniture'),
('Kabinet Dapur', 4, 'pcs', 3, 'Vendor E', 'kabinet.jpg', 'Kabinet atas dan bawah dapur', 'Material: Plywood + HPL', 'Kitchen Set'),
('Rak Bumbu', 3, 'pcs', 15, 'Vendor A', 'rak_bumbu.jpg', 'Rak kecil untuk bumbu dapur', 'Ukuran: 30x10x15 cm', 'Aksesoris Dapur'),
('Kursi Tamu Kayu', 1, 'pcs', 12, 'Vendor F', 'kursi_tamu.jpg', 'Kursi klasik untuk tamu', 'Material: Kayu jati', 'Furniture'),
('Matras Tidur', 2, 'pcs', 10, 'Vendor G', 'matras.jpg', 'Matras empuk dan nyaman', 'Ukuran: 180x200 cm', 'Kasur'),
('Gorden Jendela', 3, 'pcs', 18, 'Vendor H', 'gorden.jpg', 'Gorden polos warna netral', 'Bahan: Polyester', 'Dekorasi'),
('Dispenser Dapur', 4, 'pcs', 9, 'Vendor I', 'dispenser.jpg', 'Dispenser air minum stainless', '3 Galon Kapasitas', 'Peralatan'),
('Lemari Dapur Gantung', 3, 'pcs', 4, 'Vendor J', 'lemari_gantung.jpg', 'Lemari gantung dapur atas', 'Panjang: 120 cm', 'Kitchen Set'),
('Cermin Hias', 1, 'pcs', 14, 'Vendor A', 'cermin.jpg', 'Cermin bundar untuk kamar tidur', 'Diameter: 50 cm', 'Dekorasi');

INSERT INTO product 
(nama_product, id_kategori, uom, qty, nama_vendor, foto, deskripsi, spesifikasi, tipe_product)
VALUES
('Kursi Kantor', 10, 'Unit', 10, 'Vendor A', 'sofa.jpg', 'Kursi Kantor Nyaman untuk kantor', 'Material: Kayu, Busa, Kain', 'Furniture')



-- Insert ke detail_product
INSERT INTO detail_product (id_sku, id_product, warna)
VALUES 
('SKU001', 93, 'Kuning');

-- Insert ke motif_produk (motif = 'Polos')
INSERT INTO motif_produk (id_product, id_detail_product, qty, motif, foto_kanan, foto_kiri, foto_depan, foto_belakang)
VALUES 
(93, 1, 20, 'Polos', 'UT M03 2.png', 'UT M03 1.png', 'UT M01 3.png', 'UT M01 2.png'),
(93, 1, 0, 'Kurep', 'UT M03 2.png', 'UT M03 1.png', 'UT M01 3.png', 'UT M01 2.png');



ALTER TABLE product
ADD COLUMN harga INT AFTER qty;



ALTER TABLE cart ADD id_detail_product INT, ADD id_motif_produk INT,
ADD FOREIGN KEY (id_detail_product) REFERENCES detail_product(id),
ADD FOREIGN KEY (id_motif_produk) REFERENCES motif_produk(id);


SHOW CREATE TABLE cart;

-- query tanggal 30 april 2025
ALTER TABLE product
ADD COLUMN informasi_product TEXT;

ALTER TABLE product
DROP COLUMN spesifikasi,
ADD COLUMN spesifikasi JSON;

UPDATE product
SET spesifikasi = JSON_OBJECT(
    'Material', 'Polypropylene, Metal',
    'Dimensi', '40×36×51cm',
    'Tinggi Kursi', '35cm',
    'Warna', 'Red & Yellow'
)
WHERE id_product = 93;

-- query tanggal 1 mei 2025
ALTER TABLE promo
DROP FOREIGN KEY promo_ibfk_1,  -- nama FK mungkin berbeda tergantung DBMS, bisa diganti
DROP COLUMN id_product;

ALTER TABLE product
ADD COLUMN id_promo INT,
ADD CONSTRAINT fk_product_promo FOREIGN KEY (id_promo) REFERENCES promo(id_promo);


ALTER TABLE product
DROP COLUMN diskon;


INSERT INTO promo (nama_promo, jenis_promo, total_promo, start_date, end_date)
VALUES
('Promo Diskon Lebaran', 'Diskon', 10.00, '2025-05-10', '2025-05-20'),
('Promo Akhir Pekan', 'Cashback', 20.00, '2025-05-10', '2025-05-20');


INSERT INTO jenis_pengiriman (nama, diskon, harga) VALUES
('Reguler', 0, 20000),
('Express', 5000, 40000),
('Same Day', 10000, 60000);


INSERT INTO toko (nama, alamat) VALUES
('Toko Sinar Baru', 'Jl. Melati No. 12, Desa Sukamaju, Kec. Sukatani, Kab. Bandung'),
('Toko Makmur Sentosa', 'Jl. Kenanga No. 45, Kel. Kebon Jeruk, Kec. Bojong, Kota Tasikmalaya'),
('Toko Serba Ada', 'Jl. Anggrek No. 3, Desa Margahayu, Kec. Cibiru, Kab. Garut'),
('Toko Laris Manis', 'Jl. Mawar No. 77, Kel. Cibadak, Kec. Antapani, Kota Bandung'),
('Toko Grosir Murah', 'Jl. Teratai No. 5, Desa Cileunyi, Kec. Rancaekek, Kab. Bandung');

ALTER TABLE customer
ADD COLUMN detail VARCHAR(30) AFTER alamat;

ALTER TABLE customer
MODIFY COLUMN alamat TEXT;

ALTER TABLE pesanan
ADD COLUMN status VARCHAR(50) DEFAULT 'waiting' AFTER tanggal_pesanan;

ALTER TABLE pesanan
ADD COLUMN id_detail_product INT AFTER id_product,
ADD COLUMN id_motif_produk INT AFTER id_detail_product,
ADD CONSTRAINT fk_detail_product FOREIGN KEY (id_detail_product) REFERENCES detail_product(id),
ADD CONSTRAINT fk_motif_produk FOREIGN KEY (id_motif_produk) REFERENCES motif_produk(id);


ALTER TABLE pesanan
ADD COLUMN done_payment DATETIME,
ADD COLUMN limit_payment DATETIME,
ADD COLUMN status_pembayaran VARCHAR(50),
ADD COLUMN foto_pembayaran VARCHAR(100);

ALTER TABLE pesanan
ADD COLUMN id_jenis_pengiriman INT AFTER id_promo,
ADD COLUMN id_toko INT AFTER id_jenis_pengiriman;

ALTER TABLE pesanan
MODIFY COLUMN id_toko INT NULL,
MODIFY COLUMN id_jenis_pengiriman INT NULL;


ALTER TABLE pesanan
ADD CONSTRAINT fk_pesanan_jenis_pengiriman
    FOREIGN KEY (id_jenis_pengiriman) REFERENCES jenis_pengiriman(id),
ADD CONSTRAINT fk_pesanan_toko
    FOREIGN KEY (id_toko) REFERENCES toko(id);

ALTER TABLE customer ADD COLUMN reset_token VARCHAR(255) DEFAULT NULL;
