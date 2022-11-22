<?php
class M_khach_hang extends database {
    function khach_hang_hoa_don() {
        $query = 'SELECT hd.id_oders,ngaymua, kh.ma_khach_hang, ten_khach_hang, dia_chi, dien_thoai,email, total, san_pham.id_sanpham, name, soluong,san_pham.price, san_pham.price*soluong as thanh_tien, hinh FROM oders hd, khach_hang kh, san_pham, oder_detail ct WHERE hd.id_oders = ct.id_oders AND hd.ma_khach_hang = kh.ma_khach_hang AND ct.id_sanpham = san_pham.id_sanpham Order by kh.ma_khach_hang';
        $this->setQuery($query);
        $khachhangs=$this->loadAllRows();
        $mang=array();
        foreach($khachhangs as $row)
        {
            $mang[]=$row;
        }
        return $mang;
    }
//    /*`ma_khach_hang`, `ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`*/
//    function themKhachHang($ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu) {
//        $query = "INSERT INTO khach_hang(ten_khach_hang,phai,ngay_sinh,dia_chi,dien_thoai,email,ghi_chu) ";
//        $query.= "VALUES(?,?,?,?,?,?,?)";
//        $this->setQuery($query);
//        $result = $this->execute(array($ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu));
//        if($result)
//            return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
//        else
//
//            return false;
//    }
    /*`so_hoa_don`, `ngay_hd`, `ma_khach_hang`, `tri_gia`, `hinh_thuc_thanh_toan`, `tinh_trang`*/
    function themHoaDon($ngaymua, $ma_khach_hang, $total, $hinh_thuc_thanh_toan) {
        $query = "INSERT INTO oders(ngaymua,ma_khach_hang,total,hinh_thuc_thanh_toan) VALUES(?,?,?,?)";
        $this->setQuery($query);
        $result = $this->execute(array($ngaymua, $ma_khach_hang, $total, $hinh_thuc_thanh_toan));
        if($result)
            return $this->getLastId();
        else
            return false;
    }
    /*`so_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`, `stt`*/
    function themChiTietHoaDon($id_oders,$id_sanpham,$soluong,$price) {
        $query = "INSERT INTO oder_detail(so_hoa_don,ma_san_pham,so_luong,don_gia) VALUES(?,?,?,?)";
        $this->setQuery($query);
        $this->execute(array($id_oders,$id_sanpham,$soluong,$price));
    }

    function capNhatDonGia_sp($id_sanpham) {
        $query = "UPDATE oder_detail ";
        $query.= "SET price = (SELECT price FROM sanpham WHERE oder_detail.id_sanpham = sanpham.id_sanpham) ";
        $query.= "WHERE  id_oders = ?";
        $this->setQuery($query);
        $this->execute(array($id_sanpham));
    }

    /*`so_hoa_don`, `ngay_hd`, `ma_khach_hang`, `tri_gia`, `hinh_thuc_thanh_toan`, `tinh_trang`*/

    function capNhatTongTien($id_oders)
    {
        $query = "UPDATE oders ";
        $query.= "SET total = (SELECT SUM( soluong * price ) AS tt FROM oder_detail WHERE oder_detail.id_oders = oders.id_oders) ";
        $query.= "WHERE id_oder = ?";
        $this->setQuery($query);
        $this->execute(array($id_oders));
    }public function dang_ky()
{
    if(isset($_POST['submit']))
    {
        require "./save-checkout.php";
        if($ma_khach_hang>0)
        {
            $ngay_hd = date('Y-m-d');
            $tri_gia=0;
            //$tien_dat_coc=$_POST['tien_dat_coc'];
            $httt=$_POST['httt'];

            $hoa_don=$m_khach_hang->themHoaDon($ngay_hd,$ma_khach_hang,$tri_gia,$httt);
            if($hoa_don>0)
            {
                include_once('controllers/c_gio_hang.php');
                $c_gio_hang=new c_gio_hang();
                $gio_hang=$c_gio_hang->layGioHang();

                foreach($gio_hang as $key=>$value)
                {


                    if(substr($key,0,1)=='t')
                        $m_khach_hang->themChiTietHoaDon($hoa_don,substr($key,1,strlen($key)-1),$value,0);
                    else
                        $m_khach_hang->themChiTietHoaDon($hoa_don,$key,$value,0);
                }


                $m_khach_hang->capNhatDonGia_sp($hoa_don);

                $m_khach_hang->capNhatTongTien($hoa_don);
                $c_gio_hang->xoaGioHang();
                //In hoa đơn
                $view="views/khach_hang/v_in_hoa_don.php";

                $banner = "HoaDon";
                include('templates/frontend/khach_hang/layout.php');
            }
        }
    }
    else
    {
        $view='views/khach_hang/v_them_khach_hang.php';
        $banner = "HoaDon";
        include('templates/frontend/khach_hang/layout.php');
    }
}




}
require "./save-checkout.php"
?>
