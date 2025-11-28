<?php


class Form{
    public function open($action, $tab =[]){
        $baliseDebut = '<form action="' . $action . '"method="POST">' ; 
        if(!empty($tab)){
            foreach($tab as $key => $values){
                $baliseDebut = $tab[$key] . " " ;
            }
         }
        $baliseDebut .= '>' ;
        echo $baliseDebut ;
    }
    public function input($name, $type, $label="" ,$tab=[]){
        $baliseDebut = '<label for=' ; $name . '">' . $label . '</label>';
        $baliseDebut = '<input type="' . $type . '"name="' . $name . '" id="' . $name . '"' ;
        if(!empty($tab)){
            foreach($tab as $key => $values){
                $baliseInput = $tab[$key] . " ";
            }
        }
        $baliseInput .= '>' ;
        echo $baliseInput . ' ' . $baliseInput ;
    } 
    public function end ($send = "Envoyer" , $erase = "Efface"){
        echo '<button type ="submit">' . $send . '</button> <button type="reset">' . $erase . '</button> </form>' ;
    }
}


?>