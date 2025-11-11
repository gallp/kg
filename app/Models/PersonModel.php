<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonModel extends Model{

    protected $table = 'person';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'name',
    'comment',
    'photo',
    'qr_code'
    ];
    
    protected $returnType = 'array';
    
    protected $validationRules = [
        'name' => 'required|max_length[128]|polish_letters_space' //custom rule w App\Validation\CustomRules.php
    ];

    public function getPersonsWithReferences(){

        return $this->select('
        person.*,
        company.name as company_name,')
        ->join('company_person','company_person.id_person = person.id')
        ->join('company','company.id = company_person.id_company')
        ->findAll();}
    

}