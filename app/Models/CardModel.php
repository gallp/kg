<?php
namespace App\Models;

use CodeIgniter\Model;

class CardModel extends Model
{
    protected $table = 'rcpcard';
    protected $primaryKey = 'id_card';
    protected $allowedFields = ['card_number','active'];
    //protected $returnType = 'array';
    protected $returnType = \App\Entities\Card::class;

}