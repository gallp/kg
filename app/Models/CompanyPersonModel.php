<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyPersonModel extends Model{

protected $table = 'company_person';
protected $allowedFields = [
'id_company',
'id_person'
];

protected $returnType = 'array';

    public function getCompanPersonWithReferences(){
    
        return $this->select('
        company_person.*,
        company.name as company_name,
        person.name as person_name,
        person.comment as person_comment')
        ->join('company','company.id = company_person.id_company')
        ->join('person','person.id = company_person.id_person')
        ->findAll();}

}