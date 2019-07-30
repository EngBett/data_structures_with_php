<?php
namespace stacks;

class Stack{
    private $list;

    /**
     * Stack constructor.
     */
    public function __construct()
    {
        //initialize array
        $this->list = array();
    }


    /**
     * Check if array is empty
     * @return bool
     */
    public function is_empty(){
        return count($this->list) == 0;
    }


    /**
     * Push data to the end of the stack list
     * @param $data
     */
    public function push($data){
        array_push($this->list,$data);
    }

    /**
     * Remove and return the last item in the stack list
     * @return mixed|null
     */
    public function pop(){
        if(!$this->is_empty()){
            $item = $this->list[count($this->list)-1];
            unset($this->list[count($this->list)-1]);
            return $item;
        }

        return null;
    }

    /**
     * See the head of the stack
     * @return mixed|null
     */
    public function peek(){
        if(!$this->is_empty()){
            return end($this->list);
        }

        return null;
    }

    /**
     * Display all the values of the stack list
     * @return null
     */
    public function display(){
        if(!$this->is_empty()){
            foreach ($this->list as $item){
                print_r($item);
            }
        }
        return null;
    }

    /*
     * get the size of the stack
     */
    public function size(){
        return count($this->list);
    }
}