<style>
    /* Shared navigation: transparent at the top, softly dark after scrolling. */
    body .main-header.wonder-nav-header {
        background: transparent !important;
        box-shadow: none !important;
    }

    body .main-header.wonder-nav-header .nav-capsule-wrapper {
        background: transparent !important;
        box-shadow: none !important;
        border: 0 !important;
    }

    body .main-header.wonder-nav-header.is-scrolled .nav-capsule-wrapper {
        background: rgba(0, 0, 0, 0.65) !important;
    }

    body .main-header.wonder-nav-header .nav-menu > li > a,
    body .main-header.wonder-nav-header .nav-menu > li:hover > a,
    body .main-header.wonder-nav-header.is-scrolled .nav-menu > li > a,
    body .main-header.wonder-nav-header.is-scrolled .nav-menu > li:hover > a,
    body .main-header.wonder-nav-header .nav-call-btn,
    body .main-header.wonder-nav-header .nav-call-btn:hover {
        color: #fff !important;
        background: transparent !important;
        box-shadow: none !important;
    }

    body .main-header.wonder-nav-header .nav-item-icon,
    body .main-header.wonder-nav-header .call-icon-wrap {
        color: #f5a100 !important;
    }

    body .main-header.wonder-nav-header .burger-menu .line-menu {
        background-color: #f5a100 !important;
    }
</style>
