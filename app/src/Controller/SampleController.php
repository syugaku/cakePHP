<?php
namespace App\Controller;
use App\Controller\Appcontroller;
class SampleController extends AppController
{
        public function index($name = "", $age = "")
        {
                $this->autoRender = false;
                echo "<html><head>Sample Page</head>";
                echo "<body><p>CakePHP サンプルページ</p>";
                if($name == "" || $age == "") {
                        $this->setAction("error");
                }
                else
                {
                echo "<p>ようこそ " . $name . "さん</p>";
                echo "<p>あなたの年齢は " . $age . "歳ですね。</p>";
                echo "</html>";
                }
        }
        public function error()
        {
                $this->autoRender = false;
                echo "<html><head>Error!</head>";
                echo "<body><p>名前か年齢が空欄です</p></body></html>";
        }
}
