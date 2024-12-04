<?php
namespace App\Models;

use Core\App;
use PDO;

class Nba {
    protected static $table = "nba"; // Nom de la taula a MySQL

    public $id;
    public $nombre;
    public $equipo;
    public $fecha_debut;
    public $anillos_ganados;

    public function __construct($data = []) { // Constructor de la classe en PHP
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->nombre = $data['nombre'];
        $this->equipo = $data['equipo'];
        $this->fecha_debut = $data['fecha_debut'];
        $this->anillos_ganados = $data['anillos_ganados'];
    }

    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            // Actualizar
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET nombre = :nombre, equipo = :equipo, fecha_debut = :fecha_debut, anillos_ganados = :anillos_ganados WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':nombre', $this->nombre);
            $statement->bindValue(':equipo', $this->equipo);
            $statement->bindValue(':fecha_debut', $this->fecha_debut);
            $statement->bindValue(':anillos_ganados', $this->anillos_ganados ?? 0); // Usar 0 si es null
            $statement->execute();
        } else {
            // Crear
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (nombre, equipo, fecha_debut, anillos_ganados) VALUES (:nombre, :equipo, :fecha_debut, :anillos_ganados)');
            $statement->bindValue(':nombre', $this->nombre);
            $statement->bindValue(':equipo', $this->equipo);
            $statement->bindValue(':fecha_debut', $this->fecha_debut);
            $statement->bindValue(':anillos_ganados', $this->anillos_ganados ?? 0); // Usar 0 si es null
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }


    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $nbaPlayers = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $nbaPlayers[] = new self($result);
        }
        return $nbaPlayers;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}