-- Reset AUTO_INCREMENT to 0
ALTER TABLE t_merek AUTO_INCREMENT=0;
ALTER TABLE t_kategori AUTO_INCREMENT=0;
ALTER TABLE t_sub_kategori AUTO_INCREMENT=0;
ALTER TABLE t_lokasi AUTO_INCREMENT=0;
ALTER TABLE t_sub_lokasi AUTO_INCREMENT=0;

-- Insert data to t_merek
INSERT INTO t_merek (merek) VALUES ('ACER');
INSERT INTO t_merek (merek) VALUES ('APPLE');
INSERT INTO t_merek (merek) VALUES ('ASUS');
INSERT INTO t_merek (merek) VALUES ('TOSHIBA');
INSERT INTO t_merek (merek) VALUES ('HP');
INSERT INTO t_merek (merek) VALUES ('DELL');
INSERT INTO t_merek (merek) VALUES ('PANASONIC');
INSERT INTO t_merek (merek) VALUES ('LENOVO');
INSERT INTO t_merek (merek) VALUES ('MSI');
INSERT INTO t_merek (merek) VALUES ('NEC');
INSERT INTO t_merek (merek) VALUES ('MICROSOFT');
INSERT INTO t_merek (merek) VALUES ('PACKARD BELL');
INSERT INTO t_merek (merek) VALUES ('FUJITSU');
INSERT INTO t_merek (merek) VALUES ('COMPAQ');
INSERT INTO t_merek (merek) VALUES ('SAMSUNG');
INSERT INTO t_merek (merek) VALUES ('SONY VAIO');

-- Insert data to t_kategori
INSERT INTO t_kategori (kategori) VALUES ('LAPTOP');
INSERT INTO t_kategori (kategori) VALUES ('AKSESORIS');
INSERT INTO t_kategori (kategori) VALUES ('DESKTOP');
INSERT INTO t_kategori (kategori) VALUES ('MONITOR');
INSERT INTO t_kategori (kategori) VALUES ('SERVER');
INSERT INTO t_kategori (kategori) VALUES ('PRINTER');
INSERT INTO t_kategori (kategori) VALUES ('HANDPHONE');
INSERT INTO t_kategori (kategori) VALUES ('HARDWARE');
INSERT INTO t_kategori (kategori) VALUES ('ELEKTRONIK');

-- Insert data to t_sub_kategori
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (1, 'NOTEBOOK');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (1, 'GAMING');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (1, 'APPLE');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (1, 'TABLET');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (1, 'WORKSTATION');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'MOUSE');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'BATERAI');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'COOLER FAN');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'FLASHDISK');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'KABEL POWER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'ADAPTOR');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'KABEL DVI');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'KEYBOARD');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'KABEL VGA');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'OPTICAL DRIVE');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'PORTABLE HDD');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'TAS DAN CASE');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'WEB CAM');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'SPEAKER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (2, 'AKSESORIS LAINNYA');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (3, 'ALL IN ONE');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (3, 'CPU');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (3, 'MINI PC');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (3, 'TOWER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (3, 'SFF');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (4, 'LCD PC');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (4, 'LED PC');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (4, 'LCD LAPTOP');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (4, 'LED LAPTOP');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (4, 'LCD TOUCHSCREENS');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (5, 'TOWER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (5, 'UDP');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (5, 'CISCO');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (6, 'AKSESORIS PRINTER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (6, 'CARTRIDGE');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (6, 'COPIER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (6, 'TINTA PRINTER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (6, 'UNIT PRINTER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (7, 'AKSESORIS HP');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (7, 'MEMORY CARD');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (7, 'POWER BANK');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (7, 'SMARTPHONE');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (7, 'SMARTWATCH');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (7, 'SPARE PARTS HP');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (7, 'TABLET');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (8, 'RAM');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (8, 'HARDDISK');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (8, 'SSD');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (8, 'MSATA');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (8, 'VGA');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (8, 'PROCESSOR');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (8, 'MOTHERBOARD');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (8, 'UPS');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (9, 'AC');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (9, 'CD DVC BLU RAY');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (9, 'HEADPHONE');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (9, 'HOME THEATER');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (9, 'PROYEKTOR');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (9, 'TELEPON');
INSERT INTO t_sub_kategori (id_kategori, sub_kategori) VALUES (9, 'TV');


-- Insert data to t_lokasi
INSERT INTO t_lokasi (lokasi) VALUES ('BATAM');
INSERT INTO t_lokasi (lokasi) VALUES ('MEDAN');
INSERT INTO t_lokasi (lokasi) VALUES ('JAKARTA');
INSERT INTO t_lokasi (lokasi) VALUES ('SINGAPURA');

-- Insert data to t_sub_lokasi
INSERT INTO t_sub_lokasi (id_lokasi, sub_lokasi) VALUES(1, 'LT.1 (Gudang)');
INSERT INTO t_sub_lokasi (id_lokasi, sub_lokasi) VALUES(1, 'LT.2');
INSERT INTO t_sub_lokasi (id_lokasi, sub_lokasi) VALUES(2, 'LT.1');
INSERT INTO t_sub_lokasi (id_lokasi, sub_lokasi) VALUES(2, 'LT.2');
INSERT INTO t_sub_lokasi (id_lokasi, sub_lokasi) VALUES(2, 'LT.3');
INSERT INTO t_sub_lokasi (id_lokasi, sub_lokasi) VALUES(3, 'LT.1');
INSERT INTO t_sub_lokasi (id_lokasi, sub_lokasi) VALUES(3, 'LT.2');
INSERT INTO t_sub_lokasi (id_lokasi, sub_lokasi) VALUES(4, 'GUDANG');