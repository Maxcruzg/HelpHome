<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class CitasController extends AppController
{

    public function aprobar($id = null)
    {
        $this->request->allowMethod(['post']);
        $cita = $this->Citas->get($id);

        $cita->estado = '1';

        if ($this->Citas->save($cita)) {
            $this->Flash->success('La cita ha sido aprobada.');
        } else {
            $this->Flash->error('Error al aprobar la cita. Por favor, inténtalo de nuevo.');
        }

        return $this->redirect($this->referer());
    }


    public function iniciar($id = null)
    {
        $this->request->allowMethod(['post']);
        $cita = $this->Citas->get($id);

        $cita->estado = '3';

        if ($this->Citas->save($cita)) {
            $this->Flash->success('La cita ha sido iniciada, se le enviara un correo al usuario para que este al tanto.');
        } else {
            $this->Flash->error('Error al aprobar la iniciar la citax. Por favor, inténtalo de nuevo.');
        }

        return $this->redirect($this->referer());
    }

    public function finalizar($id = null)
    {

        
        $cita = $this->Citas->get($id);
        $cita->estado = '4';
        $valorFinal = $this->request->getData('value');
        $cita->value = $valorFinal;

        if ($this->Citas->save($cita)) {
            $this->Flash->success('La cita ha sido Finalizada con éxito.');
        } else {
            $this->Flash->error('Error al FInalizar  la cita. Por favor, inténtalo de nuevo.');
        }

        return $this->redirect($this->referer());
    }

    public function rechazar($id = null)
    {
        $cita = $this->Citas->get($id);

        $cita->estado = '2';

        if ($this->Citas->save($cita)) {
            $this->Flash->success('La cita ha sido Rechazada, se le enviara un correo al usuario para que este al tanto.');
        } else {
            $this->Flash->error('Error al rechazar la cita. Por favor, inténtalo de nuevo.');
        }

        return $this->redirect($this->referer());
    }

    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('profesional');

        $cita = $this->Citas->get($id, [
            'contain' => ['Users' => ['Profesional', 'HistorialCitas', 'Calificaciones']],
        ]);

        $this->set(compact('cita'));
    }
}
