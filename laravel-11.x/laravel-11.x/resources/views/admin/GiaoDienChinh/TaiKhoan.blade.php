<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" />
    <title>Quản lý tài khoản</title>
    <link rel="stylesheet" href="css/TaiKhoan.css">
</head>


<body>
    <div class="d-flex">
        
            <!-- Menu bên trái -->
        <aside id="sidebar" class="bg-white text-dark p-3" style="width: 304px; min-height: 100vh;">
            <div class="text-center my-4">
                <img src="images/logo.jpg" alt="Logo" style="width: 304px; height: 216px; display: block; margin-top: -41px; margin-left: -17px;">
            </div>
        
        
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">home</span>
                    <span style="font-weight: bold; font-size: 20px;">Trang chủ</span>
                </button>
            </li>
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">shopping_cart</span>
                    <span style="font-weight: bold; font-size: 20px;">Đơn hàng</span>
                </button>
            </li>
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">inventory_2</span>
                    <span style="font-weight: bold; font-size: 20px;">Sản phẩm</span>
                </button>
            </li>
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">group</span>
                    <span style="font-weight: bold; font-size: 20px;">Khách hàng</span>
                </button>
            </li>
            
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#transactionMenu" aria-expanded="false" aria-controls="transactionMenu">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">currency_exchange</span>
                    <span style="font-weight: bold; font-size: 20px;">Giao dịch</span>
                    <span class="material-symbols-outlined">keyboard_arrow_down</span> <!-- Mũi tên -->
                </button>
                <!-- Menu con -->
                <div id="transactionMenu" class="collapse ms-4">
                    <ul>
                        <li class="nav-item mb-2">
                            <button class="btn-menu d-flex align-items-center">
                                <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding-right: 10px;">arrow_back</span>
                                <span style="font-weight: bold; font-size: 18px;">Nhập hàng</span>
                            </button>
                        </li>
                        <li class="nav-item mb-2">
                            <button class="btn-menu d-flex align-items-center">
                                <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding-right: 10px;">arrow_forward</span>
                                <span style="font-weight: bold; font-size: 18px;">Chuyển kho</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">inventory</span>
                    <span style="font-weight: bold; font-size: 20px;">Kho hàng</span>
                </button>
            </li>
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">percent</span>
                    <span style="font-weight: bold; font-size: 20px;">Khuyến mại</span>
                </button>
            </li>
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">apartment</span>
                    <span style="font-weight: bold; font-size: 20px;">Chi nhánh</span>
                </button>
            </li>
            <li class="nav-item mb-2">
                <button class="btn-menu d-flex align-items-center">
                    <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 40px; padding: 10px;">account_circle</span>
                    <span style="font-weight: bold; font-size: 20px;">Tài khoản</span>
                </button>
            </li>
            <!-- Thêm các menu khác -->
        </ul>
        </aside>
        <div class="flex-grow-1">
            <header class="header-custom text-white p-3 d-flex justify-content-between align-items-center">
                <button class="btn d-md-none" id="menu-toggle">
                    <span class="material-symbols-outlined" style="font-size: 40px;">menu</span>
                </button>
                <h1>Tài khoản</h1>
                <div>
                    
                    <span class="material-symbols-outlined" style="font-size: 30px; margin-right: 10px;">notifications</span>
                    <span class="material-symbols-outlined" style="font-size: 30px;">manage_accounts</span>
                </div>
                
            </header>
            <main class="main-content" style="background-color: #E9ECF1;">
            
            <section class="order-management">
                <div class="filters">
                    <input type="text" class="search-bar" placeholder="Tìm kiếm...">
                    <select class="filter-select">
                        <option value="" >Loại tài khoản</option>
                        <option value="paid">Tất cả</option>
                        <option value="unpaid">Khách hàng</option>
                        <option value="unpaid">Nhân viên</option>
                    </select>
                    <select class="filter-select">
                        <option value="">Chi nhánh</option>
                        <option value="paid">CN1</option>
                        <option value="unpaid">CN2</option>
                    </select>
                    
                    
                    <div class="button-group" style="margin-left: auto; display: flex; gap: 5px;">
                        <button class="btn">
                            <span class="material-symbols-outlined" style="color: #FFFFFF; font-size: 15px;">add</span>
                            <span>Tạo tài khoản</span>
                        </button>
                        
                            <button class="btn-edit">
                                <span class="material-symbols-outlined" style="color: green; font-size: 15px;">edit</span>
                            </button>
                            <button class="btn-edit">
                                <span class="material-symbols-outlined" style="color: green; font-size: 15px;">delete</span>
                            </button>
                        
                        
                        
                        
                    </div>
                   
                    
                    
                </div>
                
                <table class="order-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="select-all" class="order-checkbox"></th>
                            <th>Mã tài khoản</th>
                            <th>Tên tài khoản</th>
                            <th>Họ tên</th>
                            <th>Vai trò</th>
                            <th>Truy cập</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="order-checkbox"></td>
                            <td class="text-green">TK0001</td>
                            <td>nguyenvana124@gmail.com</td>
                            <td>Nguyễn Văn Hoàng A</td>
                            <td>Nhân viên</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="order-checkbox"></td>
                            <td class="text-green">302011</td>
                            <td>nguyenvana124@gmail.com</td>
                            <td>Nguyễn Văn Hoàng A</td>
                            <td>Khách hàng</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <!-- Thêm các dòng dữ liệu khác -->
                    </tbody>
                </table>
                
                <div class="pagination">
                    <button>&laquo;</button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>&raquo;</button>
                </div>
            </section>
        </main>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
        
    
    <script>
        document.getElementById('select-all').addEventListener('change', function () {
            // Lấy tất cả checkbox trong tbody
            const checkboxes = document.querySelectorAll('.order-table tbody .order-checkbox');
            // Đặt trạng thái của chúng bằng trạng thái của checkbox trong th
            checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        });
        document.addEventListener('DOMContentLoaded', function () {
            // Đảm bảo menu con đóng khi tải lại trang
            var myCollapse = document.getElementById('transactionMenu');
            if (myCollapse) {
                // Đảm bảo trạng thái là đóng khi tải lại trang
                var collapse = new bootstrap.Collapse(myCollapse, {
                    toggle: false // Không mở menu ngay lập tức
                });
                // Đảm bảo trạng thái ban đầu là đóng
                myCollapse.classList.remove('show');
            }
        });
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');

            menuToggle.addEventListener('click', function () {
                sidebar.classList.toggle('d-none');
            });
        });
    </script>
    
    
</body>