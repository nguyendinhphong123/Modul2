<?php

Lấy dữ liệu:
SELECT (tên_cột) FROM (ten_bang)

Thêm dữ liệu:
INSERT INTO tên_bảng(cột 1,cột 2,cột 3...) VALUES (giá trị 1,giá trị 2,giá trị 3,...)

Sửa dữ liệu:
UPDATE ten_bang SET cột1 = 'giá trị', cột2 = 'giá trị'... WHERE(điều kiện)

Xóa dữ liệu:
DELETE FROM ten_bang WHERE(điều kiện)


INNER JOIN
SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;
LEFT OUTER JOIN
SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;
RIGHT OUTER JOIN
SELECT column_name(s)
FROM table1
RIGHT JOIN table2
ON table1.column_name = table2.column_name;