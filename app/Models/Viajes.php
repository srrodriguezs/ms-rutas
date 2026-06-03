<?php
namespace app\Models;

use app\Config\Conexion;

class Viajes extends Model
{
    protected $id = 0;
    protected $conductor_id = 0;
    protected $vehiculo_id = 0;
    protected $ruta_id = 0;
    protected $fecha_salida = null;
    protected $hora_salida = null;
    protected $fecha_estimada_llegada = null;
    protected $observaciones = null;
    protected $estado = 'programado';

    public function __construct($data = [])
    {
        parent::__construct();
        foreach ($data as $key => $value) {
            $this->set($key, $value);
        }
    }
}