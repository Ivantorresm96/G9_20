<?php
    class Socios extends Conectar {

        public function get_socios(){
            $conectar= parent ::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_socios_negocio";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_socio($id){
            $conectar= parent ::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_socios_negocio WHERE ID =?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert_socio($id,$nombre,$razonsocial,$direccion,$tiposocio,$contacto,$email,$fecha,$estado,$telefono){
            $conectar= parent ::conexion();
            parent::set_names();
            $sql="INSERT INTO ma_socios_negocio(id,nombre,razon_social,direccion,tipo_socio,contacto,email,fecha_creado,estado,telefono)
            VALUES (?,?,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->bindValue(2,$nombre);
            $sql->bindValue(3,$razonsocial);
            $sql->bindValue(4,$direccion);
            $sql->bindValue(5,$tiposocio);
            $sql->bindValue(6,$contacto);
            $sql->bindValue(7,$email);
            $sql->bindValue(8,$fecha);
            $sql->bindValue(9,$estado);
            $sql->bindValue(10,$telefono);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function update_socio($id,$nombre,$razonsocial,$direccion,$tiposocio,$contacto,$email,$fecha,$estado,$telefono){
            $conectar= parent ::conexion();
            parent::set_names();
            $sql="UPDATE ma_socios_negocio SET id=?, nombre=?, razon_social=?, direccion=?, tipo_socio=?, contacto=?, email,fecha_creado=?, estado=? ,telefono=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->bindValue(2,$nombre);
            $sql->bindValue(3,$razonsocial);
            $sql->bindValue(4,$direccion);
            $sql->bindValue(5,$tiposocio);
            $sql->bindValue(6,$contacto);
            $sql->bindValue(7,$email);
            $sql->bindValue(8,$fecha);
            $sql->bindValue(9,$estado);
            $sql->bindValue(10,$telefono);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }


?>