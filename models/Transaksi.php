<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property int|null $pasien_id
 * @property int|null $tindakan_id
 * @property int|null $obat_id
 * @property int|null $pegawai_id
 * @property int|null $jumlah
 * @property float|null $total_harga
 * @property string $tanggal_transaksi
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pasien_id', 'tindakan_id', 'obat_id', 'pegawai_id', 'jumlah'], 'integer'],
            [['total_harga'], 'number'],
            [['tanggal_transaksi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pasien_id' => 'Pasien ID',
            'tindakan_id' => 'Tindakan ID',
            'obat_id' => 'Obat ID',
            'pegawai_id' => 'Pegawai ID',
            'jumlah' => 'Jumlah',
            'total_harga' => 'Total Harga',
            'tanggal_transaksi' => 'Tanggal Transaksi',
        ];
    }

    public function relations()
    {
        return array(
            'pasien' => array(self::BELONGS_TO, 'Pasien', 'pasien_id'),
            'tindakan' => array(self::BELONGS_TO, 'Tindakan', 'tindakan_id'),
            'obat' => array(self::BELONGS_TO, 'Obat', 'obat_id'),
        );
    }
}
