<?php

namespace App\Models;

class User extends Model
{

    public function getNotParents()
    {
        return $this->pdo->query(
            'SELECT u1.id, u1.lastname, u1.firstname, u1.email, 
             sum(u1.count + (case when u2.count is null then 0 else u2.count end)) as count 
             FROM users as u1 LEFT JOIN users as u2 ON u1.id = u2.parent_id
             WHERE u1.parent_id is null
             group by u1.id'
        )->fetchAll();
    }

    public function getParents($id)
    {
        $s = $this->pdo->prepare(
            'SELECT u1.id, u1.lastname, u1.firstname, u1.email, 
             sum(u1.count + (case when u2.count is null then 0 else u2.count end)) as count 
             FROM users as u1 LEFT JOIN users as u2 ON u2.parent_id = u1.id
             WHERE u1.parent_id = :id group by u1.id'
        );
        $s->execute(['id' => $id]);
        return $s->fetchAll();
    }

}