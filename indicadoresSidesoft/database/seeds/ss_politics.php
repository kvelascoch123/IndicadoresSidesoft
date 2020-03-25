<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ss_politics extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            "1" => array("restan", "No documentar requerimiento, documentación incompleta o errada", 5, 1),
            "2" => array("restan", "No seguir el procedimiento", 2, 1),
            "3" => array("restan", "No realizar reunión de impacto", 3,1),
            "4" => array("restan", "Errores en parametrización y configuración", 3, 1),
            "5" => array("restan", "Pruebas de QA Incompletas", 5, 1),
            "6" => array("restan", "Falta de comunicación sobre potenciales problemas", 2, 1),
            "7" => array("restan", "Entregables incompletos y fuera del estándar", 3, 1),
            "8" => array("restan", "Desarrollo devuelto por el cliente", 10, 1),
            "9" => array("restan", "No Formalización de las entregas con el acta correspondiente aprobado por el usuario", 5, 1),
            "10" => array("restan", "No asignar las tareas al  backlog correspondiente", 3, 1),
            "11" => array("restan", "No enviar el informe de avance al cliente", 5, 1),
            "12" => array("restan", "No planificar adecuadamente la entrega de un requerimiento al cliente", 3, 1),
            "13" => array("restan", "No probar el desarrollo en el tiempo previsto", 1, 1),
            "14" => array("restan", "No registrar las notas de aprobación de un ticket", 1, 1),
            "15" => array("restan", "No especificar en la documentación cuando se trata de funcionalidad estándar o si es específica de un módulo", 1, 1),
            "16" => array("restan", "No se ejecutan las horas en los proyectos asignados en la planificación", 5, 1),
            "17" => array("restan", "No se socializa la postergación de actividades ya planificadas, en los otros proyectos", 5, 1),
            "18" => array("restan", "En el backlog quedan tareas  abiertas sin justificación", 5,1),
            "19" => array("restan", "Responsabilidades de cada puesto", 5,1),
            "20" => array("restan", "No se da el seguimiento adecuado en el cierre del backlog, por parte del líder", 5,1),
            "21" => array("restan", "No se registran las tareas de los recursos asignados al proyejctopor parte del líder", 5, 1),
            "22" => array("restan", "No se usan los recursos asignados al proyecto", 5, 1),
            "23" => array("restan", "Tareas on hold sin justificación", 5, 1),
            "24" => array("restan", "Registro tareas generales sin detalle (soporte salida producción, reunión de impacto, documentación desarrollos)", 5, 1),
            "25" => array("restan", "No se registran las actividades de recursos que justifiquen todas las horas asignadas", 5, 1),
            "26" => array("restan", "No se envían actas de acuerdos", 10, 1),
            "27" => array("restan", "No se envían los informes de avance", 10, 1),
            "28" => array("restan", "Se registra sobrecarga de asignación , no se gestiona  adecuadamente los recursos solicitados", 10,1),
            "29" => array("restan", "Reuniones en openproject", 10,1),
            "30" => array("restan", "se definen fechas de entrega deliberadamente, sin socializar", 10, 1),
            "31" => array("restan", "no tenemos planificación del área técnic", 10, 1),
            "32" => array("restan", "Registro de Tareas incorrecto no autorizado en el backlog", 3, 1),
     
            /******** SUMAN *********** */
           "33" => array("suman", "Siempre seguir con el procedimiento", 2, 1),
           "34" => array("suman", "Liberaciones sin problemas todo el mes", 5, 1),
           "35" => array("suman", "Envío de informes de avance continuos sin interrupción durante el mes", 5 ,1),
           "36" => array("suman", "Generar aportes en la wiki para newsletter", 2,1),
           "37" => array("suman", "Dictar una capacitación adicional en moodle", 5,1),
           "38" => array("suman", "Finalizar un proyecto con un máximo del 20% de desviación en tiempo.", 10,1),
           "39" => array("suman", "Finalizar un proyecto con el 20% de desviación en Costo.", 10,1),
           "40" => array("suman", "Generar una encuesta de satisfacción del proceso de implementación, donde la calificación se refleje en un aumento al variable para todos los involucrados.", 10,1),
           "41" => array("suman", "Calificación del equipo de jefe de equipo a consultores y viceversa, al azar un ticket y evaluar lo hace operaciones", 5, 1),
           "42" => array("suman", "Avance cronograma vs ejecutado con variación máxima del 15%", 10, 1),
           "43" => array("suman", "Auditorias individuales, plan de auditorías 2 al mes", 5,1),

           // AREA TECNICA  ID = 2
           "44" => array("suman", "Si en un desarrollo se hacen más requerimientos que los pedidos inicialmente y el ticket se termina en el tiempo estimado.", 3,2),
           "45" => array("suman", "Terminar el backlog antes de tiempo. Siempre y cuando el baklog este completo.", 3,2),
           "46" => array("suman", "Si todas las semanas del mes cierran el backlog con un promedio de 90 o más.", 10,2),
           "47" => array("suman", "Auditoría aleatoria a un ticket. (Código, proceso de desarrollo)", 2,2),
           "48" => array("suman", "No tener tickets reabiertos en todo el mes", 2,2),
           "49" => array("suman", "Aprender una nueva tecnología, y hacer un prototipo para demostrar lo aprendido", 10,2),
           "50" => array("suman", "Identificar mejoras en la documentación inicial enviada", 2,2),
           "51" => array("restan", "No  respetar el flujo de desarrollo", 2,2),
           "52" => array("restan", "No exigir documentación", 1,2),
           "53" => array("restan", "No dimensionar tiempo de entrega antes de iniciar el desarrollo", 1,2),
           "54" => array("restan", "Error técnico en liberación de requerimiento", 10,2),
           "55" => array("restan", "Error  en liberación de requerimiento", 3,2),
           "56" => array("restan", "No entregar en el tiempo estimado", 2,2),
           "57" => array("restan", "Falta de comunicación a problemas que no permitan avanzar con el desarrollo", 2,2),
           "58" => array("restan", "No dar seguimiento a tickets o desarrollos asignados que ya están terminados", 2,2),
           "59" => array("restan", "No tener respaldos del desarrollo", 3,2),
           "60" => array("restan", "Dejar inoperante un ambiente luego de la compilación de un requerimiento", 2,2),
           "61" => array("restan", "No notificar cuando se baje un ambiente", 1,2),
           "62" => array("restan", "Quemar código", 5,2),
           "63" => array("restan", "No registrar un commit en la tarea de desarrollo", 2,2),
           "64" => array("restan", "No notificar la funcionalidad actualizada en un ambiente", 2,2),
           "65" => array("restan", "Detalle informativo erróneo en los tickets", 1,2),
          // AREA SOPORTE
           "66" => array("suman", "NO registrado", 0,3),
           "67" => array("restan", "NO registrado", 0,3), // SIEMPRE UNA DEMAS PORQ LA ULTIMA POSICION NO LEEE
   /*         "68" => array("suman", "", 5,2),
          "69" => array("suman", "", 5,2),
           "70" => array("suman", "", 5,2),
           "71" => array("suman", "", 5,2),
           "72" => array("suman", "", 5,2),
           "73" => array("suman", "", 5,2),
           "74" => array("suman", "", 5,2),
           "75" => array("suman", "", 5,2),
           "76" => array("suman", "", 5,2),
           "77" => array("suman", "", 5,2),
           "78" => array("suman", "", 5,2),
           "79" => array("suman", "", 5,2),
           "80" => array("suman", "", 5,2),
           "81" => array("suman", "", 5,2),
           "82" => array("suman", "", 5,2),
           "83" => array("suman", "", 5,2),
           "84" => array("suman", "", 5,2),
           "85" => array("suman", "", 5,2),
           "86" => array("suman", "", 5,2),
           "87" => array("suman", "", 5,2),
           "88" => array("suman", "", 5,2),
           "89" => array("suman", "", 5,2),
           "90" => array("suman", "", 5,2),
*/
           // AREA DE SOORTE ID = 3
            );
            
            for ($i=1; $i < count($array) ; $i++) { 
                $valor = 0;
                if($array[''.$i.''][0] == "suman"){
                    $valor = 1;
                }elseif ($array[''.$i.''][0] == "restan"){
                    $valor = 2;
                }
                DB::table('ss_politics')->insert([
                    'type' => $valor,
                    'descripcion' =>   $array[''.$i.''][1],
                    'points' =>  $array[''.$i.''][2],
                    'isactive' => true,
                    'ss_area_id' => $array[''.$i.''][3]
                ]); 
       
            }           
                
    }
}
