<?php

namespace app\controllers;

use app\models\laporan;
use app\models\LaporanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LaporanController implements the CRUD actions for laporan model.
 */
class LaporanController extends Controller
{
    public function actionTransaksiBulanan()
    {
        // Ambil data transaksi per bulan dari database
        $dataProvider = Yii::app()->db->createCommand()
            ->select("DATE_PART('month', tanggal_transaksi) AS bulan, COUNT(*) AS jumlah")
            ->from('transaksi')
            ->group('bulan')
            ->queryAll();

        // Siapkan label dan data untuk chart
        $labels = array_map(function($item) { return 'Bulan ' . $item['bulan']; }, $dataProvider);
        $data = array_column($dataProvider, 'jumlah');

        // Kirim data ke view
        $this->render('transaksiBulanan', compact('labels', 'data'));
    }
}