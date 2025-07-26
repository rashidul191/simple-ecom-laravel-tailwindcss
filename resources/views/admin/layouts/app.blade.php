<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6'
                    }
                }
            }
        };
    </script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Tippy.js for tooltips -->
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light.css" />
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <!-- DataTables CSS & JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        .dropdown-toggle::after {
            content: "\f078";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            float: right;
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .dropdown-toggle.open::after {
            transform: rotate(180deg);
        }

        .app-collapsed .nav-link span {
            display: none;
        }

        .app-collapsed .nav-link {
            justify-content: center;
            text-align: center;
            padding-left: 0;
            padding-right: 0;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">
    <div id="app" class="flex min-h-screen transition-all duration-300">
        <!-- Sidebar -->
        @include('admin.layouts.partial.sidebar')

        <!-- Main Content -->
        <div class="flex-1 md:ml-64 transition-all duration-300" id="mainContent">
            <!-- Navbar -->
            @include('admin.layouts.navigation')

            <main class="p-6 space-y-6">
                {{ $slot }}
            </main>

            @include('admin.layouts.partial.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Sidebar toggle
        document.getElementById('openSidebarBtn').onclick = () => {
            document.getElementById('sidebar').classList.remove('-translate-x-full');
        };
        document.getElementById('closeSidebarBtn').onclick = () => {
            document.getElementById('sidebar').classList.add('-translate-x-full');
        };

        // Profile dropdown toggle
        document.getElementById('profileToggle').onclick = () => {
            document.getElementById('profileMenu').classList.toggle('hidden');
        };

        // Sidebar collapse
        function toggleSidebar() {
            const app = document.getElementById('app');
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            app.classList.toggle('app-collapsed');
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');
            mainContent.classList.toggle('md:ml-64');
            mainContent.classList.toggle('md:ml-20');
        }

        // Tippy tooltips
        tippy('[data-tippy-content]', {
            theme: 'light',
            placement: 'right',
            delay: [0, 0],
            offset: [0, 10],
        });

        // DataTable
        $(document).ready(function() {
            $('#userTable').DataTable();
        });

        // Dropdown toggle logic (vanilla JS)
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const submenu = toggle.nextElementSibling;

                    submenu.classList.toggle('hidden');
                    toggle.classList.toggle('open');

                    // Close others
                    dropdownToggles.forEach(other => {
                        if (other !== toggle) {
                            other.nextElementSibling.classList.add('hidden');
                            other.classList.remove('open');
                        }
                    });
                });
            });
        });
    </script>

    {{ $script ?? '' }}
</body>

</html>