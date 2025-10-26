    <?php
    class App {
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->parseURL();
            // controller
            if(isset($url[0]) && file_exists('../app/controllers/'.$url[0].'.php')){
                // cek dlu apakah ada file didalam folder controllers
                $this->controller = $url[0];
                unset($url[0]); // hapus elemen array ke 1
            }

            require_once '../app/controllers/'.$this->controller.'.php';
            $this->controller = new $this->controller;

            //method
            if(isset($url[1])){ 
                if(method_exists($this->controller, $url[1])){
                    $this->method = $url[1];
                    unset($url[1]); // hapus elemen array ke 2

                }
            }

            //params

            if(!empty($url)){
                $this->params = array_values($url);
            }

            // jalankan controller dan method , serta kirimkan params jika ada
            call_user_func_array([$this->controller, $this->method], $this->params);

        }
        public function parseURL()
        {
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL); 
                // MEMBERSIHKAN URL DARI KARAKTER ANEH
                $url = explode('/', $url);
                return $url;
            }
            return[];
        }
    }
    ?>