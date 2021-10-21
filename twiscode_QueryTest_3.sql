select
transaksi.tanggal_order,
transaksi.status_pelunasan as status,
transaksi.tanggal_pembayaran,
detail_transaksi.subtotal as total,
detail_transaksi.jumlah as jumlah_barang
from transaksi
inner join detail_transaksi on detail_transaksi.id_transaksi=transaksi.id
order by transaksi.tanggal_order asc