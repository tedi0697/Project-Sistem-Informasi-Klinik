<h1>Laporan Transaksi per Bulan</h1>

<?php
// Memanggil widget ChartJS
$this->widget('ext.chartjs.Chart', array(
    'type' => 'bar', // Menggunakan jenis grafik batang
    'data' => array(
        'labels' => $labels, // Label bulan
        'datasets' => array(
            array(
                'label' => "Jumlah Transaksi",
                'backgroundColor' => "rgba(75, 192, 192, 0.2)", // Warna background bar
                'borderColor' => "rgba(75, 192, 192, 1)", // Warna border bar
                'borderWidth' => 1,
                'data' => $data, // Data jumlah transaksi
            ),
        ),
    ),
    'options' => array(
        'scales' => array(
            'yAxes' => array(
                array(
                    'ticks' => array('beginAtZero' => true), // Skala y mulai dari nol
                ),
            ),
        ),
    ),
));
?>