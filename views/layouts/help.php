<?php

use yii\helpers\Html;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Help | EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/help.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">
</head>

<body>
    <div class="navbar">
        <span class="hamburger">☰</span>
        <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="EasyGreen Logo" class="logo">
        <span class="website-name">EasyGreen</span>
    </div>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li data-view="getting-started">Getting Started</li>
                <li class="parent" data-view="about-account">About Your Account
                    <span class="arrow"></span>
                    <ul class="dropdown">
                        <li data-view="register">Register</li>
                        <li data-view="login">Login</li>
                        <li data-view="logout">Logout</li>
                    </ul>
                </li>
                <li class="parent" data-view="managing-plants">Managing Plants
                    <span class="arrow"></span>
                    <ul class="dropdown">
                        <li data-view="create-plant">Add Plants</li>
                        <li data-view="search-category">Search by Category</li>
                        <li data-view="view-plant">See Plants</li>
                        <li data-view="update-plant">Update Plants</li>
                        <li data-view="delete-plant">Remove Plants</li>
                    </ul>
                </li>
                <li class="parent" data-view="managing-harvest">Manage the Harvest
                    <span class="arrow"></span>
                    <ul class="dropdown">
                        <li data-view="increase-harvest">Increase the harvest</li>
                        <li data-view="update-harvest">Update the Harvest</li>
                        <li data-view="delete-harvest">Delete the Harvest</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="content-inner">
                <?= $content ?>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.querySelector('.hamburger');
            const sidebar = document.querySelector('.sidebar');
            const parents = document.querySelectorAll('.sidebar .parent');
            const items = document.querySelectorAll('.sidebar li');

            document.addEventListener('click', function (event) {
                const sidebar = document.querySelector('.sidebar');
                const hamburger = document.querySelector('.hamburger');

                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnHamburger = hamburger.contains(event.target);

                if (!isClickInsideSidebar && !isClickOnHamburger && window.innerWidth <= 768) {
                    sidebar.classList.remove('active');
                    document.body.classList.remove('sidebar-open');
                }
            });

            // Aktifkan item berdasarkan URL saat dimuat
            const urlParams = new URLSearchParams(window.location.search);
            const currentView = urlParams.get('view');
            if (currentView) {
                const initialItem = document.querySelector(`.sidebar li[data-view="${currentView}"]`);
                if (initialItem) {
                    initialItem.classList.add('active');
                    if (initialItem.classList.contains('parent')) {
                        initialItem.classList.add('open');
                        initialItem.querySelector('.dropdown').style.maxHeight = initialItem.querySelector('.dropdown').scrollHeight + 'px';
                    }
                }
            }

            hamburger.addEventListener('click', () => {
                sidebar.classList.toggle('active');
                document.body.classList.toggle('sidebar-open');
            });

            sidebar.addEventListener('click', (event) => {
                const item = event.target.closest('li');
                if (!item) return;

                event.preventDefault();

                // Hapus semua active state terlebih dahulu
                items.forEach(i => i.classList.remove('active'));

                if (item.classList.contains('parent')) {
                    const dropdown = item.querySelector('.dropdown');

                    if (dropdown) {
                        // Kalau ada dropdown, toggle animasinya
                        const isOpen = dropdown.style.maxHeight && dropdown.style.maxHeight !== '0px';
                        dropdown.style.maxHeight = isOpen ? '0' : dropdown.scrollHeight + 'px';
                        item.classList.toggle('open', !isOpen);
                    }

                    // Tetap tandai aktif (meskipun tidak ada dropdown)
                    item.classList.add('active');
                } else {
                    // Klik pada child
                    item.classList.add('active');
                    const parent = item.closest('.parent');
                    if (parent) {
                        parent.classList.add('open', 'active');
                        const dropdown = parent.querySelector('.dropdown');
                        if (dropdown) {
                            dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                        }
                    }
                }

                const view = item.getAttribute('data-view');
                if (view) {
                    fetch(`/help/load-view?view=${view}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.text();
                        })
                        .then(html => {
                            console.log('LOADED HTML:', html);
                            document.querySelector('.content-inner').innerHTML = html;
                            window.history.pushState({}, '', `?view=${view}`);
                        })
                        .catch(error => console.error('Error fetching view:', error));
                }
            });
        });
    </script>
</body>

</html>