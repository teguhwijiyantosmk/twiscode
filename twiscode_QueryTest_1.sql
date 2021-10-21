CREATE TABLE `transaksi` ( 
`id` INT NOT NULL AUTO_INCREMENT ,  
`tanggal_order` DATETIME NULL ,  
`status_pelunasan` VARCHAR(10) NULL ,  
`tanggal_pembayaran` DATETIME NULL ,    
PRIMARY KEY  (`id`));

INSERT INTO `transaksi` (`id`, `tanggal_order`, `status_pelunasan`, `tanggal_pembayaran`) VALUES (NULL, '2020-12-01 11:30:00', 'lunas', '2020-12-01 12:00:00');
INSERT INTO `transaksi` (`id`, `tanggal_order`, `status_pelunasan`, `tanggal_pembayaran`) VALUES (NULL, '2020-12-02 10:30:00', 'pending', 'NULL');
