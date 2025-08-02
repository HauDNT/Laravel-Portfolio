document.addEventListener('DOMContentLoaded', function () {
    const adminSidebarToggle = document.getElementById('adminSidebarToggle');
    const iconMobileMenuShow = document.getElementById('float-button--icon--show');
    const iconMobileMenuHide = document.getElementById('float-button--icon--hide');
    const mobileSidebar = adminSidebarToggle.querySelector('.mobile-sidebar');

    adminSidebarToggle.addEventListener('click', function (event) {
        event.stopPropagation();
        mobileSidebar.classList.toggle('active');
        iconMobileMenuShow.classList.toggle('d-none');
        iconMobileMenuHide.classList.toggle('d-none');
    });
});
