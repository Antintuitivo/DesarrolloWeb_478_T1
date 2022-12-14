<div class="user-menu" id="user-menu"> 
    <div class="icon menu-icon" id="menu-icon">
        <svg id="menu" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg"><path d="M15 6c-1.55 0-2.814.786-3.666 1.78C10.482 8.778 10 9.975 10 11v2.5c0 .667.334 1.152.584 1.527.25.375.416.64.416.973v1c0 .61-.062 1.174-.748 1.566l-3.5 2c-.8.457-1.272.9-1.518 1.416C4.99 22.498 5 23.002 5 23.5c0 .67 1 .66 1 0 0-.5.008-.818.137-1.088.128-.27.406-.575 1.11-.978l3.5-2C11.813 18.826 12 17.734 12 17v-1c0-.667-.334-1.152-.584-1.527-.25-.375-.416-.64-.416-.973V11c0-.69.387-1.743 1.094-2.568C12.8 7.606 13.784 7 15 7c1.215 0 2.2.606 2.906 1.432C18.613 9.257 19 10.312 19 11v2.5c0 .333-.166.598-.416.973-.25.375-.584.86-.584 1.527v1c0 .735.188 1.826 1.252 2.434l3.5 2c.705.403.983.708 1.11.978.13.27.138.587.138 1.088 0 .67 1 .672 1 0 0-.5.01-1.002-.234-1.518-.246-.515-.72-.96-1.518-1.416l-3.5-2C19.062 18.174 19 17.61 19 17v-1c0-.333.166-.598.416-.973.25-.375.584-.86.584-1.527V11c0-1.026-.482-2.223-1.334-3.22C17.814 6.787 16.55 6 15 6zm0-6C6.722 0 0 6.722 0 15c0 8.278 6.722 15 15 15 8.278 0 15-6.722 15-15 0-8.278-6.722-15-15-15zm0 1c7.738 0 14 6.262 14 14s-6.262 14-14 14S1 22.738 1 15 7.262 1 15 1z"/></svg>
    </div>
    <div class="menu-content" id="menu-content">
        <div class="icon logout-icon" id="logout-icon">
            <svg id="logout" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 0C7.678 0 7 .678 7 1.5v6c0 .665 1 .67 1 0v-6c0-.286.214-.5.5-.5h20c.286 0 .5.214.5.5v27c0 .286-.214.5-.5.5h-20c-.286 0-.5-.214-.5-.5v-7c0-.66-1-.654-1 0v7c0 .822.678 1.5 1.5 1.5h20c.822 0 1.5-.678 1.5-1.5v-27c0-.822-.678-1.5-1.5-1.5zm-4 19c.45 0 .643-.563.354-.854L1.207 14.5l3.647-3.646c.442-.426-.254-1.16-.708-.708l-4 4c-.195.196-.195.512 0 .708l4 4c.095.097.22.146.354.146zm13-4h-14c-.277 0-.5-.223-.5-.5s.223-.5.5-.5h14c.277 0 .5.223.5.5s-.223.5-.5.5z"/></svg>
        </div>
        <div class="content-info">
            <p class="info info-name"><?php echo $_SESSION['login']['user-fname'] ." ". $_SESSION['login']['user-lname'];?></p>
            <hr class="info info-line">
            <p class="info info-email"><?php echo $_SESSION['login']['user-email'];?></p>
        </div>
    </div>
</div>
<script src="../../web/javascript/user-menu.js"></script>