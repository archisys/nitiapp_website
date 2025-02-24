<?php
namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table         = 'contacts';
    protected $primaryKey    = 'contacts_id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'contact_number', 'solution', 'message'];
}
