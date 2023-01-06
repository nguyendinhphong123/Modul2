<?php

2.5 Cho biết mã và tên của các mặt hàng có giá lớn hơn 100000 và số lượng hiện có ít hơn 50.

// SELECT MAHANG, TENHANG FROM mat_hangs WHERE (GIAHANG > 100000) AND (SOLUONG < 50);
2.6 Cho biết mỗi mặt hàng trong công ty do ai cung cấp.
// SELECT TENHANG, TENCONGTY FROM mat_hangs JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY;

2.7 Công ty Việt Tiến đã cung cấp những mặt hàng nào?
// SELECT TENCONGTY, TENHANG FROM nha_cung_caps JOIN mat_hangs ON nha_cung_caps.MACONGTY = mat_hangs.MACONGTY WHERE (TENCONGTY = 'Việt Tiến');

2.8 Loại hàng thực phẩm do những công ty nào cung cấp và địa chỉ của các công ty đó là gì?
// SELECT TENHANG, TENCONGTY, DIACHI FROM mat_hangs JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY;

2.9 Những khách hàng nào (tên giao dịch) đã đặt mua mặt hàng y tế loại 4 của công ty?
// SELECT TENGIAODICH, TENHANG FROM khach_hangs JOIN mat_hangs ON khach_hangs.MAKHACHHANG = mat_hangs.MAHANG WHERE (TENHANG = 'y tế loại 4');

2.10 Đơn đặt hàng số 1 do ai đặt và do nhân viên nào lập, thời gian và địa điểm giao hàng là ở đâu?
// SELECT SOHOADON, TENGIAODICH, TEN, NGAYGIAOHANG, NOIGIAOHANG FROM don_dat_hangs
// JOIN nhan_viens ON don_dat_hangs.MANHANVIEN = nhan_viens.MANHANVIEN
// JOIN khach_hangs ON don_dat_hangs.MAKHACHHANG = khach_hangs.MAKHACHHANG
// WHERE (SOHOADON = 1);

2.11 Hãy cho biết số tiền lương mà công ty phải trả cho mỗi nhân viên là bao nhiêu (lương = lương cơ bản + phụ cấp).
// SELECT MANHANVIEN, (LUONGCOBAN + PHUCAP) AS LUONG FROM `nhan_viens`;

2.12 Trong đơn đặt hàng số 3 đặt mua những mặt hàng nào và số tiền mà khách hàng phải trả cho mỗi mặt hàng là bao nhiêu
(số tiền phải trả được tính theo công thức SOLUONG × GIABAN – SOLUONG × GIABAN × MUCGIAMGIA/100 )

// SELECT TENHANG , (chi_tiet_dat_hangs.SOLUONG * chi_tiet_dat_hangs.GIABAN - chi_tiet_dat_hangs.SOLUONG * chi_tiet_dat_hangs.GIABAN * chi_tiet_dat_hangs.MUCGIAMGIA / 100) AS THANHTOAN FROM don_dat_hangs
// JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON
// JOIN mat_hangs ON chi_tiet_dat_hangs.MAHANG = mat_hangs.MAHANG
// WHERE (don_dat_hangs.SOHOADON = 3);
2.13 Hãy cho biết có những khách hàng nào lại chính là đối tác cung cấp hàng của công ty (tức là có cùng tên giao dịch).
// SELECT * FROM khach_hangs
// JOIN nha_cung_caps ON khach_hangs.TENGIAODICH = nha_cung_caps.TENGIAODICH
// WHERE (khach_hangs.TENGIAODICH = nha_cung_caps.TENGIAODICH);

2.14 Trong công ty có những nhân viên nào có cùng ngày sinh?
// SELECT * FROM nhan_viens v1 JOIN nhan_viens v2 ON v2.NGAYSINH = v1.NGAYSINH WHERE v2.MANHANVIEN != v1.MANHANVIEN;

2.15 Những đơn đặt hàng nào yêu cầu giao hàng ngay tại công ty đặt hàng và những đơn đó là của công ty nào?
// SELECT * FROM don_dat_hangs
// JOIN khach_hangs ON don_dat_hangs.MAKHACHHANG = khach_hangs.MAKHACHHANG 
// WHERE don_dat_hangs.NOIGIAOHANG = khach_hangs.DIACHI;

2.16 Cho biết tên công ty, tên giao dịch, địa chỉ và điện thoại của các khách hàng và các nhà cung cấp hàng cho công ty.
// SELECT TENCONGTY, TENGIAODICH, DIACHI, DIENTHOAI FROM khach_hangs;
// SELECT TENCONGTY, TENGIAODICH, DIACHI, DIENTHOAI FROM nha_cung_caps;

2.17 Những mặt hàng nào chưa từng được khách hàng đặt mua?
// SELECT * FROM `mat_hangs`
// LEFT JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG
// WHERE chi_tiet_dat_hangs.MAHANG IS NULL;

2.18 Những nhân viên nào của công ty chưa từng lập bất kỳ một hoá đơn đặt hàng nào?
// SELECT * FROM nhan_viens
// LEFT JOIN don_dat_hangs ON nhan_viens.MANHANVIEN = don_dat_hangs.MANHANVIEN
// WHERE SOHOADON  IS NULL;

2.19 Những nhân viên nào của công ty có lương cơ bản cao nhất?
// SELECT MAX(LUONGCOBAN)
// FROM nhan_viens;
2.20 Tổng số tiền mà khách hàng phải trả cho mỗi đơn đặt hàng là bao nhiêu?
SELECT SUM(SOLUONG * GIABAN - SOLUONG * GIABAN * MUCGIAMGIA / 100) FROM chi_tiet_dat_hangs GROUP BY SOHOADON;

2.21 Trong năm 2003, những mặt hàng nào chỉ được đặt mua đúng một lần.
SELECT * FROM mat_hangs 
     JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG 
     JOIN don_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON 
     WHERE YEAR(NGAYDATHANG) = 2003
     GROUP BY mat_hangs.MAHANG HAVING COUNT(chi_tiet_dat_hangs.MAHANG) = 1
 2.22 Hãy cho biết mỗi một khách hàng đã phải bỏ ra bao nhiêu tiền để đặt mua hàng của công ty?
 SELECT  SUM(SOLUONG * GIABAN - SOLUONG * GIABAN * MUCGIAMGIA / 100 ) AS TONGTIEN 
FROM don_dat_hangs JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON;

2.23 Mỗi một nhân viên của công ty đã lập bao nhiêu đơn đặt hàng (nếu nhân viên chưa hề lập một hoá đơn nào thì cho kết quả là 0)
// SELECT COUNT(SOHOADON) AS SOLUONGHOADON FROM nhan_viens
// LEFT JOIN don_dat_hangs ON nhan_viens.MANHANVIEN = don_dat_hangs.MANHANVIEN
// GROUP BY nhan_viens.MANHANVIEN;
2.24 Cho biết tổng số tiền hàng mà cửa hàng thu được trong mỗi tháng của năm 2003 (thời được gian tính theo ngày đặt hàng).
// SELECT SUM(SOLUONG * GIABAN - SOLUONG * GIABAN * MUCGIAMGIA / 100) AS  TONGTIEN, MONTH(NGAYDATHANG) AS THANG
// FROM don_dat_hangs
// JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON
// GROUP BY MONTH(NGAYDATHANG);
2.25 Hãy cho biết tổng số tiền lời mà công ty thu được từ mỗi mặt hàng trong năm 2003.



