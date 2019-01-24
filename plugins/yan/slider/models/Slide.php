<?php namespace Yan\Slider\Models;

use Model;

/**
 * Model
 */
class Slide extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yan_slider_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    /* Relações */

    public $attachOne=
    [
        'image' => 'System\Models\File'
    ];
}
