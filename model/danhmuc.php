<?php
function insert_danhmuc($tenloai){
    $sql = "Insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id_danhmuc=".$id;
    pdo_execute($sql); 
}
function loadall_danhmuc(){
    $sql = "select * from danhmuc order by id_danhmuc desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;    
}
function loadone_danhmuc($id){
    $sql = "Select * from danhmuc where id_danhmuc=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql = "update danhmuc set name = '".$tenloai."' where id_danhmuc =".$id;
    pdo_execute($sql);
}
?>