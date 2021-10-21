CREATE TABLE `detail_transaksi` ( 
`id` INT NOT NULL AUTO_INCREMENT ,  
`id_transaksi` INT NULL,  
`harga`  INT NULL,   
`jumlah`  INT NULL,   
`subtotal`  INT NULL,   
PRIMARY KEY  (`id`));

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `harga`, `jumlah`, `subtotal`) VALUES (NULL, '1', '10000', '2', '20000');
INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `harga`, `jumlah`, `subtotal`) VALUES (NULL, '2', '6250', '4', '25000');