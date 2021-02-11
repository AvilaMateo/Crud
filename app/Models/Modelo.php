<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;


class Modelo extends Model
{
    public function allArticles()
    {
        $articles = $this->db->Query('SELECT * FROM  articulos');
        return $articles->getResult();
    }

    public function insertA($data)
    {
        $article  =  $this->db->table('articulos');
        if ($article->insert($data)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function selectA($data)
    {
        $article = $this->db->table('articulos');
        $article->where($data);
        return $article->get()->getResultArray();
    }

    public function updateA($data, $id)
    {
        $article =  $this->db->table('articulos');
        $article->set($data);
        $article->where('id', $id);
        return $article->update();
    }

    public function deleteA($data)
    {
        $article = $this->db->table('articulos');
        $article->where($data);
        return $article->delete();
    }
}
