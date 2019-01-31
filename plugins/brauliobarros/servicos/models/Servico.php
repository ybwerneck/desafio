<?php namespace BraulioBarros\Servicos\Models;

use Model;

/**
 * Model
 */
class Servico extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'brauliobarros_servicos_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'imagem' => 'System\Models\File'
    ];
    
}
