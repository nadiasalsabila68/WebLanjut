<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
	protected $table                = 'post';
	protected $primaryKey           = 'post_id';
	protected $allowedFields        = ['judul','deskripsi','gambar','author','kategori','slug','created_at','updated_at'];
	protected $useTimestamps        = true;
}
