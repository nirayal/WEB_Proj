<?php
require_once("init.php");


class Recipe
{
    private $name;
    private $email;
    private $phone_num; 
    private $recipe_name;
    private $ingredients;
    private $preparation;
   
    function __toString(){ //for test to print the object
        return "Recipe: || by: ".$this->name." | ".$this->email." | ".$this->phone_num." ||<br> Recipe name: ".$this->recipe_name.".<br> Ingredients: ".$this->ingredients."<br> Preparation Process: ".$this->preparation." ||<br>";
    }

    public function __construct($name = null, $email = null, $phone_num = null, $recipe_name = null, $ingredients = null, $preparation = null)
    {
        $this -> name = $name;
        $this -> email = $email;
        $this -> phone_num = $phone_num;
        $this -> recipe_name = $recipe_name;
        $this -> ingredients = $ingredients;
        $this -> preparation = $preparation;
    }

    //general getter methods
    public function __get($property)
    {
        if(property_exists($this, $property))
        {
            return $this -> $property;
        }
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) 
            $this->$property = $value;
    }

    private function instantation($poll_array)
    {
        foreach($poll_array as $attribute => $value)
            if($result = $this -> has_attribute($attribute))
                $this -> $attribute = $value;
    }
    private function has_attribute($attribute)
    {
        $object_properties = get_object_vars($this);
        return array_key_exists($attribute, $object_properties);
    }
    public static function fetch_recipes()
    {
        global $database;
        $sql = "select * from recipes";
        $result = $database -> query($sql);
        $polls = null;

        if($result)
        {
            $i = 0;
            if($result -> num_rows > 0)
                while($row = $result -> fetch_assoc())
                {
                    $recipe = new Recipe();
                    $recipe -> instantation($row);
                    $recipes [$i] = $recipe;
                    $i += 1;
                }
        }
        return $recipes;
    }
    public function add_recipe()
    {
        global $database;
        $error = null;

        $sql = "insert into recipes(name, email, phone_num, recipe_name, ingredients, preparation) values ('" . $this->name . "','" . $this->email . "','" . $this->phone_num . "','" . $this->recipe_name . "','" . $this->ingredients . "','" . $this->preparation . "')";
        $result = $database -> query($sql);

        if(!$result)    
            $error = "coul'd not find recipe. Error is :". $database -> get_connection() -> error;
        return $error;
    }
    public function find_recipe_by_attribute($attribute, $value)
    {
        global $database;
        $error = null;

        $sql = "select * from recipes where ".$attribute." = '".$value."'";
        $result = $database -> query($sql);
        if(!$result)
            $error = "coul'd not find recipe. Error is :". $database -> get_connection() -> error;
        elseif($result -> num_rows >0)
        {
            $found_recipe = $result ->fetch_assoc();
            $this -> instantation($found_recipe);
        }
        else
            $error = "Can't find recipe by this value";
        return $error;
    }
}