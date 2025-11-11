<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model{

    protected $table = 'guest_entry_logs';
    
    protected $allowedFields = ['fname',
                                'sname',
                                'guest_company',
                                'guest_count',
                                'guardian',
                                'purpose',
                                'zone',
                                'permanent',
                                'consent',
                                'comment'];
    
    protected $validationRules = [
        'name' => 'required|max_length[128]|polish_letters_space' //custom rule w App\Validation\CustomRules.php
    ];
}