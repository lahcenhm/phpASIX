<?php
namespace App\Controllers;
use App\Models\Nba; // Canviar Book per Nba

class NbaController {

    public function index() {
        // Obtiene todos los jugadores de la NBA
        $nba = Nba::all();
        require '../resources/views/nba/index.blade.php'; // Modificado para usar nba
    }

    public function create() {
        require '../resources/views/nba/create.blade.php'; // Modificado para usar nba
    }

    public function store() {
        // Obtiene los datos del formulario
        $nombre = $_POST['nombre'];
        $equipo = $_POST['equipo'];
        $fecha_debut = $_POST['fecha_debut'];
        $anillos_ganados = $_POST['anillos_ganados'];

        // Crea un nuevo jugador NBA
        $newNba = new Nba([
            'nombre' => $nombre,
            'equipo' => $equipo,
            'fecha_debut' => $fecha_debut,
            'anillos_ganados' => $anillos_ganados
        ]);
        $newNba->save();
        header('Location: /nba'); // Redirige a la lista de jugadores
    }

    public function edit($id) {
        // Busca el jugador por su ID
        $nba = (new \App\Models\Nba)->find($id);
        if(!$nba) {
            header('Location: /nba'); // Redirige si no encuentra al jugador
            exit();
        }
        require '../resources/views/nba/edit.blade.php';
    }

    public function update($id) {
        // Busca el jugador por su ID
        $nba = (new \App\Models\Nba)->find($id);
        if(!$nba) {
            header('Location: /nba'); // Redirige si no encuentra al jugador
            exit();
        }

        // Actualiza los datos del jugador
        $nba->nombre = $_POST['nombre'];
        $nba->equipo = $_POST['equipo'];
        $nba->fecha_debut = $_POST['fecha_debut'];
        $nba->anillos_ganados = $_POST['anillos_ganados'];
        $nba->save(); // Guarda los cambios
        header('Location: /nba'); // Redirige a la lista de jugadores
    }

    public function delete($id) {
        // Si no se pasa un ID, redirige a la lista
        if ($id === null) {
            header('Location: /nba');
            exit();
        }

        // Busca el jugador para confirmar la eliminación
        $nba = (new \App\Models\Nba)->find($id);
        return require '../resources/views/nba/delete.blade.php';
    }

    public function destroy($id) {
        // Elimina el jugador de la base de datos
        (new \App\Models\Nba)->delete($id);
        header('Location: /nba'); // Redirige a la lista de jugadores
    }

    public function confirmDelete($id) {
        // Muestra la página de confirmación de eliminación
        $nba = (new \App\Models\Nba)->find($id);
        return require '../resources/views/nba/delete.blade.php';
    }
}