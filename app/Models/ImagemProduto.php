<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImagemProduto extends Model
{
    use HasFactory;

    protected $table = 'imagens_produto';

    protected $fillable = ['produto_id', 'caminho_imagem'];

    public $timestamps = false;

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}

