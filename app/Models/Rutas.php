<?php
namespace app\Models;

use app\Config\Conexion;

class Ruta extends Model
{
    protected $id = 0;
    protected $ciudad_origen = null;
    protected $ciudad_destino = null;
    protected $distancia = null;
    protected $tiempo_estimado = null;
    protected $observaciones = null;

    public function __construct($data = [])
    {
        parent::__construct();
        foreach ($data as $key => $value) {
            $this->set($key, $value);
        }
    }
}