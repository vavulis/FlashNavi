<?php
namespace vavulis;

class Cards
{

    private $cards = NULL;

    public function __construct($cards)
    {
        if (is_array($cards)) {
            for ($i = 0; $i < count($cards); $i++) {
                if (!$cards[$i] instanceof Card) {
                    throw new Exception('Параметрами конструктора Cards должен быть массив объектов Card');
                }
            }
        }
        $this->cards = $cards;
    }

    public function getCards()
    {
        return $this->cards;
    }

    public function setCards($cards)
    {
        if (is_array($cards)) {
            for ($i = 0; $i < count($cards); $i++) {
                if (!($cards[$i] instanceof Card)) {
                    throw new Exception('Параметрами конструктора Cards должен быть массив объектов Card');
                }
            }
        }
        $this->cards = $cards;
    }

    public function saveToFile($file_name)
    {
        if (($this->cards != NULL) && (is_array($this->cards) && (count($this->cards > 0)))) {
            $result = [];
            for ($i = 0; $i < count($this->cards); $i++) {
                $result[] = $this->cards[$i]->toArray();
            }
        }
        file_put_contents($file_name, json_encode($result));
    }

    public function loadFromFile($file_name)
    {
        $file = file_get_contents($file_name);
        $cards = json_decode($file, TRUE);
        if (is_array($cards) && (count($cards) > 0)) {
            for ($i = 0; $i < count($cards); $i++) {
                $this->cards[] = new Card($cards[$i]['common_link'], $cards[$i]['img'], $cards[$i]['title'], $cards[$i]['text']);
            }
        } else {
            throw new Exception('Не могу загрузить данные из файла: ' . $file_name);
        }
    }
}
