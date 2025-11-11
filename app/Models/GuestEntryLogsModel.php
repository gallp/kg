<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestEntryLogsModel extends Model{

protected $table = 'guest_entry_logs';
protected $allowedFields = [
'fname',
'sname',
'guest_company',
'guest_count',
'guardian',
'purpose',
'zone',
'entry_datetime',
'confirmation_datetime',
'exit_datetime',
'permanent',
'consent',
'comment'

];

protected $returnType = 'array';

public function getGuestsWithReferences(){
    
    return $this->select('
    guest_entry_logs.*,
    guardian.name as guardian_name,
    zone.name as zone_name')
    ->join('guardian','guardian.id = guest_entry_logs.guardian')
    ->join('zone','zone.id_zone = guest_entry_logs.zone')
    ->findAll();
}

public function getGuestEntryLog($id){
    return $this->select('
    guest_entry_logs.*,
    guardian.name as guardian_name,
    zone.name as zone_name')
    ->join('guardian','guardian.id = guest_entry_logs.guardian')
    ->join('zone','zone.id_zone = guest_entry_logs.zone')
    ->findAll();

}

public function confirmGuestEntry($id){
        
        return $this->update($id, [
            'confirmation_datetime' => date('Y-m-d H:i:s')
        ]);
    }

public function setGuestExit($id){
        
        return $this->update($id, [
            'exit_datetime' => date('Y-m-d H:i:s')
        ]);
    }

public function unsetGuestExit($id){
        
        return $this->update($id, [
            'exit_datetime' => null
        ]);
    }    
}