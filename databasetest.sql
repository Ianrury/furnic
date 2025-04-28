-- Active: 1727836521955@@127.0.0.1@3306@php_login_test

-- Active: 1745562774050@@192.168.1.238@9356@web-furnice

CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    token VARCHAR(50),
    nama_user VARCHAR(50),
    password VARCHAR(100),
    no_telpon VARCHAR(20),
    jabatan_user VARCHAR(50),
    email VARCHAR(100),
    role_akses INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE customer (
    id_customer INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    email VARCHAR(30),
    no_hp VARCHAR(15),
    alamat VARCHAR(100),
    kode_pos INT,
    kata_sandi VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE kategori (
    id_kategori INT PRIMARY KEY AUTO_INCREMENT,
    id_parent_kategori INT,
    nama VARCHAR(100),
    FOREIGN KEY (id_parent_kategori) REFERENCES kategori(id_kategori),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE product (
    id_product INT PRIMARY KEY AUTO_INCREMENT,
    nama_product VARCHAR(100),
    id_kategori INT,
    uom VARCHAR(10),
    qty INT,
    nama_vendor VARCHAR(100),
    foto VARCHAR(255),
    deskripsi TEXT,
    spesifikasi TEXT,
    tipe_product VARCHAR(50),
    FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE detail_product (
    id INT PRIMARY KEY AUTO_INCREMENT,
    foto_kanan VARCHAR(255),
    foto_kiri VARCHAR(255),
    foto_depan VARCHAR(255),
    id_product INT,
    foto_belakang VARCHAR(255),
    warna VARCHAR(100),
    motif VARCHAR(100),
     FOREIGN KEY (id_product) REFERENCES product(id_product),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE pricelist (
    id_pricelist INT PRIMARY KEY AUTO_INCREMENT,
    id_product INT,
    harga INT,
    FOREIGN KEY (id_product) REFERENCES product(id_product),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE promo (
    id_promo INT PRIMARY KEY AUTO_INCREMENT,
    id_product INT,
    nama_promo VARCHAR(100),
    jenis_promo VARCHAR(100),
    total_promo DECIMAL(10,2),
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (id_product) REFERENCES product(id_product),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE pesanan (
    id_pesanan INT PRIMARY KEY AUTO_INCREMENT,
    id_customer INT,
    id_product INT,
    id_pricelist INT,
    id_promo INT,
    qty INT,
    total_harga INT,
    tanggal_pesanan DATETIME,
    FOREIGN KEY (id_customer) REFERENCES customer(id_customer),
    FOREIGN KEY (id_product) REFERENCES product(id_product),
    FOREIGN KEY (id_pricelist) REFERENCES pricelist(id_pricelist),
    FOREIGN KEY (id_promo) REFERENCES promo(id_promo),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE session (
    id_session INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE review (
    id_review INT PRIMARY KEY AUTO_INCREMENT,
    id_customer INT,
    id_product INT,
    rating INT,
    comment VARCHAR(255),
    FOREIGN KEY (id_customer) REFERENCES customer(id_customer),
    FOREIGN KEY (id_product) REFERENCES product(id_product),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
