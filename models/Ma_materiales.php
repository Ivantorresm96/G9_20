<?php
    class Materiales extends conectar{
        
        public function get_materiales(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_materiales";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }


        Public function get_materiales($id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_materiales WHERE ID=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert_materiales($ID_MATERIAL, $DESCRIPCION_MATERIAL, $UNIDAD, $COSTO, $PRECIO, $APLICA_ISV, $PORCENTAJE_ISV, $ESTADO, $ID_SOCIO){  
            $conectar=parent::conexion();
            parent::set_names();
            $sql="INSERT INTO ma_materiales (ID, DESCRIPCION, UNIDAD, COSTO, PRECIO, APLICA_ISV, PORCENTAJE_ISV, ESTADO, ID_SOCIO)VALUES(NULL,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->bindValue(2, $DESCRIPCION_MATERIAL);
            $sql->bindValue(3, $UNIDAD);
            $sql->bindValue(4, $COSTO;
            $sql->bindValue(5, $PRECIO);
            $sql->bindValue(6, $APLICA_ISV);
            $sql->bindValue(7, $PORCENTAJE_ISV);
            $sql->bindValue(8, $ESTADO);
            $sql->bindValue(9, $ID_SOCIO);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function update_materiales($ID_MATERIAL, $DESCRIPCION_MATERIAL, $UNIDAD, $COSTO, $PRECIO, $APLICA_ISV, $PORCENTAJE_ISV, $ESTADO, $ID_SOCIO){  
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE ma_materiales (ID, DESCRIPCION, UNIDAD, COSTO, PRECIO, APLICA_ISV, PORCENTAJE_ISV, ESTADO, ID_SOCIO)VALUES(NULL,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->bindValue(2, $DESCRIPCION_MATERIAL);
            $sql->bindValue(3, $UNIDAD);
            $sql->bindValue(4, $COSTO;
            $sql->bindValue(5, $PRECIO);
            $sql->bindValue(6, $APLICA_ISV);
            $sql->bindValue(7, $PORCENTAJE_ISV);
            $sql->bindValue(8, $ESTADO);
            $sql->bindValue(9, $ID_SOCIO);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function delete_materiales($ID){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="DELETE FROM ma_materiales WHERE ID=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>