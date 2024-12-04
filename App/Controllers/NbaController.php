<?php
namespace App\Controllers;

use App\Models\Nba;

class NbaController {

    public function index() {
        // Obtiene todos los jugadores de la NBA
        $nba = Nba::all();
        require '../resources/views/nba/index.blade.php';
    }

    public function create() {
        require '../resources/views/nba/create.blade.php';
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
        header('Location: /nba');
    }

    public function edit($id) {
        // Busca el jugador por su ID
        $nba = (new Nba())->find($id);
        if (!$nba) {
            header('Location: /nba');
            exit();
        }
        require '../resources/views/nba/edit.blade.php';
    }

    public function update($id) {
        // Busca el jugador por su ID
        $nba = (new Nba())->find($id);
        if (!$nba) {
            header('Location: /nba');
            exit();
        }

        // Actualiza los datos del jugador
        $nba->nombre = $_POST['nombre'];
        $nba->equipo = $_POST['equipo'];
        $nba->fecha_debut = $_POST['fecha_debut'];
        $nba->anillos_ganados = $_POST['anillos_ganados'];
        $nba->save();
        header('Location: /nba');
    }

    public function delete($id) {
        if ($id === null) {
            header('Location: /nba');
            exit();
        }

        $nba = (new Nba())->find($id);
        require '../resources/views/nba/delete.blade.php';
    }

    public function destroy($id) {
        (new Nba())->delete($id);
        header('Location: /nba');
    }

    public function confirmDelete($id) {
        $nba = (new Nba())->find($id);
        require '../resources/views/nba/delete.blade.php';
    }

    public function show($id) {
        // Busca el jugador por su ID
        $nba = (new Nba())->show($id);
        if (!$nba) {
            header('Location: /nba');
            exit();
        }
        require '../resources/views/nba/show.blade.php';
    }
}