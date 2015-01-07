<?php

class DataHelper
{
    /*
     * @type array[]
     */
    protected $data = array();

    /*
     * @type string
     */
    protected $key = 'unknown';

    /*
     * Set the data array
     *
     * @param array $data
     */
    public function setData($data){
        $this->data = array_reverse($data);
    }

    /*
     * Set the data array key to focus on
     *
     * @param array $data
     */
    public function setKey($key){
        $this->key = $key;
    }

    /**
     * Normalize the data to a plain array
     *
     * @return array
     */
    public function normalize() {
        $buffer = array();

        foreach ($this->data as $iter) {
            if (isset($iter[$this->key]) === true) {
                $year = substr($iter['date'], 0, 4);

                if (isset($buffer[$year]) === false) {
                    $buffer[$year] = array();
                }

                $buffer[$year][] = array(
                    'title' => $iter['title'],
                    'url'   => $iter['url'],
                    'date'  => $iter['date'],
                    'items' => current($iter[$this->key])
                );
            }
        }

        return $buffer;
    }
}
