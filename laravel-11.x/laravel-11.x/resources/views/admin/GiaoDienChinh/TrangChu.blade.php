<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/dashboard.css">
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

        <!-- Nội dung chính -->
        <div class="flex-grow-1">
            <!-- Header -->
            <header class="header-custom text-white p-3 d-flex justify-content-between align-items-center">
                <button class="btn d-md-none" id="menu-toggle">
                    <span class="material-symbols-outlined" style="font-size: 40px;">menu</span>
                </button>
                <h1 class="m-0">Trang chủ</h1>
                <div>
                    
                    <span class="material-symbols-outlined" style="font-size: 30px; margin-right: 10px;">notifications</span>
                    <span class="material-symbols-outlined" style="font-size: 30px;">manage_accounts</span>
                </div>
            </header>
        
            <!-- Nội dung -->
            <div class="content-custom p-4">
                <div class="row position-relative">
                    <!-- Thẻ thông tin -->
                    <div class="col-md-3 mb-4 info-card">
                        <div class="card text-center p-3" style="border: 1px solid #E0E0E0; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Icon -->
                                <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 42px;">shopping_cart</span>
                                <!-- Dropdown (Tháng này) -->
                                <div class="date-container d-flex align-items-center">
                                    <span class="date-text" style="font-size: 16px; color: #888;">Tháng này</span>
                                    <span class="material-symbols-outlined arrow-icon" style="color: #888; font-size: 30px;">keyboard_arrow_down</span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; gap: 10px; margin-top:30px;">
                                <!-- Đơn hàng -->
                                <div style="text-align: left; flex: 1;">
                                    <h5 class="card-title" style="font-weight: 600; color: #6C757D; font-size:11px;">Đơn hàng</h5>
                                    <h2 style="font-size: 20px; font-weight: bold; margin: 10px 0;">100,000</h2>
                                    <div style="display: inline-block; padding: 5px 10px; background-color: #E8F8E9; color: #35CC5F; border-radius: 5px; font-size: 11px; font-weight: bold;">+45%</div>
                                </div>
                            
                                <!-- Đang xử lý -->
                                <div style="text-align: left; flex: 1;">
                                    <h5 class="card-title" style="font-weight: 600; color: #6C757D;font-size:11px;">Đang xử lý</h5>
                                    <h2 style="font-size: 20px; font-weight: bold; margin: 10px 0;">100,000</h2>
                                    <div style="display: inline-block; padding: 5px 10px; background-color: #E8F8E9; color: #35CC5F; border-radius: 5px; font-size: 11px; font-weight: bold;">+45%</div>
                                </div>
                                <!-- Hoàn tất -->
                                <div style="text-align: left; flex: 1;">
                                    <h5 class="card-title" style="font-weight: 600; color: #6C757D;font-size:11px;">Hoàn tất</h5>
                                    <h2 style="font-size: 20px; font-weight: bold; margin: 10px 0;">100,000</h2>
                                    <div style="display: inline-block; padding: 5px 10px; background-color: #E8F8E9; color: #35CC5F; border-radius: 5px; font-size: 11px; font-weight: bold;">+45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Thẻ khác -->
                    <div class="col-md-3 mb-4 info-card-second">
                        <div class="card text-center p-3" style="border: 1px solid #E0E0E0; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Icon -->
                                <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 42px;">money_bag</span>
                                <!-- Dropdown (Tháng này) -->
                                
                                <div class="date-container d-flex align-items-center">
                                    <span class="date-text" style="font-size: 16px; color: #888;">Tháng này</span>
                                    <span class="material-symbols-outlined arrow-icon" style="color: #888; font-size: 30px;">keyboard_arrow_down</span>
                                </div>
                            </div>
                            <div style="text-align: left; flex: 1;">
                                <h5 class="card-title" style="font-weight: 600; color: #6C757D; font-size:15px;">TỔNG DOANH THU</h5>
                                <h2 style="font-size: 28px; font-weight: bold; margin: 10px 0;">$100,000</h2>
                                <div style="display: inline-block; padding: 5px 10px; background-color: #FFCDCD; color: #912626; border-radius: 5px; font-size: 11px; font-weight: bold;">-15%</div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Thẻ khác -->
                    <div class="col-md-3 mb-4 info-card-third">
                        <div class="card text-center p-3" style="border: 1px solid #E0E0E0; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Icon -->
                                <span class="material-symbols-outlined" style="color: #35CC5F; font-size: 42px;">person</span>
                                <!-- Dropdown (Tháng này) -->
                                <div class="date-container d-flex align-items-center">
                                    <span class="date-text" style="font-size: 16px; color: #888;">Tháng này</span>
                                    <span class="material-symbols-outlined arrow-icon" style="color: #888; font-size: 30px;">keyboard_arrow_down</span>
                                </div>
                            </div>
                            <div style="text-align: left; flex: 1;">
                                <h5 class="card-title" style="font-weight: 600; color: #6C757D; font-size:15px;">KHÁCH HÀNG MỚI</h5>
                                <h2 style="font-size: 28px; font-weight: bold; margin: 10px 0;">$100,000</h2>
                                <div style="display: inline-block; padding: 5px 10px; background-color: #FFCDCD; color: #912626; border-radius: 5px; font-size: 11px; font-weight: bold;">-15%</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Biểu đồ -->
                <div class="bg-white p-4 shadow-sm rounded mb-4">
                    <h5>Biểu đồ doanh thu</h5>
                    <canvas id="revenueChart"></canvas>
                </div>

                <!-- Đơn hàng gần đây -->
                <div class="bg-white p-4 shadow-sm rounded">
                    <h5>Đơn đặt hàng gần đây</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Laptop Lenovo Ideapad
                            <span class="badge bg-primary rounded-pill">Hoàn tất</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            MacBook Pro
                            <span class="badge bg-danger rounded-pill">Đang xử lý</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Nội dung trang của bạn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
        // Toggle Sidebar
        document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', function () {
            sidebar.classList.toggle('d-none');
        });
    } else {
        console.error("Menu toggle or sidebar not found.");
    }
});

    </script>
    

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Biểu đồ doanh thu
        const ctx = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr'],
                datasets: [{
                    label: 'Doanh thu',
                    data: [10, 20, 30, 40],
                    borderColor: 'green',
                    fill: true,
                    backgroundColor: 'rgba(0, 128, 0, 0.1)'
                }]
            }
        });

    </script>
</body>

</html>
