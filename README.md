yang bikin saldo muter, triger nilainya:
<span id="dailyProfit">2.000000</span>

Cara kerjanya:

daily_profit - Mengambil nilai daily profit dari elemen #dailyProfit
per_second - Menghitung profit per detik: daily_profit / 86400 (86400 = jumlah detik dalam 1 hari)
setInterval - Setiap 1.5 detik (1500ms), menambahkan per_second ke balance_value

Untuk meningkatkan efek mining:
Jika ingin balance lebih cepat bergerak atau lebih smooth, ubah:

Interval lebih cepat: Ganti 1500 menjadi 1000 (1 detik) atau 500 (0.5 detik)
Daily profit lebih besar: Pastikan nilai dailyProfit dari server lebih besar

Contoh untuk update setiap detik:

setInterval(function () {
    balance_value = parseFloat(balance_value) + parseFloat(per_second);
    balance.innerText = parseFloat(balance_value).toFixed(6);
    fiatBalance.innerText = (balance.innerText * currentRate).toFixed(5);
}, 1000); // Ubah dari 1500 ke 1000