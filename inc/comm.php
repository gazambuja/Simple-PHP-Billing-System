<?
session_start();

if(isset($_GET['duplicate'])){
        eduplicate($_GET['duplicate'], 'billing', array('id_company', 'id_services', 'id_seller', 'nf',
         'quantity', 'date', 'venc', 'value', 'notes'));
}

if(isset($_GET['logout'])){
        session_unset();
}

?>
