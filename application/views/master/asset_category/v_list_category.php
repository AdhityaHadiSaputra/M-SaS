<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Asset Management System">
<meta name="author" content="MetroxGroup">
<meta name="robots" content="noindex, nofollow">
<title>Metrox - Smart Asset System</title>

<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/animate.css">
<link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="../assets/css/style.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
</head>
<body>
<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">
    <div class="header">
        <div class="header-left active">
            <a href="index.html" class="logo">
                <img src="../assets/img/ams.png" alt="">
            </a>
            <a href="index.html" class="logo-small">
                <img src="../assets/img/ams-small.png" alt="">
            </a>
            <a id="toggle_btn" href="javascript:void(0);"></a>
        </div>
        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>
        <ul class="nav user-menu">
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-img"><img src="../assets/img/profiles/user1.png" alt="">
                    <span class="status online"></span></span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <div class="profileset">
                            <span class="user-img"><img src="../assets/img/profiles/avator1.jpg" alt="">
                            <span class="status online"></span></span>
                            <div class="profilesets">
                                <h6><?php echo get_cookie('AmsUserName'); ?></h6>
                                <h5><?php echo get_cookie('AmsRole'); ?></h5>
                            </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item" href=""><i class="me-2" data-feather="settings"></i>Change Password</a>
                        <hr class="m-0">
                        <a class="dropdown-item logout pb-0" href="<?php echo base_url('login/logout'); ?>"><img src="../assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                    </div>
                </div>
            </li>
        </ul>

        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="">Change Password</a>
                <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <?php $this->load->view('navbar/nav_admin_submenu'); ?>
            </div>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Asset Category list</h4>
                    <h6>View/Search Asset Category</h6>
                </div>
                <div class="page-btn">
                    <a href="" class="btn btn-added"><img src="../assets/img/icons/plus.svg" class="me-2" alt="img"> Add Asset Category</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="../assets/img/icons/search-white.svg" alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a href="export_category.php" data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="../assets/img/icons/pdf.svg" alt="img"></a>
                                </li>
                                <li>
                                    <!-- Trigger the export to Excel -->
                                    <a id="exportexcel" data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="../assets/img/icons/excel.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a id="print" data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="../assets/img/icons/printer.svg" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table datanew" id="assetTable">
                            <thead>
                                <tr>
                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                    <th>Group ID</th>
                                    <th>Group Name</th>
                                    <th>Depreciation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($assetcategory as $row)
                                    {
                                        print '<tr>';
                                        print '<td>'.$row->Category_ID.'</td>';
                                        print '<td>'.$row->Category_Name.'</td>';
                                        print '<td>'.$row->Group_ID.'</td>';
                                        print '<td>'.$row->Group_Name.'</td>';
                                        print '<td>'.$row->Depre.'</td>';
                                        print '<td>
                                        <a class="me-3" href="editsubcategory.html">
                                        <img src="../assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="img">
                                        </a>
                                        </td>';
                                        print '</tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/feather.min.js"></script>
<script src="../assets/js/jquery.slimscroll.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/plugins/select2/js/select2.min.js"></script>
<script src="../assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="../assets/plugins/sweetalert/sweetalerts.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.3/xlsx.full.min.js"></script>
<script src="../assets/js/script.js"></script>

<script>
    // Function to export table data to Excel
    function exportToExcel() {
        var table = document.getElementById("assetTable");
        var wb = XLSX.utils.book_new();
        var ws = XLSX.utils.table_to_sheet(table);

        var headerCellStyle = {
            fill: {
                fgColor: { rgb: "FFA500" }
            },
            font: {
                bold: true,
                color: { rgb: "FFFFFF" }
            }
        };

        for (var key in ws) {
            if (key[0] === 'A') {
                ws[key].s = headerCellStyle;
            }
        }
        ws['!cols'] = [{ wch: 15 }, { wch: 20 }, { wch: 15 }, { wch: 20 }, { wch: 15 }, { wch: 15 }];

        XLSX.utils.book_append_sheet(wb, ws, "Asset Category");

        var wbBlob = new Blob([s2ab(XLSX.write(wb, { bookType: 'xlsx', type: 'binary' }))], { type: "application/octet-stream" });

        var link = document.createElement("a");
        link.href = window.URL.createObjectURL(wbBlob);
        link.download = "Asset_Category.xlsx";

        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    document.getElementById("exportexcel").addEventListener("click", exportToExcel);

    function s2ab(s) {
        var buf = new ArrayBuffer(s.length);
        var view = new Uint8Array(buf);
        for (var i = 0; i != s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
        return buf;
    }

    function printTableContent() {
        var iframe = document.createElement('iframe');
        iframe.style.height = '0';
        iframe.style.width = '0';
        iframe.style.border = '0';
        document.body.appendChild(iframe);

        var table = document.getElementById("assetTable");

        var htmlContent = '';
        htmlContent += '<div style="height: 30px;width: 40px"></div>';
        htmlContent += '<html><head>';
        htmlContent += '<style>';
        htmlContent += 'th { text-align: left; }';
        htmlContent += '</style>';
        htmlContent += '</head><body>';
        htmlContent += '<table>';
        
        var header = table.getElementsByTagName("thead")[0].innerHTML;
        var headerWithoutLastColumn = header.replace(/<th>[^<]*<\/th><th>[^<]*<\/th>$/, '<th>[^<]*<\/th>');
        
        htmlContent += headerWithoutLastColumn;
        htmlContent += '<tr><td><br></td></tr>';
        
        var rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
        for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName("td");
            htmlContent += '<tr>';
            for (var j = 0; j < cells.length - 1; j++) {
                htmlContent += cells[j].outerHTML;
            }
            htmlContent += '</tr>';
        }
        
        htmlContent += '</table>';
        htmlContent += '</body></html>';

        iframe.contentDocument.write(htmlContent);
        iframe.contentDocument.close();
        iframe.contentWindow.print();
        document.body.removeChild(iframe);
    }

    document.getElementById("print").addEventListener('click', printTableContent);

    function pdfTableContent() {
        var assetcategory = [
            <?php
                foreach ($assetcategory as $row) {
                    echo "{Category_ID: '{$row->Category_ID}', Category_Name: '{$row->Category_Name}', Group_ID: '{$row->Group_ID}', Group_Name: '{$row->Group_Name}', Depre: '{$row->Depre}'},";
                }
            ?>
        ];

        var props = {
            outputType: jsPDFInvoiceTemplate.OutputType.Save,
            returnJsPDFDocObject: true,
            fileName: "Asset_Category",
            orientationLandscape: false,
            compress: true,
            logo: {
                src: "https://media.licdn.com/dms/image/C560BAQEdKrKQ_jeA9A/company-logo_200_200/0/1630636634443/pt_metrox_global_logo?e=1724889600&v=beta&t=kbj-fhSya7sWqPflunSZXFPmVJdps_IO13SJdoYFT3w",
                type: 'PNG',
                width: 53.33,
                height: 26.66,
                margin: {
                    top: 0,
                    left: 0
                }
            },
            business: {
                name: "Business Name",
                address: "Albania, Tirane ish-Dogana, Durres 2001",
                phone: "(+355) 069 11 11 111",
                email: "email@example.com",
                email_1: "info@example.al",
                website: "www.example.al",
            },
           
            invoice: {
                headerBorder: false,
                tableBodyBorder: false,
                header: [
                    { title: "Category ID", style: { width: 30 , height: 20} },
                    { title: "Category Name", style: { width: 50, height: 20 } },
                    { title: "Group ID", style: { width: 30, height: 20 } },
                    { title: "Group Name", style: { width: 30, height: 20 } },
                    { title: "Depreciation", style: { width: 30, height: 20 } },
                ],
                table: assetcategory.map(row => [
                    row.Category_ID,
                    row.Category_Name,
                    row.Group_ID,
                    row.Group_Name,
                    row.Depre + "\n\n"
                ]),
            },
            footer: {
                text: "The invoice is created on a computer and is valid without the signature and stamp.",
            },
            pageEnable: true,
            pageLabel: "Page ",
        };

        jsPDFInvoiceTemplate.default(props);
    }

    document.getElementById("exportpdf").addEventListener('click', pdfTableContent);
</script>
</body>
</html>
