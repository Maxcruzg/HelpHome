<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Retry\RetryStrategyInterface;
use PhpParser\Node\Stmt\Return_;

class UploadComponent extends Component
{
    protected $components = ['Flash', ];

    public function uploadImage($image, $defaultName)
    {
        if ($image != null) {

            // Si no se sube una imágen al formulario, definir una imágen por defecto.
            if ($image->getError() == \UPLOAD_ERR_NO_FILE) {
                return $defaultName;
            }
            // Si extensión de imágen NO es png, jpg o jpeg, tirar error.
            $type = $image->getClientMediaType();
            if ( !($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png') ) {
                $this->Flash->error(__('El archivo debe ser una imágen .png, .jpeg o .jpg. Por favor intentelo de nuevo.'));
                return false;
            }

            // Si todos los criterios se cumplen, definir nuevo nombre de la imágen y su ruta para guardarla.
            $imageOldName = $image->getClientFilename();
            $imageNewName = date('YmdHis') . $imageOldName;
            $imageRoute = WWW_ROOT . 'img/image/' . $imageNewName;

            $image->moveTo($imageRoute);
            return ($imageNewName);
        } else {
            $this->Flash->error(__('Hubo un error al subir la imágen. Por favor intentelo de nuevo.'));
            return false;
        }
    }



}
?>