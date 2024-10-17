<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.2.2/css/fixedColumns.dataTables.min.css">
        <style>
            table tr th {
                white-space: nowrap;
            }

            #table1 th:nth-child(1),
            #table1 th:nth-child(2),
            #table1 th:nth-child(3) {
                min-width: 140px; /* Hoặc giá trị phù hợp */
            }

            #basic-datatables th:nth-last-child(1),
            #basic-datatables th:nth-last-child(2),
            #basic-datatables th:nth-last-child(3) {
                min-width: 120px; /* Đảm bảo khớp với chiều rộng của 3 cột đầu */
            }

            .left-table {
                min-width: 100px; /* Chiều rộng tối thiểu cho mỗi cột */
                white-space: nowrap; /* Giữ nội dung trên một dòng và cho phép cuộn ngang */
            }
            
        </style>
</head>

<body>
    <div class="wrapper">
        <div class="containter">
            <div class="row">
                <div class="col-md-6">
                    phần 1
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <table id="basic-datatables" class="cell-border">
                            <thead>
                                <tr>
                                    <th class="left-table">Bảng 4 Cột 1</th>
                                    <th class="left-table">Bảng 4 Cột 2</th>
                                    <th class="left-table">Bảng 4 Cột 3</th>
                                    <th class="left-table">Bảng 4 Cột 4</th>
                                    <th class="left-table">Bảng 4 Cột 5</th>
                                    <th class="left-table">Bảng 4 Cột 6</th>
                                    <th class="left-table">Bảng 4 Cột 7</th>
                                    <th class="left-table">Bảng 4 Cột 8</th>
                                    <th class="left-table">Bảng 4 Cột 9</th>
                                    <th class="left-table">Bảng 4 Cột 10</th>
                                    <th class="left-table">Bảng 4 Cột 11</th>
                                    <th class="left-table">Bảng 4 Cột 12</th>
                                    <th class="left-table">Bảng 4 Cột 13</th>
                                    <th class="left-table">Bảng 4 Cột 14</th>
                                    <th class="left-table">Bảng 4 Cột 15</th>
                                    <th class="left-table">Bảng 4 Cột 16</th>
                                    <th>Bảng 4</th>
                                    <th>Bảng 4 Cột 18</th>
                                    <th>Bảng 4 Cột 19</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 1</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 2</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 3</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 4</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 5</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 6</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 7</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 8</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 9</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 10</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 11</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 12</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 13</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 14</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 15</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 16</td>
                                    <td style="border-left: 1px solid #000;"></td>
                                    <td>Bảng 4 dòng 2 Cột 18 Bảng 4 dòng 2 Cột 16 Bảng 4 dòng 2 Cột 16 Bảng 4 dòng 2 Cột 16</td>
                                    <td>Bảng 4 dòng 2 Cột 18</td>
                                </tr>
                                <tr>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 1</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 2</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 3</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 4</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 5</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 6</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 7</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 8</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 9</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 10</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 11</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 12</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 13</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 14</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 15</td>
                                    <td class="left-table">Bảng 4 dòng 2 Cột 16</td>
                                    <td style="border-left: 1px solid #000;"></td>
                                    <td>Bảng 4 dòng 2 Cột 18</td>
                                    <td>Bảng 4 dòng 2 Cột 18</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
    <script>
        $(document).ready(function() {
            function calculateVisibleNonFixedColumnsWidth() {
                var totalWidth = 0;
                var scrollBody = $('.dataTables_scrollBody'); // Lấy phần cuộn ngang của bảng
                var viewportWidth = scrollBody.outerWidth(); // Lấy chiều rộng vùng viewport (vùng hiển thị)
                
                // Lấy vị trí cuộn ngang hiện tại (scrollLeft)
                var scrollLeft = scrollBody.scrollLeft();

                // Lặp qua các cột không cố định
                $('.dataTables_scrollBody thead th:not(.fixedColumn)').each(function() {
                    var columnOffsetLeft = $(this).position().left; // Vị trí cột
                    var columnWidth = $(this).outerWidth(); // Chiều rộng của cột
                    
                    // Kiểm tra xem cột này có nằm trong vùng nhìn thấy (viewport) hay không
                    if (columnOffsetLeft + columnWidth > scrollLeft && columnOffsetLeft < scrollLeft + viewportWidth) {
                        // Nếu cột nằm trong vùng nhìn thấy, thêm vào tổng
                        totalWidth += columnWidth;
                    }
                });

                console.log('Tổng chiều rộng của các cột hiện trong viewport: ' + totalWidth + 'px');
            }

            $('#basic-datatables').DataTable({
                ordering: false,
                paging: true,
                autoWidth: false,
                scrollX: true, // Kích hoạt cuộn ngang
                fixedColumns: {
                    leftColumns: 0,  
                    rightColumns: 3,  
                },
                columnDefs: [
                    { targets: '_all', className: 'dt-head-center' } // Căn giữa header của tất cả các cột
                ],
                drawCallback: function(settings) {
                    
                    // Kiểm tra khi bảng được khởi tạo
                    let widthColumnsNonFixed = calculateVisibleNonFixedColumnsWidth();
                    let minWidth = 100;

                    // if (!(scrollWidth > clientWidth)) {
                    //     let api = this.api();
                    //     let qtyColumnElement = $('tr:first-child td.left-table').length;
                    //     let fullvw = 100;
                    //     let oneWidthColumn = fullvw / qtyColumnElement;
                    //     $('.left-table').css({
                    //         'min-width': `${oneWidthColumn}vw`,  // Thiết lập chiều rộng
                    //     });
                    // }
                },
            });
        });
    </script>
</body>

</html>
