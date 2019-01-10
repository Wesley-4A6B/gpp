 <?php
    /**
     * The router
     */
    class Router
    {
        /**
         * Create new instance
        */
        public function __construct() 
        {

            $url = $_SERVER['REQUEST_URI'];

                $url = trim($url, "/");

            $packets = explode('/',$url);
            
            $this->determineDestination($packets);
        }   
        /**
         * Determine the destination
         *
         * @param string $packets
         * @return void
         */
        public function determineDestination($packets='')
        {
            if(!isset($packets[1]) && empty($packets[1])){
                $class = "biosController";
            } else {
                $class = $packets[1];
            }
           if(!isset($packets[2]) && empty($packets[2])){
                $method = "home";
                
            } else {
                $method = $packets[2];
            }

                $this->sendToDestination($class, $method, array_slice($packets, 3));
        }

        /**
         * Send to destination
         *
         * @param string $classname
         * @param string $method
         * @param string $params
         * @return void
         */
        public function sendToDestination($classname, $method, $params)
        {
            $class =  APP_DIR . '/controller/' . $classname . '.php';
            require_once($class);

            $obj = new $classname;
            die(call_user_func_array(array($obj, $method), $params));
        }

    }
 ?>

	