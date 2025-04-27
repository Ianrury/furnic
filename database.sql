-- Active: 1745562774050@@192.168.1.238@9356@web-furnice

CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    token VARCHAR(50),
    nama_user VARCHAR(50),
    password VARCHAR(100),
    jabatan_user VARCHAR(50),
    role_akses INT
);

CREATE TABLE customer (
    id_customer INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    email VARCHAR(30),
    no_hp VARCHAR(15),
    alamat VARCHAR(100),
    kode_pos INT,
    kata_sandi VARCHAR(100)
);

CREATE TABLE kategori (
    id_kategori INT PRIMARY KEY AUTO_INCREMENT,
    id_parent_kategori INT,
    nama VARCHAR(100),
    FOREIGN KEY (id_parent_kategori) REFERENCES kategori(id_kategori)
);

CREATE TABLE product (
    id_sku INT PRIMARY KEY AUTO_INCREMENT,
    nama_product VARCHAR(100),
    id_kategori INT,
    uom VARCHAR(10),
    qty INT,
    nama_vendor VARCHAR(100),
    foto VARCHAR(255),
    deskripsi TEXT,
    spesifikasi TEXT,
    tipe_product VARCHAR(50),
    FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori)
);

CREATE TABLE pricelist (
    id_pricelist INT PRIMARY KEY AUTO_INCREMENT,
    id_sku INT,
    harga INT,
    FOREIGN KEY (id_sku) REFERENCES product(id_sku)
);

CREATE TABLE promo (
    id_promo INT PRIMARY KEY AUTO_INCREMENT,
    id_sku INT,
    nama_promo VARCHAR(100),
    jenis_promo VARCHAR(100),
    total_promo DECIMAL(10,2),
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (id_sku) REFERENCES product(id_sku)
);

CREATE TABLE pesanan (
    id_pesanan INT PRIMARY KEY AUTO_INCREMENT,
    id_customer INT,
    id_sku INT,
    id_pricelist INT,
    id_promo INT,
    qty INT,
    total_harga DECIMAL(10,2),
    tanggal_pesanan DATETIME,
    FOREIGN KEY (id_customer) REFERENCES customer(id_customer),
    FOREIGN KEY (id_sku) REFERENCES product(id_sku),
    FOREIGN KEY (id_pricelist) REFERENCES pricelist(id_pricelist),
    FOREIGN KEY (id_promo) REFERENCES promo(id_promo)
);

DROP TABLE session;

CREATE TABLE session (
    id_session INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT,
);

CREATE TABLE review (
    id_review INT PRIMARY KEY AUTO_INCREMENT,
    id_customer INT,
    id_sku INT,
    rating INT,
    comment VARCHAR(255),
    FOREIGN KEY (id_customer) REFERENCES customer(id_customer),
    FOREIGN KEY (id_sku) REFERENCES product(id_sku)
);
