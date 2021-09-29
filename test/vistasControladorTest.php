<?php


    use PHPUnit\Framework\TestCase;
    class vistasControladorTest extends TestCase{
     
      private $respuesta;
      public function setUp(): void{
          $this->respuesta = new vistasControlador();
      }  
      public function testForzar_cierre_sesion_controlador(){
          $this->assertEquals("login", $this->respuesta->obtener_vistas_controlador("dashboard",""));
      }
    }
?>