-- Active: 1745562774050@@192.168.1.238@9356@web-furnice

-- DML
INSERT INTO users (token, nama_user, password, jabatan_user, role_akses)
VALUES 
('abc123token', 'Admin Satu', 'admin123', 'Admin Utama', 1),
('xyz789token', 'User Dua', 'user123', 'Staff Operasional', 2);

INSERT INTO kategori (id_parent_kategori, nama) VALUES
(NULL, 'Living Room'),
(NULL, 'Bedroom'),
(NULL, 'Kitchen');


INSERT INTO product 
(nama_product, id_kategori, uom, qty, nama_vendor, foto, deskripsi, spesifikasi, tipe_product)
VALUES
('Sofa Minimalis', 1, 'pcs', 10, 'Vendor A', 'sofa.jpg', 'Sofa nyaman untuk ruang tamu', 'Material: Kayu, Busa, Kain', 'Furniture'),
('Meja TV Kayu', 1, 'pcs', 5, 'Vendor B', 'meja_tv.jpg', 'Meja TV dari kayu jati', 'Ukuran: 120x40x50 cm', 'Furniture'),
('Rak Dinding', 1, 'pcs', 20, 'Vendor A', 'rak.jpg', 'Rak tempel dinding minimalis', 'Material: MDF', 'Dekorasi'),
('Tempat Tidur Queen', 2, 'pcs', 7, 'Vendor C', 'bed.jpg', 'Ranjang queen size nyaman', 'Ukuran: 160x200 cm', 'Furniture'),
('Lemari Pakaian 3 Pintu', 2, 'pcs', 4, 'Vendor D', 'lemari.jpg', 'Lemari besar untuk kamar tidur', 'Material: Kayu solid', 'Furniture'),
('Meja Rias', 2, 'pcs', 8, 'Vendor B', 'meja_rias.jpg', 'Meja rias dengan cermin bulat', 'Desain elegan modern', 'Furniture'),
('Meja Makan 4 Kursi', 3, 'set', 6, 'Vendor A', 'meja_makan.jpg', 'Meja makan untuk keluarga kecil', 'Material: Kayu solid', 'Furniture'),
('Kabinet Dapur', 3, 'pcs', 3, 'Vendor E', 'kabinet.jpg', 'Kabinet atas dan bawah dapur', 'Material: Plywood + HPL', 'Kitchen Set'),
('Rak Bumbu', 3, 'pcs', 15, 'Vendor A', 'rak_bumbu.jpg', 'Rak kecil untuk bumbu dapur', 'Ukuran: 30x10x15 cm', 'Aksesoris Dapur'),
('Kursi Tamu Kayu', 1, 'pcs', 12, 'Vendor F', 'kursi_tamu.jpg', 'Kursi klasik untuk tamu', 'Material: Kayu jati', 'Furniture'),
('Matras Tidur', 2, 'pcs', 10, 'Vendor G', 'matras.jpg', 'Matras empuk dan nyaman', 'Ukuran: 180x200 cm', 'Kasur'),
('Gorden Jendela', 1, 'pcs', 18, 'Vendor H', 'gorden.jpg', 'Gorden polos warna netral', 'Bahan: Polyester', 'Dekorasi'),
('Dispenser Dapur', 3, 'pcs', 9, 'Vendor I', 'dispenser.jpg', 'Dispenser air minum stainless', '3 Galon Kapasitas', 'Peralatan'),
('Lemari Dapur Gantung', 3, 'pcs', 4, 'Vendor J', 'lemari_gantung.jpg', 'Lemari gantung dapur atas', 'Panjang: 120 cm', 'Kitchen Set'),
('Cermin Hias', 2, 'pcs', 14, 'Vendor A', 'cermin.jpg', 'Cermin bundar untuk kamar tidur', 'Diameter: 50 cm', 'Dekorasi');


-- DDL
ALTER TABLE pesanan
MODIFY COLUMN total_harga INT;

