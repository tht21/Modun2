<?php
class Application{
    public String $name;
    public static int $count =0;
    public function __construct($name){
        $this->name = $name;
        self::$count++;

    }
}
echo Application::$count;
$app = new Application("app one");
echo  Application::$count;
