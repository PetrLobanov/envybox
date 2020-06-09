<?php

namespace App\Forms;

Class CreateForm {

    private $title;
    private $body;
    private $model;

    public function __construct() {

        $this->title = 'Form One';
        $this->body = [
            ['type' => 'text', 'name' => 'name', 'placeholder' => 'Ваше имя'],
            ['type' => 'text', 'name' => 'phone', 'placeholder' => 'Ваш телефон'],
            ['type' => 'text', 'name' => 'message', 'placeholder' => 'Ваше сообщение'],
        ];
        $this->model = new \App\FormOne();

    }

    public function getTitle() {

        return $this->title;

    }

    public function getBodyElements() {

        return $this->body;

    }

    public function getModel() {

        return $this->model;

    }

    public function insert($data = null) {

        $this->model->name = $data['name'];
        $this->model->phone = $data['phone'];
        $this->model->message = $data['message'] ?? '';

        if ($this->model->save()) {

            return 'Данные сохранены!';

        } else {

            return 'Ошибка сохранения данных(';

        }


    }


}