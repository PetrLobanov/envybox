<?php

namespace App\Forms;

use App\Forms;

class Factory {

    public static function getForms($instance) {

        switch ($instance) {

            case 'CreateForm':

                    return new Forms\CreateForm();

                break;

            default:
                return false;

        }



    }

}