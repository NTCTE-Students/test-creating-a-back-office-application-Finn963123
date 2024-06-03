<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Orchid\Screens\EmailSenderScreen;


class EmailSenderScreen extends Screen
{
     /**
       * Метод, определяющий все входные данные экрана. 
       * Именно в нём должны вызываться запросы к базе данных,
       * api или любые другие (не обязательно явно),
       * результатом которого должен быть массив, 
       * обращение к которым будут использоваться его ключи.
       */
    public function query(): array
    {
        return [];
    }

    /**
     * Имя отображается на экране пользователя и в заголовках
     */
    public function name(): ?string
    {
        return "Popusk";
    }

    /**
     * Описание отображается на экране пользователя и в заголовках
     */
    public function description(): ?string
    {
        return "suda klicat' pri prodaje!";
    }
    
     /**
       * Определяет управляющие кнопки и события,
       * которые должны будут произойти по нажатию
       */
    public function commandBar(): array
    {
        return [];
    }

    /**
      * Набор отображений 
      * строк, таблиц, графиков,
      * модальных окон и их комбинации.
      */
    public function layout(): array
    {
        return [];
    }
}
