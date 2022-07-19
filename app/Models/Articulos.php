<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $connection = 'sqlsrv';
    public $timestamps = false;
    protected $table = "PRODUCCION.dbo.view_inventario_solicitud";

    public static function getArticulos()
    {

        return Articulos::all();
    }
    public static function getArticulosDos(){
        $sql_server = new \Sql_server();        
        $data = array();

        $sql_exec = "SELECT * FROM view_inventario_solicitud";
        $query = $sql_server->fetchArray( $sql_exec , SQLSRV_FETCH_ASSOC);

        $sql_server->close();
        return $query;
    }
}
