<?php

include_once '../Common/DatabaseController.php';

include_once '../Models/Categoria.php';
include_once '../Models/ReglasDevolucion.php';
include_once '../Models/MateriaPrima.php';
include_once '../Models/Servicio.php';
include_once '../Models/Profesional.php';
include_once '../Models/Estudios.php';
include_once '../Models/ExperienciaLaboral.php';

class ControllerAdministrador extends Database{

    // + ------------------------ Gestion Categorias ------------------------ + //

    public function gestionCategorias_create($categoria){
        return $this -> executeStatement(
            "call admin_categoria_create(?,?,?)",
            [[
                $categoria -> getIdentificador(),
                $categoria -> getNombre(),
                $categoria -> getDescripcion()
            ]]
        );
    }

    public function gestionCategorias_select(){
        return $this -> selectNoParams("call admin_categoria_select()");
    }

    public function gestionCategorias_update($categoria){
        return $this -> executeStatement(
            "call admin_categoria_update(?,?,?)",
            [[
                $categoria -> getNombre(),
                $categoria -> getDescripcion(),
                $categoria -> getIdentificador()
            ]]
        );
    }

    public function gestionCategorias_delete($codigo){
        return $this -> executeStatement(
            "call admin_categoria_delete(?)",
            [[$codigo]]
        );
    }

    // + ------------------------ Gestion EstadosEvolucion ------------------------ + //

    public function gestionEstadosEvolucion_create($estadosEvolucion){
        return $this -> executeStatement(
            "call admin_estadosEvolucion_create(?,?,?,?,?,?)",
            [[
                $estadosEvolucion -> getIdentificador(),
                $estadosEvolucion -> getPresiondiastolica(),
                $estadosEvolucion -> getPresionisotolica(),
                $estadosEvolucion -> getPeso(),
                $estadosEvolucion -> getEvolucion(),
                $estadosEvolucion -> getServicioCodigo()
            ]]
        );
    }

    public function gestionEstadosEvolucion_select(){
        return $this -> selectNoParams("call admin_estadosEvolucion_select()");
    }

    public function gestionEstadosEvolucion_update($estadosEvolucion){
        return $this -> executeStatement(
            "call admin_estadosEvolucion_update((?,?,?,?,?,?)",
            [[
                $estadosEvolucion -> getPresiondiastolica(),
                $estadosEvolucion -> getPresionisotolica(),
                $estadosEvolucion -> getPeso(),
                $estadosEvolucion -> getEvolucion(),
                $estadosEvolucion -> getServicioCodigo(),
                $estadosEvolucion -> getIdentificador()
            ]]
        );
    }

    public function gestionEstadosEvolucion_delete($codigo){
        return $this -> executeStatement(
            "call admin_estadosEvolucion_delete(?)",
            [[$codigo]]
        );
    }

    // + ------------------------ Gestion MateriaPrima ------------------------ + //

    public function gestionMateriaPrima_create($materiaPrima){
        return $this -> executeStatement(
            "call admin_materiaprima_create(?,?,?)",
            [[
                $materiaPrima -> getNombre(),
                $materiaPrima -> getDescripcion(),
                $materiaPrima -> getCosto()
            ]]
        );
    }

    public function gestionMateriaPrima_select(){
        return $this -> selectNoParams("call admin_materiaprima_select()");
    }

    public function gestionMateriaPrima_update($materiaPrima){
        return $this -> executeStatement(
            "call admin_materiaprima_update(?,?,?,?)",
            [[
                $materiaPrima -> getNombre(),
                $materiaPrima -> getDescripcion(),
                $materiaPrima -> getCosto(),
                $materiaPrima -> getCodigo()
            ]]
        );
    }

    public function gestionMateriaPrima_delete($codigo){
        return $this -> executeStatement(
            "call admin_materiaprima_delete(?)",
            [[$codigo]]
        );
    }

    // + ------------------------ Gestion Servicios ------------------------ + //

    public function gestionServicios_create($servicio){
        return $this -> executeStatement(
            "call admin_servicio_create(?,?,?,?,?)",
            [[
                $servicio -> getCodigo(),
                $servicio -> getIdentificadorCategoria(),
                $servicio -> getNombre(),
                $servicio -> getDescripcion(),
                $servicio -> getPorcentajeganancia()
            ]]
        );
    }   
    
    public function gestionServicios_select(){
        return $this -> selectNoParams("call admin_servicio_select()");
    }

    public function gestionServicios_update($servicio){
        return $this -> executeStatement(
            "call admin_servicio_update(?,?,?,?,?)",
            [[
                $servicio -> getIdentificadorCategoria(),
                $servicio -> getNombre(),
                $servicio -> getDescripcion(),
                $servicio -> getPorcentajeganancia(),
                $servicio -> getCodigo()
            ]]
        );
    }

    public function gestionServicios_delete($codigo){
        return $this -> executeStatement(
            "call admin_servicio_delete(?)",
            [[$codigo]]
        );
    }

    // + ------------------------ Gestion Profesional ------------------------ + //

    public function gestionProfesional_create($profesional){
        return $this -> executeStatement(
            "call admin_profesional_create(?,?,?,?,?,?,?)",
            [[
                $profesional -> getTipoindentificacion(),
                $profesional -> getNumeroidentificacion(),
                $profesional -> getNombres(),
                $profesional -> getApellidos(),
                $profesional -> getCorreoelectronico(),
                $profesional -> getNumerotelefono(),
                $profesional -> getDireccionresidencia()
            ]]
        );
    }

    public function gestionProfesional_addEstudio($estudio){
        return $this -> executeStatement(
            "call admin_profesional_addEstudio(?,?,?,?,?,?,?,?)",
            [[
                $estudio -> getIdentificador(),
                $estudio -> getTipoindentificacionProfesional(),
                $estudio -> getNumeroidentificacionProfesional(),
                $estudio -> getInstitucion(),
                $estudio -> getTipoestudio(),
                $estudio -> getNombre(),
                $estudio -> getFechainicio(),
                $estudio -> getFechafinal(),
            ]]
        );
    }

    public function gestionProfesional_addExperiencia($experiencia){
        return $this -> executeStatement(
            "call admin_profesional_addExperiencia(?,?,?,?,?,?,?)",
            [[
                $experiencia -> getIdentificador(),
                $experiencia -> getTipoindentificacionProfesional(),
                $experiencia -> getNumeroidentificacionProfesional(),
                $experiencia -> getNombremepresa(),
                $experiencia -> getCargo(),
                $experiencia -> getFechaInicio(),
                $experiencia -> getFechafinal(),
            ]]
        );
    }

    public function gestionProfesional_select(){
        return $this -> selectNoParams("call admin_profesional_select()");
    }

    public function gestionProfesional_update($profesional){
        return $this -> executeStatement(
            "call admin_profesional_update(correoelectronic, numerotelefon, nombr, apelli, direccionreside, codigo)",
            [[
                $profesional -> getCorreoelectronico(),
                $profesional -> getNumerotelefono(),
                $profesional -> getNombres(),
                $profesional -> getApellidos(),
                $profesional -> getDireccionresidencia(),
                $profesional -> getTipoindentificacion()
            ]]
        );
    }

    public function gestionProfesional_delete($codigo){
        return $this -> executeStatement(
            "call admin_profesional_delete(?)",
            [[$codigo]]
        );
    }

}

?>